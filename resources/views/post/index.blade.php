<form method="post" action="">
    {{ csrf_field() }}
    <input type="text" name="title">
    <textarea name="content"></textarea>
    <input type="submit">
</form>