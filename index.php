<?php
include('config.php');

//update and delete the todo list
// $sql = "DELETE FROM `todolist` WHERE id=''";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <button class="btn bg-primary" name="btn"><a href="/PHP-PROJECT/todoForm.php" class=" text-white">ADD TODO</a></button>
        <table class="table border mt-5" id="listitem">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>TODO</th>
            <th>ACTION</th>
        </thead>
        <tbody>
                <?php
                $sql = "SELECT * FROM `todolist`";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row['id']; 
                        $name = $row['name']; 
                        $todo = $row['todo']; 
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$todo.'</td>
                        <td>
                        <button class="btn bg-primary text-white mx-1" name="update"><a href="/PHP-PROJECT/update.php?updateId='.$id.'" class="text-white">upadte</a></button>
                        <button class="btn bg-danger text-white" name="delete"><a href="/PHP-PROJECT/delete.php?deleteId='.$id.'" class="text-white">delete</a></button>
                         </td>
                        </tr>';
                    }
                }
                ?>

                
        </tbody>
    </table>
</div>
</body>
</html>