<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    .bg{
        background: #82AAE3;
    }
</style>
 
</head>
<body>
    <div class="container bg" >
        <h3> Registration Form</h3>
        <div class="container">
        <form name="registerform" action="insertdata.php" onsubmit="return validate()" method="post">

        <div class="mb-3">
             <p>
                <label for="fname" class="form-label">First Name </label><br>
                <input type="text" class="form-control" name="fname" id="fname" reuired minlength="4" reuired maxlength="25">
            </p>
        </div>
           
        <div class="mb-3"></div>
            <p>
                <label for="mname" class="form-label" >Middle Name </label><br>
                <input type="text" name="mname" id="mname" class="form-control">
            </p>

            <div class="mb-3"></div>
            <p>
                <label for="lname" class="form-label" >Last Name </label><br>
                <input type="text" name="lname" id="lname" reuired minlength="4" reuired maxlength="25" class="form-control">
            </p>

            <div class="mb-3">
                 <p>
                <label for="email" class="form-label" >Email</label><br>
                <input type="email" name="email" id="email" reuired class="form-control">
            </p></div>
           

            <div class="mb-3">
                <p>
                <label for="pass" class="form-label">Pasword</label><br>
                <input type="password" name="pass" id="pass" reuired class="form-control">
            </p>
        </div>
            

            <div class="mb-3">
                <p>
                <label for="url" class="form-label">Personal Web URL</label><br>
                <input type="url" name="url" id="url" reuired class="form-control">
            </p>
        </div>

        <div class="mb-3">
                <p>
                    <label for="sec" class="form-label">DOB : </label>
                <input type="date" name="dob" id="dob">
            </p>
        </div>
            

            <div class="mb-3">
                <p>
                    <label for="sec" class="form-label">Gender : </label>
                <input type="radio" name="gender" id="male" reuired>Male 
                <input type="radio" name="gender" id="female" reuired >Female
            </p>
        </div>
            

            <div class="mb-3">
                <p>
                    <label for="phn"class="form-label">Mobile Number</label><br>
                    <input type="number" name="phnNo" id="phn"class="form-control">
                
                </p>
            </div>

            
            

        <div class="mb-3">
            <p>
                <label for="text"class="form-label">Brief Info</label><br>
                <textarea name="info" id="info" cols="30" rows="30"class="form-control" required></textarea>
            </p>
        </div>
            

            <div class="col-8">
            <button class="btn btn-primary" type="submit">Register </button>
            </div>
            

        
        </form>

        </div>
        
    
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    
</body>
</html>