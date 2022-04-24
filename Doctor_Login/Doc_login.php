<link rel="stylesheet" href="doctor.css">
<link rel="stylesheet" href="dashBoard/home.css">
<link rel="stylesheet" href="dashBoard/nav2.php">
<style>
    h1{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color:red;
        text-align: center;
    }
</style>
<?php   
    session_start();

     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db_name = "doctor123";  
       
    $conn = mysqli_connect($host, $user, $password, $db_name);    

    $username = $_POST['id'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from `userlogin` where id= '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $sql_e = "SELECT id FROM `userlogin` WHERE id='$username'";
        $res_e = mysqli_query($conn, $sql_e);
          
        if($count == 1){  
            //echo "<h1> Login successful </h1>";  
            include('dashBoard/home.php'); 
        } 
        
        else{
        if(mysqli_num_rows($res_e) == 0){
                echo "<h1> SOORY... ACCOUNT NOT EXIT PLEASE CREATE IT! .</h1>"; 	
              } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        
               
        
        }   
    }  
?>  
