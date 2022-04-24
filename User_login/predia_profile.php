<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pediatration Profile</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="20210911_192751.png">
<link href="nav2.css" rel="stylesheet">

<style>
    .btn{
        background-color:rgb(180, 180, 180);
        border-radius: 20px;
        font-size: medium;
        
    }
</style>

</head>
<body class="bg-light">
<?php include("nav3.php");?>
<?php
            include('conection.php');

            $selectquery="SELECT * FROM  doctoradd WHERE spec='Preditic'";
            $query=mysqli_query($conn,$selectquery);

            $number=mysqli_num_rows($query);

            while($res=mysqli_fetch_array($query)){
                $n=$res['photo'];
                $n = substr($n, 0, strpos($n, "image/jpe"));
                //echo $n;
                
                
                $folder="../Doctor_Login/image1/$n";
?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                        <br>
                        <br>
                        <img src="<?php echo $folder;?>" width="80px" height="90px">
                            <h2 class="font-weight-bold mt-4">DR.<?php  echo $res['name'];?></h2>
                            <p class="font-weight-bold"><?php  echo $res['spec'];?></p>
                            <p class="mt-3"><i><?php echo $res['des'] ?></i></p>
                            
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center">Information</h3>
                        <hr class="badge-primary mt-0 w-30">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email</p>
                                <h6 class="text-muted"><?php  echo $res['email'];?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Phone no:</p>
                                <h6 class="text-muted"><?php  echo $res['number'];?></h6>
                            </div>
                        </div>
                        
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">address</p>
                                <h6 class="text-muted"><?php  echo $res['address'];?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Experience</p>
                                <h6 class="text-muted"><?php  echo $res['exp'];?></h6>
                            </div>  
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Visiting Hour</p>
                                <h6 class="text-muted"><?php  echo $res['vtime'];?></h6>
                            </div> 
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Fees(Rs.)</p>
                                <h6 class="text-muted"><?php  echo $res['total_pay'];?></h6>
                            </div>                            
                        </div>
                        <hr class="bg-primary">
                        <button class="btn"  onclick="window.location.href='user_reg.php';">Book an Appointment</button>
                       
                        
                    </div>
        
                </div>
            </div>
        </div>
    </div>
    <?php
            }
    ?>
</body>

</html>