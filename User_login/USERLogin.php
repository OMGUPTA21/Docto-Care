
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css"href="USERLogin.css">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color:red;
    }
    img{
        height:80px;
        float:right;
    }
</style>
<body>
<?php
    session_start();
    ?>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn"onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Signup</button>
            </div>
            <form action="view1.php" class="input-group" id="login" method="POST" >
                <input type="text" name="id" class="input-field" placeholder="ID" required>
                <input type="password" name="pass" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
       

            <form class="input-group" id="register" method="POST">
                
                <input type="text" name="id" class="input-field" placeholder="ID" required>
                <input type="password" name="pass" class="input-field" placeholder="Password" required>
                <input type="password" name="cpass" class="input-field" placeholder=" Conform Password" required>
                <button type="submit"name="upload"  class="submit-btn">Signup</button>
            </form>
           
   
            <?php
include('conection.php');        



if ($_SERVER['REQUEST_METHOD'] == 'POST'){     
                
      
    $id = $_POST['id'];
    $apassword = $_POST['pass'];
    $apassword=base64_encode($apassword);
    $cpassword = $_POST['cpass'];
   $cpassword=base64_encode($cpassword);
    $exists = false;
               
                
           
              
   
               

 if(($apassword == $cpassword)&& $exists==false){
               
              
     // Submit these to a database
    // Sql query to be executed 
              
     $sql_e = "SELECT `id` FROM `userlogin`  WHERE id='$id'";
     $res_e = mysqli_query($conn, $sql_e);
    if(mysqli_num_rows($res_e) > 0){
        echo "<h1> Sorry... email already taken .</h1>"; 	
    }
    else{
        $sql = "INSERT INTO `userlogin`  ( `id`, `pass`, `cpass`) VALUES ( '$id', '$apassword', '$cpassword');";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<h1> PROFILE CREATED ! <h1>";
            }  
              else{
                 echo "<h1> PASSWORD NOT MATCH SORRY! </h1>";
              }
              }
             
            }
       
        }

 
        

    ?>
    </div>

    </div>
    
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>

</body>
</html>