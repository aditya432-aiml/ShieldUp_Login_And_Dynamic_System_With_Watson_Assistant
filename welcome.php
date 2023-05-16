<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="new.css">
    <title>ShieldUp</title>
    <script>
      window.watsonAssistantChatOptions = {
        integrationID: "13ec5173-c615-4e82-b66a-bfc9ff983d3a", // The ID of this integration.
        region: "au-syd", // The region your integration is hosted in.
        serviceInstanceID: "b8a45703-f382-4c21-883f-f1312d2eddf5", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
      setTimeout(function(){
        const t=document.createElement('script');
        t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
        document.head.appendChild(t);
      });
    </script>

  </head>
  <body class="bg-nav">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ShieldUp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

    <div class="container mt-4">
        <h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
        <hr>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h1 class="display-4 mt-50" style="font-size:50px">COVID-19<br>
            SAVE LIVES.<br>
            STAY INDOORS.<br>
            Do your part to stay safe and stay inside.
          </h1>
        </div>
        <div class="col-md-5 mt-50">
          <div class="card" style="border-radius: 25px">
              <div class="card-body">
                <img src="COVID-19 Stay Home [landscape].png" width="100%">
              </div>
          </div>
        </div>
        <div class="col-md-5">
          <h1 class="display-4 mt-50" style="font-size:50px">
            Hygiene Is The Best Practice,<br>
            To Reduce The Spread Of COVID-19
          </h1>
        </div>
        <div class="col-md-5 mt-50">
          <div class="card" style="border-radius: 25px">
              <div class="card-body">
                <img src="COVID-19 Hygienic Best Practices [landscape].png" width="100%">
              </div>
          </div>
        </div>
        <div class="col-md-5">
          <h1 class="display-4 mt-50" style="font-size:50px">
            Thanks To Our Devoted Workers
          </h1>
        </div>
        <div class="col-md-5 mt-50">
          <div class="card" style="border-radius: 25px">
              <div class="card-body">
                <img src="COVID-19 Community [landscape].png" width="100%">
              </div>
          </div>
        </div>


      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
