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
        $_SESSION['username'] = $usernamme;
        header('Location: index.php');
        exit;
      } 
    }
  }
}

?>