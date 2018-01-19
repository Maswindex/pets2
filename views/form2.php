<?php
    session_start();

    $_SESSION['animal'] = $_POST['animal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>second form</title>
</head>
<body>
<form action="./results" method="POST">
    <select name="color">
        <option value='purple'>Purple</option>
        <option value='orange'>Orange</option>
        <option value='green'>Green</option>
        <option value='black'>Black</option>
    </select>

    <button type='submit'>Order</button>

</form>

</body>
</html>