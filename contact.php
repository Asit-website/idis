<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Forums-- A better creation</title>
    <style>
        /* .container { */
            /* min-height:100%; */
        /* } */
       
        #asit::selection{
          background-color: red;
        }
        body{
            background-color: #000000;
        }

        /* #mcontainer { */
            /* position: relative; */
            /* height: 500px; */
            /* min-height:170%; */
            /* margin-bottom: 20px; */
        /* } */

        /* #mcontainer::before { */
            /* content: ""; */
            /* position: absolute; */
            /* top: 0; */
            /* left: 0; */
            /* background: url('img/14.jpg') center center/cover no-repeat; */
            /* width: 100%; */
            /* height: 106%; */
            /* z-index: -1; */
            /* opacity: 0.9; */
        /* } */
     
        #asit{
            color: white;
        }

        #sun {
            display: block;
            width: 86px;
            margin: 0px auto;
        }
        label{
            color: white;
        }
        small{
            color: white;
            font-family:cursive ;
        }
        .family{
            color:white ;
        }
        #ms{
            height:80vh ;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/header.php'; ?>


      <?php
         $showalert=false;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username=$_POST['name'];
            $email=$_POST['email'];
            $desc=$_POST['desc'];
          $showalert=true;

            $sql="INSERT INTO `usert` ( `name`, `email`, `des`, `dt`) VALUES ( '$username', '$email', '$desc', current_timestamp())";
            $result=mysqli_query($conn,$sql);

            if($showalert){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>Your form has been filled successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
           
        }
      ?>

    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
    echo'<div class="container my-4 " >
        <h2 class="text-center" id="asit">Contact us for your concern</h2>
        <form action="/forum/contact.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
               
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted text-light">We\'ll never share your email with anyone
                else.</small>
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>

            </div>

            <button type="submit" class="btn btn-primary mt-3" id="sun">Submit</button>
        </form>

    </div>';
    }
   
    else{
        echo '<div class="container my-4" id="ms">
        
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
         
          <p class="lead mb-0 font-weight-bold text-center">You can not login please login to fill the form....</p>
        </div>
       </div>

        </div>';
    }
    ?>


    <?php include 'partials/footer.php'; ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>