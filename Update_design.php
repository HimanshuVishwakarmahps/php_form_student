<?php include("db_conect.php");
$id = $_GET['id'];


$query= "SELECT * FROM form where id='$id' ";#form is table name 
$data = mysqli_query($conn, $query);


$result= mysqli_fetch_assoc($data);

?>
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
        Update Student Details
    </div>
    <div class="form">
        
        <div class="input_fielad">
            <label>First Name</label>
            <input type="text" placeholder="first name" name="firstName" value="<?php echo $result['firstName'];?>" required/>
        </div>
        <div class="input_fielad">
            <label>Last Name</label>
            <input type="text" placeholder="last name" name="lastName" value="<?php echo $result['lastName'];?>" required/>
        </div>
        <div class="input_fielad">
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="password" value="<?php echo $result['password'];?>" required/>
        </div>
        <div class="input_fielad">
            <label>Confirm Password</label>
            <input type="password" placeholder="confirm password" name="confirmPassword" value="<?php echo $result['confirmPassword'];?>" required/>
        </div>
        <div class="input_fielad">
            <label>Gender</label>
            <select class="select" name="gender"required>
                <option value="">Select</option>
               <option value="male"
               <?php
                  if ($result['gender'] == 'male') {
                    echo"selected";
                  }
                  ?>  
               >
                Male</option>
                <option value="female" 
                <?php
                if ($result['gender']=='female') {
                    echo"selected";
                  }
                  ?>  
                >Female</option>
                <option value="custom">Custom</option>
             </select>
       </div>
        <div class="input_fielad">
            <label>Email</label>
            <input type="text" placeholder="Enter Email" name="Email"value="<?php echo $result['email'];?> " required/>

        </div>
        <div class="input_fielad">
            <label>Phone</label>
            <input type="text" placeholder="Enter no" name="number"value="<?php echo $result['phone'];?>" required/>

        </div>
        <div class="input_fielad">
            <label>Address</label>
            <textarea class="select" name="Address" placeholder="Enter your Address" required><?php
             echo $result['Address'];
            ?></textarea>
        </div>

        <div class="input_fielad_terms">
            <label class="check">
            <input type="checkbox" id="check1" required />
            <samp class="checkmark"></samp>

        </label>
        <p class="tt">Agree to terms and conditions</p>
        </div>
        <div class="btn1">
            <input type="submit" value="Update details" class="btn" name="update"/>
        </div>
</form>
    
        
    </div>
   
   </div>
 
</body>
</html>
<?php
if(isset($_POST['update']))
 {
   $firstName       =$_POST['firstName'];
   $lastName        =$_POST['lastName'];
   $password        =$_POST['password'];
   $confirmPassword =$_POST['confirmPassword'];
   $gender          =$_POST['gender'];
   $Email           =$_POST['Email'];
   $number          =$_POST['number'];
   $Address         =$_POST['Address'];




  $query="INSERT INTO FORM (firstName,lastName,password,confirmPassword,gender,email,phone,Address)VALUES('$firstName',' $lastName',' $password','$confirmPassword',' $gender','$Email',' $number ',' $Address')";

  $query="UPDATE form set firstName='$firstName',lastName='$lastName',password='$password',confirmPassword='$confirmPassword',gender='$gender',email='$Email',phone='$number',Address='$Address' where id='$id'";

   
  $data = mysqli_query($conn,$query);

   if ($data)
   {
    echo"<script>alert(' Your forme Updated Successful submitted ||Thank your😊❤💕 ')</script>"; 
    ?>
     #this tag use for page refres do not need refres atometecly refres page 
     <meta http-equiv="refresh" content="0;url=http://localhost/mynew%20website/display.php" />



    <?php
   }
   else 
   {
    echo"<script>alert(' Your not Updated Successful||😢😒')</script>"; 
   }

 

}
?>




 


