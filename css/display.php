
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style20.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:black;">
    
    <div class="main-div">
        <br>
        <br>
        <h2>List Of Doctors</h2>
        <br>
        <br>
        <div class="center-div">
            <div class="table-responsive">
                <center>
                <table border="2"class="table table-dark table-striped" style="width: 50%;">
                    <thead>
                        <tr>
                            <th>Doctor Id</th>
                            <th>Doctor Name</th>
                            <th>Doctor Address</th>
                            <th>Doctor Contact</th>
                            <th>Doctor Email</th>
                            <th>Doctor Category</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                             include 'conection.php';

                             $selectquery = "SELECT * FROM doctor123";
                             $query = mysqli_query($conn,$selectquery);
                         
                             $number = mysqli_num_rows($query);
                         
                             while($res = mysqli_fetch_array($query)){
                         
                        ?>

                                 <tr>
                                    <td><?php  echo $res['id'];?></td>
                                    <td><?php  echo $res['name'];?></td>
                                    <td><?php  echo $res['address'];?></td>
                                    <td><?php  echo $res['contact'];?></td>
                                    <td><?php  echo $res['email'];?></td>
                                    <td><?php  echo $res['category'];?></td>
                                    <td><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td>
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

</body>
</html>