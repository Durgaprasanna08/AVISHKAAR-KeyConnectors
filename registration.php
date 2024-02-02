<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
      <?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
if (isset($_SESSION["user"])) {
   header("Location: index.php");
   exit(); // Ensure that no further code is executed after redirection
}

require_once "database.php"; // Make sure to include your database connection file

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
   $fullName = $_POST["fullname"];
   $email = $_POST["email"];
   $idNumber = $_POST["idno"];
   $mobileNumber = $_POST["mobileno"];
   $occupation = $_POST["occupation"];
   $password = $_POST["password"];
   $passwordRepeat = $_POST["repeat_password"];

   $passwordHash = password_hash($password, PASSWORD_DEFAULT);

   $errors = [];

   if (empty($fullName) || empty($email) || empty($idNumber) || empty($mobileNumber) || empty($occupation) || empty($password) || empty($passwordRepeat)) {
       array_push($errors, "All fields are required");
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       array_push($errors, "Email is not valid");
   }
   if (strlen($password) < 8) {
       array_push($errors, "Password must be at least 8 characters long");
   }
   if ($password !== $passwordRepeat) {
       array_push($errors, "Password does not match");
   }

   $sql = "SELECT * FROM users WHERE email = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $result = $stmt->get_result();
   $rowCount = $result->num_rows;

   if ($rowCount > 0) {
       array_push($errors, "Email already exists!");
   }

   if (count($errors) > 0) {
       foreach ($errors as $error) {
           echo "<div class='alert alert-danger'>$error</div>";
       }
   } else {
       $sql = "INSERT INTO users (full_name, email, idno, mobileno, occupation, password) VALUES (?, ?, ?, ?, ?, ?)";
       $stmt = $conn->prepare($sql);
       $stmt->bind_param("ssssss", $fullName, $email, $idNumber, $mobileNumber, $occupation, $passwordHash);
       $stmt->execute();
       echo "<div class='alert alert-success'>You are registered successfully.</div>";
   }
}
?>
       <form action="registration.php" method="post">
         <h1 class="text-center">Register Form</h1>
           <div class="form-group">
               <input type="text" class="form-control" name="fullname" placeholder="Full Name">
           </div>
           <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Email">
           </div>
           <div class="form-group">
               <input type="text" class="form-control" name="idno" placeholder="ID Number">
           </div>
           <div class="form-group">
               <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number">
           </div>
           <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" placeholder="Location">
           </div>

           <div class="form-group">
               <label for="occupation">Authority:</label>
               <select class="form-control" name="occupation" id="occupation">
               	   <option selected disabled>Select Authority</option>
                   <option value="1">Ministry of Power</option>
                   <option value="2">NHAI</option>
                   <option value="3">Ministry of Environment and Forest</option>
                   <option value="4">Ministry of Railways</option>
                   <option value="5">Others</option>
               </select>
           </div>
           <div class="form-group">
               <input type="password" class="form-control" name="password" placeholder="Password">
           </div>
           <div class="form-group">
               <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
           </div>
           <div class="form-btn">
               <input type="submit" class="btn btn-primary" value="Register" name="submit">
               
           </div>
       </form>
       <div><br>

           <p>Already Registered? <a href="login.php">Login Here</a></p>
       </div>
   </div>
</body>
</html>
