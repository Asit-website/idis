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
    /* #ques{ */
    /* min-height: 80vh; */
    /* position:relative; */
    /* left: 20px; */


    /* #ques{ */
    /* height:100vh; */

    /* } */
    body {
      left: 0;
      top: 0;
      background-color: rgb(201, 162, 162);
    }

    .colour {
      color: rgb(24, 2, 2);
    }

    /* img-is an inline element so make it inline block or block after you can do margin auto property to it  */
    .img {
      /* display: flex; */
      /* justify-content:center ; */
      display: block;
      margin: 0 auto;
      padding: 13px 4px;
      /* position: relative; */
      /* left: 72px; */
      /* align-items: center; */
    }

    #so {
      position: relative;
      left: 80px;
    }

    .text {
      margin-left: 60px;
    }

    #hi {
      /* margin-bottom: 20px; */
      background-color: rgb(141, 137, 137);

    }

    #bro {
      padding-bottom: 44px;
    }

    .section {
      background-color: rgb(141, 137, 137);
      /* height: 50vh; */
    }
    /* #bloc::selection{ */
      /* color: yellow; */
    /* } */
    /* #pad{ */
      /* padding-bottom: 10px; */
    /* } */
  </style>
</head>

<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/header.php'; ?>
 
    <div class="container" id="bro">
      <img class="img rounded-circle" width="140" height="140" src="img/pp.jpg" alt="">
      <h1 class="text-center" style="color:#ffffff;">About forum</h1>
      <blockquote class="blockquote text-center">
        <p class="mb-0">In a standard Internet forum, a user creates a post. That post can be accessed by other users at
          any time. Posts can contain questions, opinions, images, videos, links, and more. Users can respond to the
          post, which creates a dialogue other users can participate in, also called a thread. They can start a new
          thread of conversation by creating a post on a different topic. All of these threads combine to make what's
          called a message board.
          Internet forums can be anonymous, or they can require registration. Typically, a comment made by aregistered
          member holds more influence than an anonymous user. While registration with most Internetforums is free, they
          do require a valid email address. Registering in a forum lets you create a usernameand password, and you can
          add a small picture (called an avatar) to be displayed next to your commentsand posts. You also have to agree
          to follow certain rules laid out by the forum's administrators, andeach forum can be different.
        </p>
      </blockquote>

      <blockquote class="blockquote" id="bloc" style="color: #360303; font-family: cursive;">
        <p class="mb-0"> Netiquette is a portmanteau meaning "Internet etiquette." It's a list of polite discussion
          behaviors that participants in an online forum expect from one another. Netiquette is enforced by the forum's
          administrator or moderators, who have the power to approve/remove members and to modify/delete posts. Basic
          netiquette includes these 10 rules:

        </p>
      </blockquote>
      <blockquote class="font-weight-bold">
        <ol type="1" class="colour">
          <li>Read the forum's rules before posting for the first time.</li>
          <li>When commenting, stay on topic or start a new thread.</li>
          <li>Do not use an Internet forum simply to promote your own business or products.</li>
          <li>Be respectful of others.</li>
          <li>Use correct spelling and grammar; avoid slang and profanity. (However, some forums encourage their own
            jargon, terms and abbreviations.)</li>
          <li>Report abuse to an administrator or moderator, and don't respond to abusive comments (a futile effort
            commonly known as "feeding the trolls.")</li>
          <li>Do not post personal information that could be used to impersonate or endanger you or your loved ones.
          </li>
          <li>Do not use ALL CAPS in a post, as it is interpreted as shouting.</li>
        </ol>

      </blockquote>


    </div>
  
 
 
    <div class="container mb-0 py-2">
      <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">it was a graet forum useful for a user. <span class="text-muted">It’ll blow
              your mind.</span>
          </h2>
          <p class="lead">If you visited thius forum you will definetly use it to increase your mind. Imagine some
            exciting prose here.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid"
            src="img/15.jpg" alt="">

        </div>
      </div>

      <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7">
          <h2 class="featurette-heading">We starting our forum ideas. <span class="text-muted">it was to good to
              use</span>
          </h2>
          <p class="lead"> You gain a diffrent knowledge in this forum </p>
        </div>
        <div class="col-md-5">

          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid"
            src="img/13.jpg" alt="">

        </div>

        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Forum ideas are best featuring ideas. <span class="text-muted">It’ll wil take
                your mind.</span>
            </h2>
            <p class="lead">You can also use it to make website design</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid"
              src="img/12.jpg" alt="">

          </div>
        </div>
      </div>

    </div>
 

  <?php include 'partials/footer.php';    ?>



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