<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ur_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="book_appointment.css">
   
    <style>
        .btn {
            background-color: rgb(180, 180, 180);
            border-radius: 20px;
            font-size: medium;

        }
    </style>

</head>

<body class="bg-light">
    <?php include("nav2.php");?>
    <?php
            include('conection.php');

            $selectquery="SELECT * FROM  doctoradd WHERE spec='CARDIOLOGIST'";
            $query=mysqli_query($conn,$selectquery);

            $number=mysqli_num_rows($query);

            while($res=mysqli_fetch_array($query)){
                
?>
    <div class="container" id="blur">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4">
                                <?php  echo $res['name'];?>
                            </h2>
                            <p class="font-weight-bold">
                                <?php  echo $res['spec'];?>
                            </p>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque facere
                                autem dolores, non perspiciatis nemo libero nesciunt repudiandae quae incidunt.</p>
                            <i class="far fa-edit fa-2x mb-4"></i>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center">Information</h3>
                        <hr class="badge-primary mt-0 w-30">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email</p>
                                <h6 class="text-muted">
                                    <?php  echo $res['email'];?>
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Phone no:</p>
                                <h6 class="text-muted">
                                    <?php  echo $res['number'];?>
                                </h6>
                            </div>
                        </div>

                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">address</p>
                                <h6 class="text-muted">
                                    <?php  echo $res['address'];?>
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Experience</p>
                                <h6 class="text-muted">
                                    <?php  echo $res['exp'];?>
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Visiting Hour</p>
                                <h6 class="text-muted">
                                   
                                </h6>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <button class="btn" onclick=toggle()>Book an Appointment</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup">
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, suscipit?</p> -->
        <div class="wrapper">
        <div class="title">
            Book an Appointment
        </div>
        <form method="POST">
            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" id="first name" name="first_name" class="input">
                </div>
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" id="last name" name="last_name" class="input">
                </div>
                <div class="input_field">
                    <label>E-mail</label>
                    <input type="email"  id="e-mail" name="e-mail" class="input">
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" id="phone no" name="phone_no" class="input">
                </div>
                <div class="input_field">
                    <label>Date of birth</label>
                    <input type="date" id="dob" name="dob" class="input-1">
                    <button type="button" class="btn-1" onclick="ageCalculation()">Calculate</button>
                </div>
                <div class="input_field">
                    <label>Age</label>
                    <input type="text" id="age" name="age" class="input">
                </div>
                <div class="input_field">
                    <label>Previous Prescription</label>
                    <input type="file" class="input1">    
                </div>
                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select  name="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>              
                <div class="input_field">
                    <button type="submit" class="btn">Submit</button>

                </div>
            </div>
        </form>
    </div>
        <button class="btn" onclick=toggle()>close</button>
    </div>
    <?php
        }
    ?>
    <script type="text/javascript">
            function toggle() {
                var blur = document.getElementById('blur');
                blur.classList.toggle('active');
                var popup = document.getElementById('popup');
                popup.classList.toggle('active');
            }
    </script>
</body>

</html>