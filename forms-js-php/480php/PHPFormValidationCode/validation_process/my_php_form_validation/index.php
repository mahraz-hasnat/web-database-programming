<?php
    
    if($_POST)                         // if form is submitted
    {
        //not empty
        //atleast 6 characters long

        $errors = array();

        //start validation
        if(empty($_POST['Name']))
        {
            $errors['Name1'] = "Your first name cannot be empty";
        }
        if(strlen($_POST['Name']) < 2)
        {
            $errors['Name2'] = "Your first name must be atleast 2 characters long";
        }      

        if(empty($_POST['password']))
        {
            $errors['password1'] = "Password cannot be empty";
        }
        if(strlen($_POST['password']) < 8)
        {
            $errors['password2'] = "Password must be atlest 8 characters long";
        }

        //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
            header("Location: success.php");
            exit();
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simple Validation PHP</title>
    </head>
    <body>
        <form method="post" target="">
            <p>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name']; ?>" /> <!-- output the field value -->
            </p>
            
            <p><?php if(isset($errors['Name1'])) echo $errors['Name1']; ?></p>   <!-- output errors if error occurs -->
            <p><?php if(isset($errors['Name2'])) echo $errors['Name2']; ?></p>
            
            <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
            </p>
            <p><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p>
            <p><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
