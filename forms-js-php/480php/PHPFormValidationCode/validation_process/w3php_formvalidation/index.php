<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passwordErr = "";
$name = $password = "";

if ($_POST) {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
 
  // redirect to another page
  if(!empty($_POST["name"]) && !empty($_POST["password"]))
  {
  header("Location: success.php");
  exit();
  }
}

function test_input($data) {
  $data = trim($data); // PHP trim() function, Strip unnecessary characters (extra space, tab, newline) from the user input
  $data = stripslashes($data); // Remove backslashes (\) from the user input data 
  $data = htmlspecialchars($data);  // htmlspecialchars() function converts special characters to HTML entities.
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="">
  Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" /> 
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>