<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Advance form validation</title>
</head>
<body>
    <div class="container">

        <form name="contactform" action="validateForm.php" method="post" onsubmit="return validate()">
            <h2>Contact</h2>
            <p>
                <label for="First name">First Name</label><br>
                <input type="text" name="fname" required>
                
            </p>
            <p>
                <label for="last name">Last Name</label><br>
                <input type="text" name="lname" required>
                
            </p>
            <p>
                <label for="Email">Email</label><br>
                <input type="email" name="email" required>
                
            </p>
            <p>
                <label for="Phone">Phone</label><br>
                <input type="number" name="phn" required>
                
            </p>
            <p>
                <label for="Password">Password</label><br>
                <input type="password" name="pass" required>
                
            </p>
            <p>
                <label for="address">Address</label><br>
                <input type="address" name="add" required>
                
            </p>

            <p>
                <label for="country">Country</label>
            <select name="country" id="cntry">
                <option value="null">Select on Country</option>
                <option value="bd">Bangladesh</option>
                <option value="in">India</option>
                <option value="en">England</option>
                <option value="us">United States </option>
                <option value="uk">London</option>
            </select>
            </p>

            <p>
                <label for="gender">Gender</label>
                
                <input type="radio" name="gender" id="male">Male
                <input type="radio" name="gender" id="female">Female
            </p>

            <p>
                <label for="message">Your Message</label>
                <input type="text" name="msg" id="">
            </p>
            
            <input type="submit" value="submit">
            
        </form>
    </div>
    
    <script src="./script.js"></script>
</body>
</html>