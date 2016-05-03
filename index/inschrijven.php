<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Kampeer Weekend 2016</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <link href="mainStyle.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
    <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">FDKW</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inschrijven <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="inschrijven.php">Inschrijven deelnemers</a></li>
                    <li><a href="inschrijven_vrijwilliger.php">Inschrijven vrijwilligers</a></li>
                  </ul>
                </li>
                <li><a href="album/album.html">Foto's</a></li>
                <li><a href="#informatie">Info</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <!-- FORM
    ================================================== -->
    <div id="Form" class="container">

      

      <div class="col-md-offset-2">
        <h2>Hier kunt u zich inschrijven voor het kampeer weekend.</h2>
        <div class="col-md-offset-2">
          <p> Wilt u zich als vrijwilliger inschrijven, klik dan <a href="inschrijven_vrijwilliger.php">hier</a>.</p>
        </div>
      </div>  
      <br>
      <div class="row">
        <form method="post" action="inschrijven.php">
        <?php
        $errName = "";
        $errAdres = "";
        $errgeboortedatum = "";
        $errTelefoon = "";
        $errEmail = "";
        $errCategorie = "";
        $errZwemdiploma = "";
        $verzendKnop = "";
        $bijzonderheden = "";


        if (isset($_POST["verzend"])) {
          $name = $_POST['name'];
          $adres = $_POST['adres'];
          $geboortedatum = $_POST['geboortedatum'];
          $telefoon = $_POST['telefoon'];
          $email = $_POST['email'];
          $categorie = $_POST['categorie'];
          $zwemdiploma = $_POST['zwemdiploma'];
          $bijzonderheden = $_POST['bijzonderheden'];

          if (empty($name)) {
            $errName = 'Vul uw volledige naam in!';
          }
          if (empty($adres)) {
            $errAdres = 'Vul uw adres in!';
          }

          if (empty($geboortedatum)) {
            $errgeboortedatum = 'Vul uw geboortedatum in!';
          }

          if (empty($telefoon)) {
            $errTelefoon = 'Vul uw telefoon in!';
          }

          // Check if email has been entered and is valid
          if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Vul een echt email-adres in!';
          }
          
          if (empty($categorie)) {
            $errCategorie = 'Kies een categorie!';
          }

          if (empty($zwemdiploma)) {
            $errZwemdiploma = 'Kies Ja of Nee';
          }
          ?>

          <div class="col-md-4 col-md-offset-1">
            <div class="form-group">
              <label for="name" class="control-label" id="basic-addon1">Naam*</label>
              <input id ="name" name="name" type="text" class="form-control" placeholder="Naam Achternaam" value="<?php print($name); ?>" aria-describedby="basic-addon1">
              <p class="text-danger"><?php print($errName); ?></p>
            </div>
            <div class="form-group">
              <label for="adres" class="control-label" id="basic-addon1">Adres*</label>
              <input id="adres" name="adres" type="text" class="form-control" placeholder="Straat straatnummer" value="<?php print($adres); ?>" aria-describedby="basic-addon1">
              <p class="text-danger"><?php print($errAdres); ?></p>
            </div>
            <div class="form-group">
              <label for="geboortedatum" class="control-label" id="basic-addon1">geboortedatum*</label>
              <input id="geboortedatum" name="geboortedatum" type="text" class="form-control" placeholder="DD-MM-JJJJ" value="<?php print($geboortedatum); ?>" aria-describedby="basic-addon1">
              <p class="text-danger"><?php print($errgeboortedatum); ?></p>
            </div>
            <div class="form-group">
              <label for="telefoon" class="control-label input" id="basic-addon2">Telefoon ouders*</label>
              <input id="telefoon" name="telefoon" type="phone" class="form-control input" placeholder="06-123456789" value="<?php print($telefoon); ?>" aria-describedby="basic-addon1">
              <p class="text-danger"><?php print($errTelefoon); ?></p>
            </div>
            <div class="form-group">
              <label for="email" class="control-label" id="basic-addon1">Email-Adres*</label>
              <input id ="email" name="email" type="email" class="form-control" placeholder="iemand@email.com" value="<?php print($email); ?>" aria-describedby="basic-addon1">
              <p class="text-danger"><?php print($errEmail); ?></p>
            </div>
  
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel1">Categorie*:</label>
              <select value="<?php print($categorie); ?>" name="categorie" class="form-control" id="sel1">
                <option <?php if ($_POST['categorie'] == 'C') { ?>selected="true" <?php }; ?> value="C" name="categorie">Pupillen C</option>
                <option <?php if ($_POST['categorie'] == 'B') { ?>selected="true" <?php }; ?> value="B" name="categorie">Pupillen B</option>
                <option <?php if ($_POST['categorie'] == 'A1') { ?>selected="true" <?php }; ?> value="A1" name="categorie">Pupillen A1</option>
                <option <?php if ($_POST['categorie'] == 'A2') { ?>selected="true" <?php }; ?> value="A2" name="categorie">Pupillen A2</option>
                <option <?php if ($_POST['categorie'] == 'D1') { ?>selected="true" <?php }; ?> value="D1" name="categorie">Junioren D1</option>
                <option <?php if ($_POST['categorie'] == 'D2') { ?>selected="true" <?php }; ?> value="D2" name="categorie">Junioren D2</option>
                <option <?php if ($_POST['categorie'] == 'JC') { ?>selected="true" <?php }; ?> value="JC" name="categorie">Junioren C</option>
                <option <?php if ($_POST['categorie'] == 'JB') { ?>selected="true" <?php }; ?> value="JB" name="categorie">Junioren B</option>
                <option <?php if ($_POST['categorie'] == 'JA') { ?>selected="true" <?php }; ?> value="JA" name="categorie">Junioren A</option>
              </select>
              <p class="text-danger"><?php print($errCategorie); ?></p>
            </div>
            
            <p style="font-weight: bold">In het bezit van een zwemdiploma*:</p>
            <div class="radio">
              <?php
              if(isset($zwemdiploma) && $_POST["zwemdiploma"] == "ja"){
              ?>
              <label class="radio-inline"><input checked type="radio" name="zwemdiploma" value= "ja">Ja</label>
              <label class="radio-inline"><input type="radio" name="zwemdiploma" value="nee">Nee</label>
              <?php } else if(isset($zwemdiploma) && $_POST["zwemdiploma"] == "nee"){ ?>
              <label class="radio-inline"><input type="radio" name="zwemdiploma" value= "ja">Ja</label>
              <label class="radio-inline"><input checked type="radio" name="zwemdiploma" value="nee">Nee</label>
              <?php }else{ ?>
              <label class="radio-inline"><input type="radio" name="zwemdiploma" value= "ja">Ja</label>
              <label class="radio-inline"><input type="radio" name="zwemdiploma" value="nee">Nee</label>
              <?php } ?>
              <p class="text-danger"><?php print($errZwemdiploma); ?></p>
            </div>
            <div class="form-group">
              <label for="bijzonderheden">Eventuele bijzonderheden (medicijngebruik, voedingsvoorschriften etc.) :</label>
              <textarea name="bijzonderheden" class="form-control" rows="6" id="bijzonderheden"><?php print($bijzonderheden); ?></textarea>
            </div>
          </div>
        
    </div>
    <div class="row">
      <div class ="form-group">
        <div class="col-md-3 col-md-offset-8">
          <input name="verzend" id ="inschrijven" type="submit" class="btn btn-primary btn-block" value="inschrijven">
        </div>
      </div>
    </div>
    <?php
    } else{?>

          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
            </div>
          </div>
          <div class="col-md-4 col-md-offset-1">
            <div class="form-group">
              <label for="name" class="control-label" id="basic-addon1">Naam*</label>
              <input id ="name" name="name" type="text" class="form-control" placeholder="Naam Achternaam" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
              <label for="adres" class="control-label" id="basic-addon1">Adres*</label>
              <input id="adres" name="adres" type="text" class="form-control" placeholder="Straat straatnummer" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
              <label for="geboortedatum" class="control-label" id="basic-addon1">geboortedatum*</label>
              <input id="geboortedatum" name="geboortedatum" type="text" class="form-control" placeholder="DD-MM-JJJJ" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
              <label for="telefoon" class="control-label input" id="basic-addon2">Telefoon ouders*</label>
              <input id="telefoon" name="telefoon" type="phone" class="form-control input" placeholder="06-123456789" aria-describedby="basic-addon1">
            </div>
            <div class="form-group">
              <label for="email" class="control-label" id="basic-addon1">Email-Adres*</label>
              <input id ="email" name="email" type="email" class="form-control" placeholder="iemand@email.com" aria-describedby="basic-addon1">
            </div>
  
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel1">Categorie*:</label>
              <select name="categorie" required class="form-control" id="sel1">
                <option value="C" name="categorie">Pupillen C</option>
                <option value="B" name="categorie">Pupillen B</option>
                <option value="A1" name="categorie">Pupillen A1</option>
                <option value="A2" name="categorie">Pupillen A2</option>
                <option value="D1" name="categorie">Junioren D1</option>
                <option value="D2" name="categorie">Junioren D2</option>
                <option value="JC" name="categorie">Junioren C</option>
                <option value="JB" name="categorie">Junioren B</option>
                <option value="JA" name="categorie">Junioren A</option>
              </select>
            </div>
            
            <p for="zwemdiploma" style="font-weight: bold">In het bezit van een zwemdiploma*:</p>
            <div class="radio">
              <label class="radio-inline"><input checked type="radio" name="zwemdiploma" value= "ja">Ja</label>
              <label class="radio-inline"><input type="radio" name="zwemdiploma" value="nee">Nee</label>
            </div>
            <div class="form-group">
              <label for="bijzonderheden">Eventuele bijzonderheden (medicijngebruik, voedingsvoorschriften etc.) :</label>
              <textarea name="bijzonderheden" class="form-control" rows="6" id="bijzonderheden"></textarea>
            </div>
          </div>

    </div>
    <div class="row">
      <div class ="form-group">
        <div class="col-md-3 col-md-offset-8">
          <input name="verzend" type="submit" class="btn btn-primary btn-block" value="Inschrijven">
        </div>
      </div>
    </div>

    <?php
    }
    ?>
  </form>
    
  </body>
</html>