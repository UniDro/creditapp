<body>
<h1>Edit Book</h1>
<form action="index.php?c=book&a=update&id=<?= $book->id ?>" method="post">
    <label for ="name">Nome: </label>
    <input type="text" name="name" id="name" value="<?= $book->name?>">
    <label for="isbn">Isbn: </label>
    <input type="text" name="isbn" value="<?= $book->isbn ?>">
    <button class="btn btn-primary" type="submit">Edit</button>
</form>
<?php if(isset($book->errors)) {echo $book->errors->on('name');}?>
<?php if(isset($book->errors)) {echo $book->errors->on('isbn');}?>
</body>