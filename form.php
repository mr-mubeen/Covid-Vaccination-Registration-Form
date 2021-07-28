<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-Vaccination Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br>
                <h2>
                    Covid-19 Vaccination Form
                </h2>
                <br><br>

                <form action="" method="post">
               
                    <label for="" class="form-label" >Nationaly Identity Number</label>
                    <input class="form-control" type="number" required name="nic">       
    <br>
                  
                <label for="" class="form-label">Full Name</label>
                <input class="form-control" type="text" required name="fname">

<br>
                <label for="" class="form-label">Address</label>
                <input class="form-control" required name="address">

                <br>
                <label for="" class="form-label">Phone Number</label>
                <input class="form-control" required name="phone">
                <br>


                <label for="" class="form-label">Vaccination Name</label>
                <input class="form-control" required name="vac_name">


                <br>
                <label for="" class="form-label">Hospital Name</label>
                <input class="form-control" required name="hospital_name">

                <br>
                <label for="" class="form-label">Date of Vaccination</label>
                <input class="form-control" type="date" required name="date">
                <br>

               <button type="submit" class="btn btn-primary btn-lg" name="btn">Regsiter</button>


           
                
                </form>
            </div>

        </div>
    </div>


<?php
    if(isset($_POST['btn'])){
//         getting values from input field through POST
          $nic = $_POST['nic'];
          $fname = $_POST['fname'];
          $address = $_POST['address'];
          $phone = $_POST['phone']; 
          $vac_name = $_POST['vac_name'];
          $hospital_name = $_POST['hospital_name'];
          $date = $_POST['date'];
         
            
//          connecting sql databse
          $conn = mysqli_connect('localhost' , 'root' , '' , 'vac') or die ('Connect Failed');
        
//         Insert query to database
          $sql = "INSERT INTO register (nic , fname ,address ,phone , vac_name , hospital_name , date ) VALUES ('{$nic}', '{$fname}' , '{$address}' , '{$phone}' , '{$vac_name}' , '{$hospital_name}' , '{$date}' )";
//        return if query is inserted or not
        $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");

    
          
//         if querry is inserted 
          if($result)
          {
//                if inderted it will show alert
              echo "<script>alert('Register Successfull..!')</script>";
              
          }
          else {
             
              echo "<script>alert('Registration Failed')</script>";
          }
    
        }
 
    ?>
</body>
</html>
