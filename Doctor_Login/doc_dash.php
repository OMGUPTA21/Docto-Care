<?php include('conection.php');
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:DoctorLogin.php");
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
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    <title>Doctor Dashboard</title>
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
                    <a href="doc_dash.php">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">DoctoCare</div>
                    </a>
                </li>

                <li>
                    
                    <a href="Doctor_View.php" target="_blank">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Profile</div>
                    </a>
                </li>

                <li>
                    <a href="doctoradd.php" target="_blank">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Create Profile/Register</div>
                    </a>
                </li>

                <li>
                    
                    <a href="admincontact.php"  target="_blank" >
                        <i class="fas fa-th-large"></i>
                        <div class="title">Admin Communication</div>
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
                <?php
                 $connection = mysqli_connect("localhost","root","","doctor123");
                           
                 $a=$_SESSION['id'];
            
               
                 
                  //$selectquery = "SELECT * FROM doctoradd";
                  $selectquery = "SELECT * FROM doctoradd where `email`='$a' ";
                  $query = mysqli_query($connection,$selectquery);
              
                  $number = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query)){
                                $n=$res['photo'];
                                $n = substr($n, 0, strpos($n, "image/jpe"));
                                //echo $n;
                                $folder="image1/$n";
                  ?>              
                                
                                
                    <img src="<?php echo $folder;?>" class="profie" style="border-radius: 50%;width: 50px;height: 50px;"><?php }?>
                </div>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-content">
                    <?php
                        $a=$_SESSION['id'];
                        $sql2="SELECT count(dname) FROM appointment where dname='$a' ";
                        $res= $conn->query($sql2);
                        while($row2 =mysqli_fetch_array($res)){
                    ?>
                        <div class="number"><?php echo $row2['count(dname)'];?></div>
                    <?php
                        }
                    ?>
                        <div class="card-name">Appointment</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                </div>
            <!-- </div> -->

            <!-- <div class="cards"> -->
                <div class="card">
                    <div class="card-content">
                    <?php
                        $a=$_SESSION['id'];
                        $sql2="SELECT count(fess) FROM appointment where dname='$a'";
                        $res= $conn->query($sql2);
                        
                       
                        while($row2 =mysqli_fetch_array($res)){
                            
                    ?>
                        <div class="number"><?php echo $row2['count(fess)'];?></div>
                   
                        <?php
                        }
                    ?>
                        <div class="card-name">Earning</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                </div>
            </div>
            <div class="title"style="float:right; margin-right:30px;">
               
            </div>

            <div class="table">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Appointment Schedule</h2>
                       
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Paitent Name</td>
                            <td>Doctor Name</td>
                            <td>Doctor Email</td>
                            <td>Contact</td>
                            <td>Age</td>
                            <td>Gender</td>
                            <td>Prescription</td>
                            <td>Visting Time</td>
                            
                            
                           
                        </thead>
                        <tbody>
                            <?php
                               $a=$_SESSION['id'];
                                $sql="SELECT first_name,last_name,demail,dname,phone_no,age,`filename`,gender,vtime
                                    FROM appointment where dname='$a'";
                                
                                $result=$conn->query($sql);
                                if($result->num_rows>0){
                                  while($row=$result->fetch_assoc()){
                                    $a=$row['filename'];
                                    $a=substr($a, 0, strpos($a,"image/jpegC:xampp	mpphpC02A.tmp03287"));
                                    //echo $n;
                                    $folder= "../User_login/image/$a";
                            
                            ?>
                            <tr>
                                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                                <td><?php echo $row['demail'];?></td>
                                <td><?php echo $row['dname'];?></td>
                                <td><?php echo $row['phone_no'];?></td>
                                <td><?php echo $row['age'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><a href="<?php echo $folder;?>" target="_blank">download</a></td>
                                <td><?php echo $row['vtime'];?></td>
                                
                           

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