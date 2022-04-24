<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="contact.css">
	<link rel="icon" type="image/x-icon" href="image/20210911_192751.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact Support</title>
</head>
<body style="background: beige;">
<center><img src="../Front_Page/image/20210911_192751.png"style="height:80px;"></center>
  <div class="wrapper">
    <center><h2><i>CONTACT US</i></h2></center>
    <form  method="POST">
      <div class="form-group">
        <label for="name"><i>Full Name</i></label>
        <input type="text" name="name" id="name" placeholder="john rao" required minlength="3" maxlength="25" />
      </div>
      <div class="form-group">
        <label for="email"><i>Email Address</i></label>
        <input type="email" name="email" id="email" placeholder="xyz@gmail.com" required />
      </div>
	  <div class="form-group">
        <label for="number"><i>Phone Number</i></label>
        <input type="number" name="num" id="email" placeholder="1234567890" required />
      </div>
      <div class="form-group">
        <label for="message"><i>Message</i></label>
        <textarea name="msg" id="message" rows="5" placeholder="Type your message here...."></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="submit"><i class="fa fa-send-o" style="font-size:20px;color:blue"></i></i>Send</button>
      </div>
	  
	  <?php


	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$num=$_POST['num'];
		$from=$_POST['email'];
		$msg=$_POST['msg'];
		
		
		
		$a=rand(112,101170221);

		$to='omgupta564@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='REGARDING OF DOCTOCARE SUPPORT RECENT QUIRES';
		$msg="Thank you ".$name." "."of". " ".$from." happy to see you in our doctocare system. Your quires for ticket id"." ". $a ." will be solve shortly have a great day for any inconvinece mail us your quires is for our priority."."If needed our executive call to your given number"." ".$num."." ."\n\n Subject:-". " " .$msg."\n\n\nyour faithfully \ndoctocare@enterprise.com".".";
		$headers="From: $from ";
	
				 
     

		if(mail($to, $subject, $msg, $headers)){
			echo "<center><h4>Sent Successfully!</h4></center>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
    </form>
  </div>
</body>
</html>