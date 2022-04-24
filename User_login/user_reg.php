<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:../User_login/USERLogin");
    }
?>
<?php

include('conection.php');
$result=false;
if($conn){
//echo "true";
}


if (isset($_POST['upload'])) {
    if ( isset( $_FILES['uploadfile'] ) ) {
           
        $folder="image/";
        $folder = $folder . basename( $_FILES['uploadfile']['name']) ;
        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $folder))

        {
       
       // echo "The file ". basename( $_FILES['uploadfile']['name']). " is uploaded";
       
        } else {

            echo "Problem uploading file";
           
            }
            
        }
    
    

  $first_name = $_POST["first_name"];
  $lastname = $_POST["last_name"];
  $demail = $_POST["demail"];
  $_SESSION['demail']=$demail;
  $phone_no = $_POST["phone_no"];
  $dob = $_POST["dob"];
  $vdate=$_POST['vdate'];
  $_SESSION['vdate']=$vdate;
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $_SESSION['gender']=$gender;
  $vtime= $_POST["vtime"];
  $_SESSION['vtime']=$vtime;
  $fess= $_POST["fess"];
  $dname=$_POST['dname'];
  $_SESSION['dname']=$dname;
  $filename= $_FILES['uploadfile'];
  $filename_1=implode($filename);
  $count=0;
  $_SESSION["fess"]=$fess;
  
   
    
 
   //$sql_e = "SELECT `email` FROM `appointment`";


    $sql = "INSERT INTO `appointment` ( `first_name`, `last_name`,`dname`, `demail`, `phone_no`, `dob`,`age`,`filename`,`gender`,`vtime`,`vdate`,`fess`)
    VALUES ('$first_name', '$lastname','$dname','$demail', '$phone_no', '$dob','$age', '$filename_1','$gender','$vtime','$vdate','$fess')";

    $result = mysqli_query($conn, $sql);   

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="ur_style.css">
     <link rel="stylesheet" href="nav2.css">
     <link rel="stylesheet" type="text/css" href="nav2.css"><link rel="icon" type="image/x-icon" href="20210911_192751.png">
</head>

<body>

<?php include("nav3.php");?>
    <div class="wrapper">
    <?php echo $_SESSION['id']?>
        <?php
             if($result){
                header("location:paymentpage.php");
                
            }
        ?>
        <div class="title">
        
        Book an Appointment
        </div>
        <form  method="POST" enctype="multipart/form-data" >
            <div class="form">
                <div class="input_field">
               
            <label>First Name</label>
                <input type="text" id="first name" name="first_name" class="input" required>
                </div>
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" id="last name" name="last_name" class="input" required>
                </div>
                <div class="input_field">
                    <label>Doctor email</label>
                    <input type="email" id="dname" name="dname" class="input" required>
                </div>
                <div class="input_field">
                    <label>Doctor Name</label>
                    <input type="text"  id="e-mail" name="demail" class="input" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" id="phone no" name="phone_no" class="input" required>
                </div>
                <div class="input_field">
                    <label>Date of birth</label>
                    <input type="date" id="dob" name="dob" class="input-1" required>
                    <button type="button" class="btn-1" onclick="ageCalculation()">Calculate</button>
                </div>
                <div class="input_field">
                    <label>Age</label>
                    <input type="text" id="age" name="age" class="input" required>
                </div>
                <div class="input_field" >
                    <label>Previous Prescription</label>
                    <input type="file" 
                   name="uploadfile" 
                   value="" require />    
                </div>
                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select  name="gender" required>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="female">Other</option>
                        </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>visting Date</label>
                    <input type="date" id="vdate" name="vdate" class="input-1" required>
                    <button type="button"  onclick="ageCalculation1()"></button>
                </div>
                <div class="input_field">
                    <label>visting HOUR</label>
                    <input type="text" id="vtime" name="vtime" class="input" required>
                </div>
                <div class="input_field">
                    <label>FESS</label>
                    <input type="text" id="fess" name="fess" class="input" required>
                </div>
                <div class="input_field">
                    <!-- <button type="submit" value="Submit" class="btn"></button> -->
                    <button type="submit" name="upload" class="btn"  required>PROCEED TO PAY</button>
                    
                     </div>
            </div>
        </form>
    </div>
    <style>
        h4{
            color: #33CD32;
        }
    </style>
  
</body>
<script type="text/javascript">

            function ageCalculation(){
                var userinput = document.getElementById("dob").value;
                var dob = new Date(userinput);

                if(userinput==null || userinput==" "){
                    console.log("date printed");
                    document.getElementById("massage").innerHTML ="Choose your date of birth!";
                    return false;
                   
                }
                else{
                    //calculate month difference from current date in time
                    var month_diff=Date.now()-dob.getTime();
                    //convert the calculated difference in date format
                    var age_dt= new Date(month_diff);
                    //extract year from date
                    var year=age_dt.getUTCFullYear();
                    //now calculate the age of the user
                    var age = Math.abs(year-1970);
                    //display the calculated age
                    return document.getElementById("age").value=age+" "+"Year";
                }
            }

            function ageCalculation1(){
                var userinput = document.getElementById("dob").value;
                var dob = new Date(userinput);

                if(userinput==null || userinput==" "){
                    console.log("date printed");
                    document.getElementById("massage").innerHTML ="Choose your date of birth!";
                    return false;
                   
                }
                else{
                    //calculate month difference from current date in time
                    var month_diff=Date.now()-dob.getTime();
                    //convert the calculated difference in date format
                    var age_dt= new Date(month_diff);
                    //extract year from date
                    var year=age_dt.getUTCFullYear();
                    //now calculate the age of the user
                    var age = Math.abs(year-1970);
                    //display the calculated age
                    return document.getElementById("age").value=age+" "+"Year";
                }
            }

     </script>

</html>