<?php include "db.php"; ?>
<?php

function createRows()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        /*$connection = mysqli_connect('localhost', 'root', '', 'loginapp' );

        if($connection) {
            echo "We are connected";
        } else {
            die("Database connection failed");
        }*/

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error());
        }
        else{
           echo "Record Created";
        }
    }
}

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else {
        echo "The record was successfully updated";
    }
}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else{
        echo "The record was successfully deleted";
    }
}