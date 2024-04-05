<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\Division;
use Model\Phone;
use Model\Room;
use Model\Subscriber;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;


class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }
    

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }

   public function signup(Request $request): string
   {
      if ($request->method === 'POST') {
   
          $validator = new Validator($request->all(), [
              'name' => ['required'],
              'login' => ['required', 'unique:users,login'],
              'password' => ['required']
          ], [
              'required' => 'Поле :field пусто',
              'unique' => 'Поле :field должно быть уникально'
          ]);
   
          if($validator->fails()){
              return new View('site.signup',
                  ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
          }
   
          if (User::create($request->all())) {
              app()->route->redirect('/login');
          }
      }
      return new View('site.signup');
   }
   

 
   public function login(Request $request): string
   {
      
        if ($request->method === 'GET') {
            return new View('site.login');
        }
     
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_functions(): string
    {
            return new View('site.add_functions');   
    }
   
    public function select_all_numbers(Request $request): string
{
    $subscribers = Subscriber::all();
    $phonesBySubscriber = [];

    if ($request->method === 'POST') {
        $subscriberId = $_POST['subscriber_id'] ?? null;

        if (!empty($subscriberId)) {
            $phones = Phone::where('subscriber_id', $subscriberId)->get();

            foreach ($phones as $phone) {
                $phonesBySubscriber[$phone->subscriber_id][] = $phone->phone_number;
            }
        }
    }

    return new View('site.select_all_numbers', ['subscribers' => $subscribers, 'phonesBySubscriber' => $phonesBySubscriber]);
}

    
   
    public function select_numbers(Request $request): string
    {
        $divisions = Division::all();
        $subscribers = [];
        $phonesBySubscriber = [];
    
     
        if ($request->method === 'POST') {
            $divisionId = $_POST['division_id'] ?? null;
    
           
            if (!empty($divisionId)) {
             
                $rooms = Room::where('division_id', $divisionId)->pluck('room_id');
    
              
                $phones = Phone::whereIn('room_id', $rooms)->get();
    
                foreach ($phones as $phone) {
                    $phonesBySubscriber[$phone->subscriber_id][] = $phone->phone_number;
                }
    
                $subscribers = Subscriber::whereIn('subscriber_id', array_keys($phonesBySubscriber))->get();
            }
        }
    
        return new View('site.select_numbers', ['divisions' => $divisions, 'subscribers' => $subscribers, 'phonesBySubscriber' => $phonesBySubscriber]);
    }
    
    public function count_abonents(Request $request): string
    {
        $divisions = Division::all();
        $rooms = Room::all();
        $result = [];
    
        if ($request->method === 'POST') {
            $divisionId = $_POST['division_id'] ?? null;
            $roomId = $_POST['room_id'] ?? null;
    
            if (!empty($divisionId)) {
                $result['division'] = Division::find($divisionId)->name_division;
                $result['division_count'] = Subscriber::where('division_id', $divisionId)->count();
            }
    
            if (!empty($roomId)) {
                $result['room'] = Room::find($roomId)->number_room;
                $result['room_count'] = Subscriber::whereHas('phones', function ($query) use ($roomId) {
                    $query->where('room_id', $roomId);
                })->count();
            }
        }
    
        return new View('site.count_abonents', ['divisions' => $divisions, 'rooms' => $rooms, 'result' => $result]);
    }
    
    
    
    public function subscriber(Request $request): string
    {
        $divisions = Division::all();
    
        if ($request->method === 'POST') { 
            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'lastname' => ['required'],
                'patronymic' => ['required'],
                'division_id' => ['required'],
                'birthday' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
            ]);
    
            if ($validator->fails()) {
                return new View('site.subscriber', ['divisions' => $divisions, 'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }
    
            $data = $request->all();
    
          
            Subscriber::create($data);
            
            app()->route->redirect('/subscriber');
        }
    
        return new View('site.subscriber', ['divisions' => $divisions]);
    }

    public function phone(Request $request): string
    {
        $phones = Phone::all();
        $rooms = Room::all(); 
        $subscribers = Subscriber::all(); 
    
        $searchQuery = isset($_POST['search_query']) ? $_POST['search_query'] : null;
    
        if ($searchQuery) {
            $subscribers = Subscriber::where('name', 'like', "%$searchQuery%")
                ->orWhere('lastname', 'like', "%$searchQuery%")
                ->get();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator($_POST, [
                'phone_number' => ['required'],
                'room_id' => ['required'],
                'subscriber_id' => ['required'], 
            ], [
                'required' => 'Поле :field пусто',
            ]);
    
            if ($validator->fails()) {
                return new View('site.phone', [
                    'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE),
                    'subscribers' => $subscribers,
                    'search_query' => $searchQuery
                ]);
            }
    
            $phone = new Phone();
            $phone->phone_number = $_POST['phone_number'];
            $phone->room_id = $_POST['room_id'];
            $phone->subscriber_id = $_POST['subscriber_id'];
            $phone->save();
    
            app()->route->redirect('/phone');
        }
    
        return new View('site.phone', [
            'phones' => $phones,
            'rooms' => $rooms,
            'subscribers' => $subscribers,
            'search_query' => $searchQuery
        ]); 
    }
    
    
    
    
    


    
public function room(Request $request): string
{
    $rooms = Room::all();
    $divisions = Division::all();

    if ($request->method === 'POST') {
        $validator = new Validator($request->all(), [
            'number_room' => ['required'],
            'view_room' => ['required'],
            'division_id' => ['required'],   
            'image' => ['required'],        
        ], [
            'required' => 'Поле :field пусто',
        ]);
        

        if($validator->fails()){
            return new View('site.room', ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
        }

        if($_FILES['image']){
            $image = $_FILES['image'];
            $root = app()->settings->getRootPath();
            $path = $_SERVER['DOCUMENT_ROOT'] . $root . '/public/image/';
            $name = mt_rand(0, 10000).$image['name'];
            move_uploaded_file($image['tmp_name'], $path . $name);
            $building_data = $request->all();
            $building_data['image'] = $name;
            if(Room::create($building_data)){
                app()->route->redirect('/room');
            }
        } else{
            if(Room::create($request->all())){
                app()->route->redirect('/room');
            }
        }
    }

    return new View('site.room', ['rooms' => $rooms, 'divisions' => $divisions]); 
}


public function division(Request $request): string
{
    $divisions = Division::all();

    if ($request->method === 'POST') {
        $validator = new Validator($request->all(), [
            'name_division' => ['required'],
            'view_division' => ['required'],          
        ], [
            'required' => 'Поле :field пусто',
        ]);

        if($validator->fails()){
            return new View('site.division', ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
        }

        if (Division::create($request->all())) {
            app()->route->redirect('/division');
        }
    }

    return new View('site.division', ['divisions' => $divisions]); 
}



}






