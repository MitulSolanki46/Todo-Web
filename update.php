<?php
include('config.php');
$id = $_GET['updateId'];
$sql = "SELECT * FROM `todolist` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $todo = $row['todo'];
    }
}
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $todo = $_POST['todo'];

    $sql = "UPDATE `todolist` SET id=$id, name ='$name',todo='$todo' WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:welcome.php');
        // echo 'da?ta updated succesfuly';
    }
    else{
        echo 'failed';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <form method="POST">
            <label for="text">NAME </label><input type="text" name="name" value="<?php echo $name?>">
            <label for="text">TODO </label><input type="text" name="todo" value="<?php echo $todo?>">
            <button class="btn bg-success" name="update"><a class="text-light">update</a></button>
        </form>
    </div>
</body>
</html>