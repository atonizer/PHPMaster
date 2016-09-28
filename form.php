<?php
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

    if(strlen($username) <= 5){
        echo "Username has to be longer than five characters";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="form.php" method="post">

    <input type="text" name="username" placeholder="Userame"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit">

</form>


</body>
</html>

