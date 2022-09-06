<?php 
    include 'db.php';
    $id = $_GET['registid'];

    $sql = "DELETE FROM register WHERE id=$id";

    $result = mysqli_query($connection,$sql);

    if($result) {
        header("location:tables.php");
    }else {
        die("There was an error deleting student");
    }
?>

<html lang="en">
<head>
    <title>Delete Student</title>
</head>
<body>
    <h1 class="text-center">DELETE</h1>
</body>
</html>