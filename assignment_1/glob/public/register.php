<?php
require_once('../private/initialize.php');

// Set default values for all variables the page needs.

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$username=$_POST["username"];
$error=[];

// if this is a POST request, process the form
// Hint: private/functions.php can help
if (is_post_request()){
  // Confirm that POST values are present before accessing them.

  // Perform Validations 61Q2X7qBt((S
  // Hint: Write these in private/validation_functions.php

  //first name
  if(is_blank($_POST["first_name"])){
    $error[]="First name cannot be blank.";
  }
  else if(!has_length($_POST["first_name"], ["min"=>2, "max"=>255])){
    $error[]="First name must between 2 to 255 characters.";
  }


  // last name
  if(is_blank($_POST["last_name"])){
    $error[]="Last name cannot be blank.";
  }
  else if(!has_length($_POST["last_name"], ["min"=>2, "max"=>255])){
    $error[]="Last name must between 2 to 255 characters.";
  }

  // email
  if(is_blank($_POST["email"])){
    $error[]="Email cannot be blank.";
  }
  else if(!has_valid_email_format($_POST["email"])){
    $error[]="Email must have the correct format";
  }

  // user name
  if(is_blank($_POST["username"])){
    $error[]="Username cannot be blank.";
  }
  else if(!has_length($_POST["username"], ["min"=>8])){
    $error[]="Username must be at least 8 characters";
  }

  // Check if there is any error
  if(empty($error)){
    //no error
    $datetime=date("Y-m-d H:i:s");
    $sql="INSERT INTO users (first_name, last_name, email, username, created_at)
    VALUES ('$first_name', '$last_name', '$email', '$username', '$datetime') ;";
    $connection=db_connect();
    $result=db_query($connection, $sql);
    if($result){
      db_close($connection);
      redirect_to("registration_success.php");
    }
    else{
      echo(db_error($connection));
      db_close($db);
      exit;
    }
  }
}


// if there were no errors, submit data to database

// Write SQL INSERT statement
// $sql = "";

// For INSERT statments, $result is just true/false
// $result = db_query($db, $sql);
// if($result) {
//   db_close($db);

//   TODO redirect user to success page

// } else {
//   // The SQL INSERT statement failed.
//   // Just show the error, not the form
//   echo db_error($db);
//   db_close($db);
//   exit;
// }

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
  // TODO: display any form errors here
  // Hint: private/functions.php can help
  echo(display_errors($error));
  ?>

  <!-- TODO: HTML form goes here -->
  <form name="main_form" method="POST" id="main_form">
    <label>First name:</label>
    <br>
    <input type="text" name="first_name" value="<?php echo $first_name; ?>">
    <br>
    <label>Last name:</label>
    <br>
    <input typr="text" name="last_name" value="<?php echo $last_name; ?>">
    <br>
    <label>Email:</label>
    <br>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <br>
    <label>Username:</label>
    <br>
    <input type="text" name="username" value="<?php echo $username; ?>">
    <br>
    <br>
    <input type="submit" name="submit">

  </form>



</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
