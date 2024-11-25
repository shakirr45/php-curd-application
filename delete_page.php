<?php include('dbcon.php'); ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $query = "delete from `students` where `id` = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("query Faild".mysqli_error());
    }
    else{
        header('location:index.php?delete_msg=Your Data has been deleted successfully!');

    }
?>