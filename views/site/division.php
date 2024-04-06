<h1 class="text-title">Подразделение</h1>
<div class="form-addition" >
    <p class="form-addition-title">Добавить новое подразделение</p>
    <form class="form-addition-text" method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h4 class="form-addition-title"><?= $message ?? ''; ?></h4>
        <input class="input" type="text" name="name_division" placeholder="Название подразделения">
        <input type="hidden" name="division_id">
        <input class="input" type="text" name="view_division" placeholder="Вид подразделения">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>

