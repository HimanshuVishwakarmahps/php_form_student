<?php 
include('db_conect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create form</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
   
   <div class="container">
   <form action="" method="POST">



    <div class="title">
        Registration Form
    </div>
    <div class="form">
        
        <div class="input_fielad">
            <label>First Name</label>
            <input type="text" placeholder="first name" name="firstName" required/>
        </div>
        <div class="input_fielad">
            <label>Last Name</label>
            <input type="text" placeholder="last name" name="lastName" required/>
        </div>
        <div class="input_fielad">
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="password" required/>
        </div>
        <div class="input_fielad">
            <label>Confirm Password</label>
            <input type="password" placeholder="confirm password" name="confirmPassword" required/>
        </div>
        <div class="input_fielad">
            <label>Gender</label>
            <select class="select" name="gender" required>
                <option value="">Select</option>
                <option value="male">male</option>
                <option value="female">Female</option>
                <option value="custom">Custom</option>

            </select>
        </div>
        <div class="input_fielad">
            <label>Email</label>
            <input type="text" placeholder="Enter Email" name="Email" required/>

        </div>
        <div class="input_fielad">
            <label>Phone</label>
            <input type="number" placeholder="Enter no" name="number" required/>

        </div>
        <div class="input_fielad">
            <label>Address</label>
            <textarea class="select" name="Address" placeholder="Enter your Address" required></textarea>

        </div>

        <div class="input_fielad_terms">
            <label class="check">
            <input type="checkbox" id="check1" required />
            <samp class="checkmark"></samp>

        </label>
        <p class="tt">Agree to terms and conditions</p>
        </div>
        <div class="btn1">
            <input type="submit" value="register" class="btn" name="submit"/>
        </div>
</form>
    
        
    </div>
   
   </div>
 
</body>
</html>
<?php
if(isset($_POST['submit']))
 {
   $firstName      =$_POST['firstName'];
   $lastName        =$_POST['lastName'];
   $password        =$_POST['password'];
   $confirmPassword =$_POST['confirmPassword'];
   $gender          =$_POST['gender'];
   $Email           =$_POST['Email'];
   $number          =$_POST['number'];
   $Address         =$_POST['Address'];

//    form validetionn php in hindi

if ($firstName!="" && $lastName!="" && $password!="" && $confirmPassword!="" && $gender!="" && $Email!="" && $number!="" &&$Address!="" ) 
{
  $query="INSERT INTO FORM (firstName,lastName,password,confirmPassword,gender,email,phone,Address)VALUES('$firstName',' $lastName',' $password','$confirmPassword',' $gender','$Email',' $number ',' $Address')";

   $data = mysqli_query($conn,$query);
   if ($data)
   {
    echo"<script>alert(' your forme successful submitted ||thank your😊 ')</script>"; 
   }
   else 
   {
    echo"faild";
   }

 }
 else 
 {
   echo"<script>alert('please fill the form');</script>";
 }

}
?>


 


