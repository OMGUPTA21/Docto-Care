<?php include('conection.php');
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:ADMAINLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    
    <title>Transcation Record</title>
</head>
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
body{
    padding :120px;
    margin:0px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
 
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: rgb(146, 16, 146);}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
  
}
nav a{
    float:right;
}
</style>
<body style="background-color:rgb(248, 249, 237);">
     <!--trasaction $-->
     <nav>
         <a href="Admin_dash.php">BACK</a>
     </nav>


     <div>
        <center><h3 style="color:red"><b><i>PAYMENT TRANSCATION DETAIL</b></i></h3></center>
    </div>

<table class="center" id="customers">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Transcation ID</th>
                            <th>Bank</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                            $connection = mysqli_connect("localhost","root","","doctor123");
                           
                           
                             //$selectquery = "SELECT * FROM doctoradd";
                             $selectquery = "SELECT * FROM transctiondetail ";
                             $query = mysqli_query($connection,$selectquery);
                         
                             $number = mysqli_num_rows($query);

                             
                         
                             while($res = mysqli_fetch_array($query)){
                         
                        ?>

                                 <tr>
                                    <td style="color:green;"><?php  echo $res['name'];?></td>
                                    <td style="color:green;"><?php  echo $res['cardnumber'];?>******</td>
                                    <td style="color:green;"><?php  echo $res['bank'];?></td>
                                    
                               </tr>  

                        <?php
                             }

                        
                        ?>

                        
                    </tbody>
                </table>

    
</body>
</html>