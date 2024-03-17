<html> 
<head>
      <title>display</title>
    <style>
        body
        {
          background:#d071f9;
        }
        table{
            background: white;
        }
        .Update{
            height:20px;
            width:50%;
            backgroud-image:red;
        }

     </style>  
 </head>     
<?php
include("db_conect.php");
error_reporting(0);#this use for not show wrning on the displa

$query= "SELECT * FROM form";#form is table name 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
#this function use for array base print data 
 



if ($total != 0) 
{
    ?>

    <h2 align="center"><mark>All records of Student<mark><h2>
    <center> 
    <table border=3 cellspacing="7" width="100%">
        <tr>
        <th width="2%">ID</<th>
        <th width="8%">Fist Name</<th>
        <th width="8%">last Name</<th>
        <th width="8%">Gender</<th>
        <th width="15%">Email</<th>
        <th width="10%">phone</<th>
        <th width="25%">Address</<th>
        <th width="22%">Opretions</<th>
        </tr>   
    <?php
    
    while ($result= mysqli_fetch_assoc($data))
    {
   
    echo" 
    <tr>
       <td>"."$result[id]"."</<td>
       <td>"."$result[firstName]"."</<td>
       <td>"."$result[lastName]"."</<td>
       <td>"."$result[gender]"."</<td>
       <td>"."$result[email]"."</<td>
       <td>"."$result[phone]"."</<td>
       <td>"."$result[Address]"."</<td>
       <td><a href='Update_design.php?id=$result[id]'><input type='submit' value='Update' class='Update'/></a></<td>

    </tr>
    ";
   
       
    }
    
}
else 
{
    echo" no record ";
}

?>
<center>
     </table>



