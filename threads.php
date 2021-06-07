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
     #ques{
       background-color:#ea8787;
     }
     
   </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/header.php';?>
    <?php
       $id=$_GET['catid'];
       $sql="SELECT * FROM `categories` WHERE category_id=$id";
       $result=mysqli_query($conn,$sql);
       
       while($row=mysqli_fetch_assoc($result)){
         $catname=$row['category_name'];
         $catdesc=$row['category_description'];
       }
    ?>
    <?php 
      $showalert=false;
      $method=$_SERVER['REQUEST_METHOD'];
    //   echo $method;
      if($method=='POST'){
          $showalert=true;
          $th_title=$_POST['title'];
          $th_desc=$_POST['desc'];

          $th_title=str_replace("<","&lt;",$th_title);
          $th_title=str_replace(">","&gt;",$th_title);

          $th_desc=str_replace("<","&lt;",$th_desc);
          $th_desc=str_replace(">","&gt;",$th_desc);

          $sno=$_POST['sno'];
          $sql="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
          $result=mysqli_query($conn,$sql);
          if($showalert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong> your thread has been added please wait the community while they response.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }

      }
    ?>



    <!-- cards start here  -->
    <div class="container my-4">
        <div class="jumbotron" id="ques">
            <h1 class="display-4">welcome to <?php echo $catname; ?> forum </h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>This is a foram for sharing knowledge and it is peer to peer.These forums define spam as unsolicited
                advertisement for goods, services and/or other web sites, or posts with little, or completely unrelated
                content. Do not spam the forums with links to your site or product, or try to self-promote your website,
                business or forums etc.
                Spamming also includes sending private messages to a large number of different users.</p>
          
        </div>
    </div>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo'<div class="container my-4">
        <h1 class="py-2">Start a descusion </h1>
        <form action=" '. $_SERVER["REQUEST_URI"] . '" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">problem title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">keep your title to short and eleborate concern
            .</small>
    </div>
    <input type="hidden" name="sno" value="'. $_SESSION['sno'] .'">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Elobarate your concern </label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>';
    }
    else{
      echo '<div class="container" >
      <div class="jumbotron jumbotron-fluid" id="ques">
      <div class="container">
      <h1 class="py-2">Start a descusion </h1>
        <p class="lead">You are not logged in. please login to start a discusion</p>
      </div>
    </div>
     </div>';
    }

    ?>
    

    <div class="container" id="hlw">
        <h1 class="py-2 text-center">Browse question</h1>
        <?php
       $id=$_GET['catid'];
       $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
       $result=mysqli_query($conn,$sql);
       $noresult=true;
       while($row=mysqli_fetch_assoc($result)){
         $noresult=false;
         $id=$row['thread_id'];
         $title=$row['thread_title'];
         $desc=$row['thread_desc'];
         $timestamp=$row['timestamp'];
         $thread_user_id=$row['thread_user_id'];
         $sql2="SELECT user_email FROM `usep` WHERE sno= '$thread_user_id'";
         $result2=mysqli_query($conn,$sql2);
         $row2=mysqli_fetch_assoc($result2);
        //  $row2['user_email'];


         echo'<div class="media my-2">
         <img src="img/user.jpg" class="mr-2" width="54px" alt="...">
         <div class="media-body">
         <p class="font-weight-bold my-0"> Asked by:'. $row2['user_email'] . ' at ' . $timestamp .'  </p>
             <h5 class="mt-0"><a class="text-dark" href="/idis/threadout.php?threadid='. $id .'">'. $title .'</a></h5>
             <p>'. $desc .'</p>
         </div>
     </div>'; 
       }

    //    echo var_dump($noresult);
       if($noresult){
           echo '<div class="jumbotron jumbotron-fluid" id="ques">
           <div class="container">
             <p class="display-4">no thraeds found.</p>
             <p class="lead"><b> be the first person to ask the question</b>.</p>
           </div>
         </div>';
       }
    ?>


        <!-- just to check html alignment -->
    </div>
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
