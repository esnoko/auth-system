<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php 
     // Check the submission

     // Take the data and do query

     // Excecute the query

     // Fetch the data

     // Check for row count

     // And use the paasword_verify function

     if(isset($_POST['submit'])) {
       IF($_POST['email'] == '' OR $_POST['password'] == '') {
           echo "<div class='alert alert-danger'>Please fill in all fields</div>";
       } else {
           $email = $_POST['email'];
           $password = $_POST['password'];
           // Fetch from database
           $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
           $stmt->execute([$email]);
           $user = $stmt->fetch();
           if($user) {
               if(password_verify($password, $user['mypassword'])) {
                   echo "<div class='alert alert-success'>Login successful!</div>";
               } else {
                   echo "<div class='alert alert-danger'>Incorrect password.</div>";
               }
           } else {
               echo "<div class='alert alert-danger'>No user found with that email.</div>";
           }
       }
      }

?>
<main class="form-signin w-50 m-auto">
    <form>
        <h1 class="h3 mt-5 fw-normal text-center">Please Login</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <h6 class="mt-3">Don't have an account <a href="register.php">Create your account</a></h6>
    </form>
</main>
<?php require "includes/footer.php"; ?>