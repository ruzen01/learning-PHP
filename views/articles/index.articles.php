<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/layout.php' ?>

<h2>Articles</h2>
<form action='/../../controllers/articleController.php' method='post'>
    <input type='text' name='article text' value='Type here'/>
    <input type='submit' value='Send' />
</form>

<?php
$errors = [];

if (!empty($_POST)) {
    if (empty($_POST['first'])) {
        $errors[] = "No data";
    }

    if (empty($errors)) {
        echo htmlspecialchars($_POST['first']);
        exit();
    }
}

if (!empty($errors)) {
    foreach($errors as $err) {
        echo "<span style=\"color:red\">$err</span><br>";
    }
}
?>

<form method='post'>
    <input type='text' name='first' value='<?=htmlspecialchars($_POST['first'] ?? '', ENT_QUOTES);?>' />
<input type='submit' value='Send' />
</form>

<form method='post'>
    <input type='password' name='second' />
<input type='submit' value='Send' />
</form>

<form method='post'>
    <textarea name='fff' cols='50' rows='10'></textarea>
<input type='submit' value='Send' />
</form>

<select multiple size='6'>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
</select>