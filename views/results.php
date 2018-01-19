<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results page</title>
</head>
<body>
    <h1>Results page</h1>
<?php
    echo 'Your order for a '.$_POST['color'].' '.$_SESSION['animal'].' '.'has been placed';
?>
</body>
</html>