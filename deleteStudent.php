<?php 
  if(isset($_POST['delete'])){
    // print_r($_POST);  
    $id = $_POST["id"];
    
    $connect = mysqli_connect('localhost', 'root', 'root', 'php');
    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $query = "DELETE FROM students WHERE `id` = '$id'";
    $student = mysqli_query($connect, $query);
    if($student){
      // echo "success";
      header('Location: index.php');
      exit;
    }else
    {
      echo mysqli_error($connect);
    }
  }else{
    echo "You shouldn't be here!";
  }
  mysqli_close($connect);
?>