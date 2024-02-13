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
        <h1 class="display-4 mt-5 mb-4">
          Add Grades
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <form method="POST" action="addStudent.php">
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name">
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name">
        </div>
        <div class="mb-3">
          <label for="marks" class="form-label">Marks</label>
          <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Student </button>
      </form>
      </div>
    </div>
  </div>


</body>
</html>