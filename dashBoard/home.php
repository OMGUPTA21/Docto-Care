<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:../User_login/USERLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">

    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>
<?php include("nav2.php")?>



    <div class="container">

    <div style="color:red;" class="typing-demo"><i><?php echo $_SESSION['id']?></i></div>

        <main class="grid">

            <article>
                <img src="cardiologist-india.png" alt="">
                <div class="text">
                    <h3>Cardiologist</h3>
                    <p>A cardiologist is a medical doctor who studies and treats diseases and conditions of 
                        the cardiovascular system — the heart and blood vessels — including heart rhythm disorders,
                         heart defects and infections, and related disorders </p>
                    <button onclick="window.location.href='../User_login/Cardio_profile.php'">Click</button>
                </div>
            </article>

            <article>
                <img src="family-physician-general-practitioner-main-d.jpg" alt="">
                <div class="text">
                    <h3>General Physicision</h3>
                    <p>In the medical profession, a general practitioner is a medical doctor who treats acute 
                        and chronic illnesses and provides preventive care and health education to patients of all ages. </p>
                    <button onclick="window.location.href='../User_login/gen_profile.php'">Click</button>
                </div>
            </article>

            <article>
                <img src="40996059-female-doctor-keeping-hand-on-the-tummy-of-her-pregnant-patient.jpg" alt="">
                <div class="text">
                    <h3>Ginocologist</h3>
                    <p>A gynecologist is a doctor who specializes in female reproductive health.
                         They diagnose and treat issues related to the female reproductive tract.
                         This includes the uterus, fallopian tubes,  and breasts. </p>
                    <button  onclick="window.location.href='../User_login/Gino_profile.php'">Click</button>
                </div>
            </article>

            <article>
                <img src="ortho.png" alt="">
                <div class="text">
                    <h3>Orthopedic</h3>
                    <p>Orthopedic surgery or orthopedics, is the branch of surgery concerned with conditions
                         involving the musculoskeletal system. </p>
                    <button  onclick="window.location.href='../User_login/ortho_profile.php'">Click</button>
                </div>
            </article>

            <article>
                <img src="pediatrician.jpg" alt=""  height="190px">
                <div class="text">
                    <h3>Pediatration</h3>
                    <p>A pediatrician is a doctor who focuses on the health of children, adolescents and young adults.Pediatricians prevent, behavioral and developmental issues that affect children. </p>
                    <button  onclick="window.location.href='../User_login/Predia_profile.php'">Click</button>
                </div>
            </article>

            <article>
                <img src="den.png" height="190px" alt="">
                <div class="text">
                    <h3>Dentist</h3>
                    <p>A dentist, also known as a dental surgeon, is a medical professional who specializes in dentistry,
                        diagnosis, prevention, and treatment of diseases and conditions of the oral cavity.</p>
                    <button  onclick="window.location.href='../User_login/dental_profile.php'">Click</button>
                </div>
            </article>

        </main>
    </div>

</body>
</html>