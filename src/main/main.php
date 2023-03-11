<?php

/* LOGIN PAGE */

if(isset($_POST['button']) && $_POST['button'] == 'login'){
  $username = trim($_POST['Username']);
  $password = trim($_POST['Password']);

  if(empty($username)) {                                            // Validate input fields
    $error[] = "Username or Email is required.";
  } else {
    $username = ($_POST["Username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {               // check if name only contains letters and whitespace
      $username = "Only letters and white space allowed";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {        // check if e-mail address is well-formed
      $emailErr = "Invalid email format";
    }
  }

  if(empty($password)) {
    $error[] = "Password is required.";
  } else {
    $password = ($_POST["Password"]);
  }

  if(empty($error)) {                                               // If no validation errors, proceed with login
    if(count ($_POST) > 0) {                                        // Athenticate user
      $isSuccess = 0 ;
      $conn = mysqli_connect("");
      $username = $_POST['Username'];
      $sql = "SELECT * FROM users WHERE Username = ";
      $statement = $conn->prepare($sql);
      $statement->bind_param('ss', $username, $password);
      $statement->execute();
      $result = $statement->get_result();
      while($row = $result->fetch_assoc()){
        if(!empty($row)){
          $hashedPassword = $row["Password"];
          if(password_verify($_POST["Password"], $hashedPassword)){
            $isSuccess = 1;
          }
        }
      }
      if($isSuccess == 0){
        $message = "Invalid Username or Password !";
      } else{
        session_start();                                              // if successful, set and send to home page
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
      } 
    }
  }
}
?>


<?php
/* SIGN-UP PAGE */
$exists=false;
$showAlert = false; 
$showError = false;


if(isset($_POST['button']) && $_POST['button'] == 'submit'){

  //Including file that makes the Database connection
  include 'dbconnect.php';

  $username = trim($_POST['Username']);
  $password = trim($_POST['Password']);
  $cpassword = trim($_POST["ConfirmPassword"]);

  $sql = "SELECT * FROM users where username='$username' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);


  //To check if username already in database
  if($num == 0) {
    if(($password == $cpassword) && $exists == false){
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      //Password Hashing is used here.
      $sql = "INSERT INTO `users` ( `Username`, 
      `Password`, `date`) VALUES ('$username', 
      '$hashedPassword', current_timestamp())";

      $result = mysqli_query($conn, $sql);

      if($result){
        $showAlert = true;
      }
    } else {
      $showError = "Passwords do not match";
    }
  }

  if($showAlert) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is now created and you can login. 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
      <span aria-hidden="true">×</span> 
    </button> 
    </div> '; 
}

if($showError) {
  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
  <strong>Error!</strong> '. $showError.'<button type="button" class="close" data-dismiss="alert aria-label="Close">
    <span aria-hidden="true">×</span> 
  </button> 
  </div> '; 
}
    
if($exists) {
  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '. $exists.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
    <span aria-hidden="true">×</span> 
  </button>
  </div> '; 
 }
}
 ?>