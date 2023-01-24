<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">

  <title>SlimWeer&trade;</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="Background">
    <header>
      <div class="container">
        <div class="logo">
          <p><img src="img/icon_cloud.png"> SlimWeer&trade;</p>
        </div>
        <div class="navbar">
          <nav>
            <a href="">Dit weekend</a>
            <a href="">Volgende week</a>
            <a href="">14 Dagen</a>
            <a href="">Contact</a>
          </nav>
        </div>
      </div>

    </header>
    <main>


      <div class="Box">
        <div class="About">
          <p class="Title"> Over SlimWeer&trade;</p>
          <p class="Text">SlimWeer is het weerbureau van Smart City. Onze voorspelling is iedere dag weer superslim, dankzij de supercomputers en onze weermannen en -vrouwen die nog ouderwets naar buiten kijken! Check hieronder meteen de voorspelling voor vandaag</p>
          <div class="imgboxcloud">
            <img src="img/icon_cloud.png">
          </div>
          <div class="Predictionflex">
            <img src="img/arrow.png">
            <p class="Prediction">“<?php
                                    $Predictionfile = fopen("prediction.txt", "r") or die("Unable to open file!");
                                    echo fread($Predictionfile, filesize("prediction.txt"));
                                    fclose($Predictionfile);
                                    ?>”</p>
          </div>
          <div class="form-menu">
            <p class="Title"> Contact met SlimWeer&trade;</p>
            <div class="form-menu">
              <form action="backend/questionController.php" method="post">
                <input type="hidden" name="action" value="send">
                <div class="Form-Labels">
                  <div class="form-group">
                    <label for="senderName">Naam:</label> 
                      <input type="text" name="name" id="name">

                  </div>
                  <div class="form-group">
                    <label for="senderEmail">Telefoonr:</label>
        
                      <input type="text" name="number" id="number">

                  </div>
                  <div class="form-group">
                    <label for="senderWeervraag">Weervraag:</label>
                  </div>
                    <div class="Inputweer"><br>
                      <input type="text" name="Weervraag" id="Weervraag">
                    </div>
                  
                </div>
                <div class="form-group">
                  <input type="submit" value="Verzenden" class="Send-Form">
                </div>
            </div>
          </div>
        </div>
    </main>
  </div>
</body>

</html>