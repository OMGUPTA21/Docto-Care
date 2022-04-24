<link rel="stylesheet" href="doctor.css">
<style>
  b{
    color:blue;
  }
</style>
<?php
session_start();

include('conection.php');


if(isset($_POST['upload']))
 {
  

    
           
  
 
 $pname=$_POST['pname'];
 $dname=$_POST['dname'];
 $demail=$_POST['email'];
 $dnum=$_POST['dnum'];
 $cnum=$_POST['cnum'];
 $gen=$_POST['gen'];
 $spec=$_POST['spec'];
 $vtime=$_POST['vtime']; 
 $trans=$_POST['trans'];
 $status= $_POST['status'];
 
 
 
    $query= "INSERT INTO `validation` ( `pname`, `dname`,`demail`, `dnum`, `cnum`, `gen`, `spec`, `vtime`,`trans`,`status`) 
    VALUES ('$pname','$dname','$demail','$dnum','$cnum','$gen','$spec','$vtime','$trans','$status')";
    $query_run=mysqli_query($conn,$query);


    if($query_run)
    {
      echo '<center><b>VALIDATED<b></center>';
     
      
    }
 }








?>