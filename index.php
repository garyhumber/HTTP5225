<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'php');
    $query = 'SELECT id, fname, lname, marks, grade FROM students';

    $students = mysqli_query($connect, $query);
  ?>
    <div class="container">
      <div class="row">
        <?php
          foreach($students as $student){
            if($student['marks'] < 80){
              $flag = 'bg-danger';
            }
            echo '<div class="col-md-4">
                    <div class="card">
                      <div class="card-body ' . $flag . '">
                        <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>
</body>
</html>