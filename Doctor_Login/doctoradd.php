<?php include('conection.php');
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:DoctorLogin.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Doctor Profile Add </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="doctor.css">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
   
</head>
<style>
    button {
    background-color: #5891ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:1;
  }
</style>
<body style="background: beige;">
<nav>
<a href="doc_dash.php" style="color:blue;float:right;">BACK</a>
</nav>

<br>
<br>
<center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">DOCTORADD</button></center>     
    <div id="id01"class="registration-form">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   
        <form class="container" action="add.php" method="POST" enctype="multipart/form-data">
            <h2>DOCTOR ADD</h2>
           
        <center><img src="20210911_192751.png"style="height:100px;"></center>
            
            <div class="form-group">
                <label for="myfile">NAME:</label>
                <input type="text" class="form-control item" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="myfile">Doctor Description:</label>
                <input type="textarea" class="form-control item" id="name" name="des">
            </div>
            <div class="form-group">
                <label for="myfile">EMAIL:</label>
                <input type="email" class="form-control item" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="myfile">WHATAPP NUMBER:</label>
                <input type="text" class="form-control item" id="number" name="number">
            </div>
            <div class="form-group">
                <label for="myfile">EXPERIENCE:</label>
                <select class="form-control item" id="exp" name="exp">
                    <option value="Experience">choice</option>
                    <option value="(1-2)years">(1-2)years</option>
                    <option value="(2-5)years">(2-5)years</option>
                    <option value="(5-10)years">(5-10)years</option>
                    <option value="15yeasrs above">15yeasrs above</option>
                </select>
            </div>
            <div class="form-group">
                <label for="myfile">CLANIC ADDRESS:</label>
                <textarea class="form-control item" id="Address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="myfile">CERTIFICATE:</label>
                <input type="file" id="image"  name="image" class="form-control item">
            </div>
            <div class="form-group">
                <label for="myfile">SPECALIZATION:</label>
                <select class="form-control item" id="specalization" name="spec">
                    <option value="LIST">LIST</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Ginologist">Ginologis</option>
                    <option value="Dental">Dental</option>
                    <option value="General physicians">General physicians</option>
                    <option value="Preditic">Preditic</option>
                    <option value="Orthopedic">Orthopedic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="myfile">PHOTO:</label>
                <input type="file" id="image" name="image1" class="form-control item">
            </div>
            <div class="form-group">
                <label for="myfile">Visiting hour:</label>
                <input type="text" class="form-control item" id="time" name="vtime">
            </div>
            <div class="form-group">
                <label for="myfile">Your Fees:</label>
                <input type="text" class="form-control item" id="fees" name="fees">
            </div>
            <div class="form-group">
                <button type="submit" name="upload" value="upload Image/Data" class="btn btn-block create-account" style="background-color:rgb(102, 178, 255);color:blue">ADD</button>
            </div>
        </form>
        <div class="social-media">
        
        <div class="social-icons">
        
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

    <footer>
    <p>
     <b>
         <i>
      <center  style="color:blue;">NOTE:-CREATING A PROFILE ONE TIME ONLY  ONCE YOU CREATED PLEASE DON'T MAKE IT AGAIN AS ADMIN CAN BLOCK YOUR PROFILE COMPLETELY.</center>
         </i>
    </b>
   </p>
    </footer>
</body>


</html>
