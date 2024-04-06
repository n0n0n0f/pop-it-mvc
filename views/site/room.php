<h1 class="text-title">Помещение</h1>
<div class="form-addition" >
    <p class="form-addition-title">Добавить новое помещение</p>
    <form class="form-addition-text" method="post" enctype="multipart/form-data">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h4 class="form-addition-title"><?= $message ?? ''; ?></h4>
        <input class="input" type="text" name="number_room" placeholder="Номер помещения">
        <input class="input" type="text" name="view_room" placeholder="Вид помещения">
        <input type="hidden" name="room_id">
        <select name="division_id">
            <?php
            foreach ($divisions as $division) {
                echo '<option value="'.$division->division_id.'">'.$division->name_division.'</option>';
            }
            ?>
        </select>
        <input class="input" type="file" name="image">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

    <?php
        foreach ($rooms as $room) {
            echo '<div>' ;
            echo '<p>Номер помещения: ' . $room->number_room . '</p>';
            echo '<p>Вид помещения: ' . $room->view_room . '</p>';
            echo '<p>
                  <img style="max-width: 200px; height: 150px" src="/pop-it-mvc/public/image/' .  $room->image  . '" alt="1"></p>';
            echo '</div>' ;
        }
        ?>
</div>

