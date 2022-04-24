<?php include('conection.php');
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:DoctorLogin.php");
    }
?>

<link rel="stylesheet" href="doctor.css">
<link rel="stylesheet" type="text/css" href="nav2.css"><link rel="icon" type="image/x-icon" href="20210911_192751.png">
<nav>
  <a href="doc_dash.php">back</a>
</nav>
<style>
  b{
    color:blue;
  }
  nav a{
    float:right;
  }
</style>
<?php


include('conection.php');


if(isset($_POST['upload']))
if ( isset( $_FILES['image'] ) ) {
           
  $folder="image/";
  $folder = $folder . basename( $_FILES['image']['name']) ;
  if(move_uploaded_file($_FILES['image']['tmp_name'], $folder))

  {
 
 // echo "The file ". basename( $_FILES['uploadfile']['name']). " is uploaded";
 
  
  if ( isset( $_FILES['image1'] ) ) {
           
        $folder="image1/";
        $folder = $folder . basename( $_FILES['image1']['name']) ;
        
        if(move_uploaded_file($_FILES['image1']['tmp_name'], $folder))
      
        {
         
       
       // echo "The file ". basename( $_FILES['image1']['name']). " is uploaded";
       
        } else {
      
            echo "Problem uploading file";
           
            }
          }
           
  
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $exp=$_POST['exp'];
 $address=$_POST['address'];
 $spec=$_POST['spec'];
 $des=$_POST['des'];
 $vtime=$_POST['vtime']; 
 $fees=$_POST['fees'];
 $image= $_FILES['image'];
 $image_1=implode($image);
 $image1= $_FILES['image1'];
 $image1=implode($image1);
 $_SESSION["email"]=$email;
$count=0;
 
 if($fees>90){
    $totalfees=$fees+($fees*12/100);//fees manupulation
    

    $sql_e = "SELECT `email` FROM `doctoradd` WHERE email='$email'";
    $res_e = mysqli_query($conn, $sql_e);
    if(mysqli_num_rows($res_e) > 0){
      echo "<center><h1><b>Sorry... Doctor $name you are already added .</b></h1></center>"; 	
      echo "<center><b>CREATING A PROFILE ONE TIME ONLY  ONCE. </b></center>";
    }
    else{
      $query= "INSERT INTO `doctoradd` ( `name`,`des`,`email`, `number`, `exp`, `address`, `certificate`, `spec`,`vtime`,`fees`,`total_pay`, `photo`) 
      VALUES ('$name','$des','$email','$number','$exp','$address','$image_1','$spec','$vtime','$fees','$totalfees','$image1')";
      $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
      echo '<center><b>DOCTOR ADDDED<b></center>';
      echo"<br>";
      echo"<br>";
      echo '<center><b>DOCTOR:</b></center>';
      echo  '<center>'.$name.'</center>';
      
    }
 }


}

  }

}

?>