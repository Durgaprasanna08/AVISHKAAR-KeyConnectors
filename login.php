 <?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container mt-5">
       <?php
       if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          $idno = $_POST["idno"];
          $occupation = $_POST["occupation"];
          $mobileno = $_POST["mobileno"];

           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email' AND idno = '$idno' AND occupation = '$occupation' AND mobileno = '$mobileno'";
           $result = mysqli_query($conn, $sql);
           $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
           if ($user) {
               if (password_verify($password, $user["password"])) {
                   $_SESSION["user"] = "yes";
                   header("Location: index.php");
                   die();
               } else {
                   echo "<div class='alert alert-danger'>Password does not match</div>";
               }
           } else {
               echo "<div class='alert alert-danger'>Credentials do not match</div>";
           }
       }
       ?>
     <form action="login.php" method="post"> <h1>Welcome to ASHWATH</h1>
     <br>
       <div class="form-group">
           <input type="email" placeholder="Enter Email:" name="email" class="form-control">
       </div>
       <div class="form-group">
           <input type="text" placeholder="Enter ID No:" name="idno" class="form-control">
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
           <input type="text" placeholder="Enter Mobile No:" name="mobileno" class="form-control">
       </div>
       <div class="form-group">
           <input type="password" placeholder="Enter Password:" name="password" class="form-control">
       </div>
       <div class="form-btn">
           <input type="submit" value="Login" name="login" class="btn btn-primary">
       </div>
     </form>
    <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
   </div>
</body>
</html>

