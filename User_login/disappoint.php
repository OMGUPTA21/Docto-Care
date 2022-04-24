
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Appointment Letter</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style20.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="nav2.css"><link rel="icon" type="image/x-icon" href="20210911_192751.png">
 
   <!-- html2pdf CDN-->
   
   <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>

</head>
<style>
    body{
        color: blue;
        
    }

        #button {
            background-color: blue;
            border-radius: 5px;
            color: white;
        }
        .container {
         
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
           
            border-radius: 7px;
        }

h1 {
    color: #EEEEEE;
}

.loader,
        .loader:after {
            border-radius: 50%;
            width: 10em;
            height: 10em;
        }
        .loader {            
            margin: 60px auto;
            font-size: 15px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em  solid blue;
            border-right: 1.1em solid blue;
            border-bottom:1.1em  solid blue;
            border-left:1.1em  solid white;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 2.1s infinite linear;
        }
        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        #loadingDiv {
            position:absolute;;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:beige;
        }
        nav a{
            float:right;
        }
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="loaded" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
        
        <div class="center-div" id="makepdf">
            <div class="table-responsive">
                <center>
                    <?php
                      $connection = mysqli_connect("localhost","root","","doctor123");
                      $a= $_SESSION["fess"];

                    ?>
              
                        <?php
                     
                            $connection = mysqli_connect("localhost","root","","doctor123");
                           

                             //$selectquery = "SELECT * FROM doctoradd";
                             
                             $selectquery1 = "SELECT * FROM transctiondetail ";
                             
                             $query1 = mysqli_query($connection,$selectquery1);
                         
                             
                             $number = mysqli_num_rows($query1);
                             
                             
                            
                         
                             
                                if($res = mysqli_fetch_array($query1)){
                                    
                         
                        ?>
                        
                           <div class=".container">
                               <br>
                               <br>
                               <center><img src="20210911_192751.png" width="90px" alt=""></center>
                                 <h3 style="color:green;"><i>APPOINTMENT LETTER<i></h3>
                                 <div>
                                This is to inform you that paitent <?php echo $res['name'];?> have a appointment of Doctor  <?php echo  $_SESSION['demail']?>
                               to whom the respected doctor whom the appoitment booked and the gender of paitent is <?php echo $_SESSION['gender']?> <br> .Your time to visit doctor is <?php echo $_SESSION['vtime']?> 
                               and it shedule via google meet link online or offline if you want to shedule contact with our executive toll free number (033)8837373838.<br>
                                
                                 
                                 Doctor User ID:-<?php echo $_SESSION['dname'] ?><br>
                                 USERNAME-<?php echo $_SESSION['id']?><br>
                                 TRANSECTION_ID:-<?php  echo $res['cardnumber'];?>******<br>
                                 BANK:-<?php  echo $res['bank'];?>******<br>
                                 SECURITY CODE:-<?php  echo $res['cvv'];?>******<br>
                                 TOTAL AMOUNT:-<?php echo $a; ?><br>
                                 DATE:-<?php echo  date("Y-m-d");?><br>
                                 YOUR APPOINTMENT LETTER GENERETED!.<br>
                                *****THANK YOU TO CHOOSE DOCTOCARE****
                                </div>
                             
                                 <h3 style="color:blue;">Successful!</h3>
                                
                               
                              
                               
                                    
                             </div>
                             <?php
                        
                    }
                         

                    ?>
                              

                     

        <div class="container">
        <button id="button">print</button>
        <div id="makepdf">
                 
                    </center>
            </div>

        </div>
    </div>

</body>
<script>
    var button = document.getElementById("button");
    var makepdf = document.getElementById("makepdf");
  
    button.addEventListener("click", function () {
        var mywindow = window.open("", "PRINT", 
                "height=400,width=600");
  
        mywindow.document.write(makepdf.innerHTML);
  
        mywindow.document.close();
        mywindow.focus();
  
        mywindow.print();
        mywindow.close();
  
        return true;
    });
    $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
  });  
}
</script>
<!-- Place the script below at the bottom of the body -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>