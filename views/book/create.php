<body>
<h1>Create Book</h1>
<form action="index.php?c=book&a=store" method="post">
    <label for ="name">Nome: </label>
    <input type="text" name="name" value="<?php if(isset($book)) { echo
    $book->name; }?>">
    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
    <label for="isbn">Isbn: </label>
    <input type="text" name="isbn" value="<?php if(isset($book)) { echo
    $book->isbn; }?>">
    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
    <button class="btn btn-primary" type="submit">Send</button>
</form>

</body>