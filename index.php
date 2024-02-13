<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <?php include('includes/nav.php'); ?>
  <?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'php');
    $query = 'SELECT id, fname, lname, marks, grade FROM students';
    $students = mysqli_query($connect, $query);
  ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4">
            Students
          </h1>
        </div>
      </div>
      <div class="row">
        <?php
          foreach($students as $student){
            if($student['marks'] < 80){
              $flag = 'bg-danger';
            }
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                      <div class="card-header text-right">
                        <form method="post" action="deleteStudent.php">
                          <input type="hidden" name="id" value="' . $student['id'] . ' ">
                          <button type="submit" name="delete">X</button>
                        </form>
                        <form method="post" action="update.php">
                          <input type="hidden" name="id" value="' . $student['id'] . ' ">
                          <button type="submit" name="update">Update</button>
                        </form>
                      </div>
                      <div class="card-body ' . $flag . '">
                        <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
                        <p class="card-text">Marks: ' . $student['marks'] . '</p>
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>

    <?php mysqli_close($connect); ?>
</body>
</html>
