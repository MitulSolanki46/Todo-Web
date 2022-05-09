<?php
include('config.php');
if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    $sql = "DELETE FROM `todolist` WHERE id =$id";
    $result = mysqli_query($conn,$sql) ;
    if($result){
        header('location:welcome.php');
        // echo 'delete successfuly';
    }
    else{
        echo 'unable to delete please Try Again !';
    }

}
?>