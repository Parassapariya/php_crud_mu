<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $mb = $_POST['mb'];

      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO `registrer`(username, password,mb_number,email) VALUES('{$user}','{$pass}','{$mb}','{$email}')";
        $add_user = mysqli_query($conn,$query);
    
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" name="email"  class="form-control">
      </div>
      <div class="form-group">
        <label for="mb" class="form-label">Mobile Number</label>
        <input type="text" name="mb"  class="form-control">
      </div>    
      <div class="form-group">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>