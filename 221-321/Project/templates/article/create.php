<form action="../article/store" method="post">
    <input type="text" name="title" id="">
    <input type="text" name="text" id="">
    <select name="author" id="">
        <?php foreach($users as $user):?>
            <option value="<?=$user->getId();?>"><?=$user->getNickname();?></option>
        <?php endforeach;?>
    </select>
    <button type="submit">Save</button>
</form>