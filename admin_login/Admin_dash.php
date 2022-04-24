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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="doc_dash.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    <title>Admin Dashboard</title>
</head>
<style>
    svg {
    width: 30px;
    height: 30px;
  }
  
svg:hover {
    fill: red;
  }
</style>

<body>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="Admin_dash.php">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">DoctoCare</div>
                    </a>
                </li>
                
                <li>
                
                 <div class="title"><?php echo $_SESSION['id']?></div>
                 
                </li>

                <li>
                <a href="enterprise.php" target='_blank'>
                        <i class="fas fa-th-large"></i>
                        <div class="title">Enterprise Form</div>
                    </a>
                </li>

                <li>
                <a href="transcation.php" target='_blank'>
                        <i class="fas fa-th-large"></i>
                        <div class="title">Transcation view</div>
                    </a>
                </li>

                

                <li>
                    <a href="logout2.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text"name="search" placeholder="Search">
                    <label for="search"><i class="fas fa-search"></i></label>
                    
                </div>
                
                <i class="fas fa-bell" style="color:red;"></i>
                <div class="user">
                    <img src="20210911_192751.png" alt="">
                </div>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-content">
                    <?php
                        
                        $sql2="SELECT count(*) FROM appointment";
                        $res= $conn->query($sql2);
                        while($row2 =mysqli_fetch_array($res)){
                    ?>
                        <div class="number"><?php echo $row2['count(*)'];?></div>
                    <?php
                        }
                    ?>
                        <div class="card-name">APPOINMENT</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase-medical" style="color:white;"></i>
                    </div>
                </div>
            <!-- </div> -->

            <!-- <div class="cards"> -->
                <div class="card">
                    <div class="card-content">
                    <?php
                        
                        $sql2="SELECT count(*) FROM doctoradd ";
                        $res= $conn->query($sql2);
                       
                        while($row2 =mysqli_fetch_array($res)){
                    ?>
                        <div class="number"><?php echo $row2['count(*)'];?></div>
                   
                        <?php
                        }
                    ?>
                        <div class="card-name">DOCTORS</div>
                    </div>
                    <div class="icon-box">
                    <i class="fa fa-user-md" style="color:white;"></i>
                    </div>
                </div>
            </div>
            <div class="title"style="float:right; margin-right:30px;">
               
            </div>
            
 <!--doctor-->
 
 <div class="table">
                <div class="last-appointments">
                    <div class="heading-1" >
                        <center><h3 style="color:green;"><b><i>DOCTORS TABLE</b></i></h3><center>
                       
                    </div>
                    <table class="appointments">
                    <thead>
                        <tr>
                         
                            <th>Doctor</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Document</th>
                            <th>Exp</th>
                            <th>Area</th>
                            <th>EDIT</th>
                            <th>DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                            $connection = mysqli_connect("localhost","root","","doctor123");
                           
                           
                             //$selectquery = "SELECT * FROM doctoradd";
                             $selectquery = "SELECT * FROM doctoradd ";
                             $query = mysqli_query($connection,$selectquery);
                         
                             $number = mysqli_num_rows($query);

                            
                         
                             while($res = mysqli_fetch_array($query)){
                                $m=$res['photo'];
                                $m = substr($m, 0, strpos($m, "image/jpe"));
                                //echo $n;
                                
                                
                                
                                $n=$res['certificate'];
                                $n = substr($n, 0, strpos($n, "i"));
                                //echo $n;
                                
                                
                                $folder="../Doctor_Login/image/$n";
                                $folder1="../Doctor_Login/image1/$m";
                         
                        ?>

                                 <tr>
                                   
                                    <td><?php  echo $res['name'];?></td>
                                    <td><?php  echo $res['email'];?></td>
                                    <td><?php  echo $res['number'];?></td>
                                    <td><a href="<?php echo $folder;?>" target="_blank">download</a></td>
                                    <td><?php  echo $res['exp'];?></td>
                                    <td><?php  echo $res['spec'];?></td>
                                    
                                    <td><i class="fa fa-edit" style="font-size:20px;color:blue"></i></td>
                                    <td><i class="fa fa-trash-o" style="font-size:20px;color:red;"></i></td>
                               </tr>  

                        <?php
                             }

                        
                        ?>

                        
                    </tbody>
                </table>
<br>
<hr>
<br class="style:page-break-after: always";>

            <div class="table-1">
                <div class="last-appointments-1">
                    <div class="heading-1">
                     <center><h3 style="color:green;"><b><i>APPOINTMENT TABLE</i><b></h3></center>
                       
                    </div>
                    <table class="appointments-1">
                        <thead>
                            <th>Name</th>
                            <th>Doctor</th>
                            <th>Contact</th>
                            <th>Age</th>
                            <th>Gen</th>
                            <th>prescription</th>
                            <th>Visiting Date</th>
                            <th>Visiting Time</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                            
                           
                        </thead>
                        <tbody>
                            <?php

                                $sql="SELECT first_name,last_name,dname,phone_no,age,`filename`,gender,vtime,vdate
                                    FROM appointment  ";
                                
                                $result=$conn->query($sql);
                                if($result->num_rows>0){
                                  while($row=$result->fetch_assoc()){
                                    $a=$row['filename'];
                                    $a=substr($a, 0, strpos($a,"image/jpegC:xampp	mpphpC02A.tmp03287"));
                                    //echo $n;
                                    $folder2= "../User_login/image/$a";
                            
                            ?>
                            <tr>
                                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                                <td><?php echo $row['dname'];?></td>
                                <td><?php echo $row['phone_no'];?></td>
                                <td><?php echo $row['age'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><a href="<?php echo $folder2;?>" target="_blank">download</a></td>
                                <td><?php echo $row['vdate'];?></td>
                                <td><?php echo $row['vtime'];?></td>
                                <td><i class="fa fa-edit" style="font-size:20px;color:blue"></i></td>
                                <td><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></td>
                                
                          

</div


                               
                                
                               
                            </tr> 
                            <?php
                                }
                            }
                        

                            ?>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
 </div>

                    
        
 
</html>