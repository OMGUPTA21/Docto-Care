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
    <title>Doctor Profile View</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style20.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="20210911_192751.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: rgb(248, 249, 237);">
<nav>
<a href="doc_dash.php" style="color:blue;float:right;">BACK</a>
</nav>
    
    <div class="main-div">
        
        <center><h2 style="color:blue;text-shadow:1px 1px black;"><i>DOCTORS PROFILE</i></h2></center>
        <center><img src="20210911_192751.png"style="height:150px;"></center>
        
  
</select>
        </form>

 <br>
 <br>
        
        <div class="center-div">
            <div class="table-responsive">
                <center>
                <table border="2"class="table table-light table-striped" style="width: 50%;">
                    <thead>
                        <tr>
                            <!--th style="color:blue;"--><!--/th-->
                            <th style="color:blue;">PHOTO</th>
                            <th style="color:blue;">DOCTOR</th>
                            <th style="color:blue;">DESCRIPTION</th>
                            <th style="color:blue;">Email</th>
                            <th style="color:blue;">WHATTAPP NUMBER</th>
                            <th style="color:blue;">EXPERIENCE</th>
                            <th style="color:blue;">ADDRESS</th>
                            <th style="color:blue;">SPECALIZATION</th>
                            <th style="color:blue;">VISITING TIME</th>
                            <th style="color:blue;">EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                
                                 <tr>
                                 <td><img src="<?php echo $folder;?>" width="60px" height="70px"></td>
                                    <td style="color:green;">DR.<?php  echo $res['name'];?></td>
                                    <td style="color:green;"><?php  echo $res['des'];?></td>
                                    <td style="color:green;"><?php  echo $res['email'];?></td>
                                    <td style="color:green;"><?php  echo $res['number'];?></td>
                                    <td style="color:green;"><?php  echo $res['exp'];?></td>
                                    <td style="color:green;"><?php  echo $res['address'];?></td>
                                    <td style="color:green;"><?php  echo $res['spec'];?></td>
                                    <td style="color:green;"><?php  echo $res['vtime'];?></td>
                                    <td><i class="fa fa-edit" style="font-size:24px;color:blue"></i></td>
                               </tr>  

                        <?php
                             }

                        
                        ?>

                        
                    </tbody>
                </table>
                    </center>
            </div>

        </div>
    </div>
    <br><br>
    <footer>
        <center><p style="color:red"><b><i><u>If you not completed doctor add process please complete it to view your profile and if done ignore this warning .</u></i></b></p></center>
    </footer>

</body>
</html>