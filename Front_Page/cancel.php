
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT US FORM</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="contact.css">
   
</head>
<style>
    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:2;
  }
  b{
      color:blue;
  }
</style>
<body >
<nav>
 <a class="action" href="page.php" style="float:right;">HOME</a>
</nav>

    <div id="id01"class="registration-form">
   
   
        <form class="container" method="POST" enctype="multipart/form-data">
            <h2>CONTACT US</h2>
           
        <center><img src="20210911_192751.png"style="height:100px;"></center>
            
            <div class="form-group">
                <label for="myfile">NAME:</label>
                <input type="text" class="form-control item" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="myfile">EMAIL:</label>
                <input type="email" class="form-control item" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="myfile">PHONE NUMBER:</label>
                <input type="text" class="form-control item" id="number" name="number" required>
            </div>
           
            <div class="form-group">
                <label for="myfile">DESCRIPTION:</label>
                <textarea class="form-control item" id="Address" name="desc" requied></textarea >
            </div>
           
            <div class="form-group">
                <label for="myfile">STATE:</label>
                <select class="form-control item" id="specalization" name="state" requird>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam<">Assam</option>
                <option value="Bihar">Bihar</option>
               <option value="Chandigarh">Chandigarh</option>
               <option value="Chhattisgarh">Chhattisgarh</option>
               <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
               <option value="Daman and Diu">Daman and Diu</option>
               <option value="Delhi">Delhi</option>
               <option value="Goa">Goa</option>
               <option value="Gujarat">Gujarat</option>
               <option value="Haryana">Haryana</option>
               <option value="Himachal Pradesh">Himachal Pradesh</option>
               <option value="Jammu and Kashmir">Jammu and Kashmir</option>
               <option value="Jharkhand">Jharkhand</option>
               <option value="Karnataka">Karnataka</option>
               <option value="Kerala">Kerala</option>
               <option value="Ladakh">Ladakh</option>
               <option value="Lakshadweep">Lakshadweep</option>
               <option value="Madhya Pradesh">Madhya Pradesh</option>
               <option value="Maharashtra<">Maharashtra</option>
               <option value="Manipur">Manipur</option>
               <option value="Meghalaya">Meghalaya</option>
               <option value="Mizoram<">Mizoram</option>
               <option value="Nagaland">Nagaland</option>
               <option value="Odisha">Odisha</option>
               <option value="Puducherry">Puducherry</option>
               <option value="Punjab">Punjab</option>
               <option value="Rajasthan">Rajasthan</option>
               <option value="Sikkim<">Sikkim</option>
               <option value="Tamil Nadu">Tamil Nadu</option>
               <option value="Telangana">Telangana</option>
               <option value="Tripura">Tripura</option>
               <option value="Uttar Pradesh">Uttar Pradesh</option>
               <option value="Uttarakhand">Uttarakhand</option>
               <option value="West Bengal">West Bengal</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="upload" value="upload Image/Data" class="btn btn-block create-account" style="background-color:#4782f8;color:white">submit</button>
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
</body>

</html>
<?php

$connection = mysqli_connect("localhost","root","","doctor123");

if(isset($_POST['upload']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $description=$_POST['desc'];
    $state=$_POST['state'];


    $query= "INSERT INTO `contact123` ( `name`, `email`, `number`, `description`, `state`) VALUES ( '$name', ' $email', '$number', '$description', ' $state');";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo "<center><b>THANK SUBMITED WE CONTACT YOU SHORTLY.<b></center>";
    }
}