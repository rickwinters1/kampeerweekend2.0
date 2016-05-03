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


      <div class="col-md-offset-1">
        <h2>Hier kunt u zich inschrijven als vrijwilliger voor het kampeer weekend.</h2>
      </div>
      <br>
      <div class="row">
        <form method="post" action="inschrijven_vrijwilliger.php">
        <?php
        $errName = "";
        $errAdres = "";
        $errTelefoon = "";
        $errEmail = "";
        $errvoorkeur = "";

        if (isset($_POST["verzend"])) {
          $name = $_POST['name'];
          $adres = $_POST['adres'];
          $telefoon = $_POST['telefoon'];
          $email = $_POST['email'];
          $voorkeur = $_POST['voorkeur'];
          $bijzonderheden = $_POST['bijzonderheden'];

          if (empty($name)) {
            $errName = 'Vul uw volledige naam in!';
          }
          if (empty($adres)) {
            $errAdres = 'Vul uw adres in!';
          }

          if (empty($telefoon)) {
            $errTelefoon = 'Vul uw telefoon in!';
          }

          // Check if email has been entered and is valid
          if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Vul een echt email-adres in!';
          }
          
          if (empty($voorkeur)) {
            $errvoorkeur = 'Kies een voorkeur!';
          }
          ?>

          <div class="col-md-4 col-md-offset-1">
            <div class="input-group">
              <label for="name" class="control-label" id="basic-addon1">Naam</label>
              <input name="name" id="name" type="text" class="form-control" placeholder="Naam Achternaam" aria-describedby="basic-addon1" value="<?php print($name); ?>">
              <p class="text-danger"><?php print($errName); ?></p>
            </div>
            <div class="input-group">
              <label for="adres" class="control-label" id="basic-addon1">Adres</label>
              <input name="adres" id="adres" type="text" class="form-control" placeholder="Straat straatnummer" aria-describedby="basic-addon1" value="<?php print($adres); ?>">
              <p class="text-danger"><?php print($errAdres); ?></p>
            </div>
            <div class="input-group">
              <label for="telefoon" class="control-label input" id="basic-addon2">Telefoonnummer</label>
              <input name="telefoon" id="telefoon" type="phone" class="form-control input" placeholder="06-123456789" aria-describedby="basic-addon1" value="<?php print($telefoon); ?>">
              <p class="text-danger"><?php print($errTelefoon); ?></p>
            </div>
            <div class="input-group">
              <label for="email" class="control-label" id="basic-addon1">Email-Adres</label>
              <input name="email" id="email" type="email" class="form-control" placeholder="iemand@email.com" aria-describedby="basic-addon1" value="<?php print($email); ?>">
              <p class="text-danger"><?php print($errEmail); ?></p>
            </div>

          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel1">voorkeur:</label>
              <select name="voorkeur" class="form-control" id="sel1">
                <option <?php if ($_POST['voorkeur'] == 'Bouwer') { ?>selected="true" <?php }; ?> value="Bouwer" name="voorkeur">Bouwer</option>
                <option <?php if ($_POST['voorkeur'] == 'ChaufK') { ?>selected="true" <?php }; ?> value="ChaufK" name="voorkeur">Chauffeur (kinder/bagage)</option>
                <option <?php if ($_POST['voorkeur'] == 'ChaufG') { ?>selected="true" <?php }; ?> value="ChaufG" name="voorkeur">Chauffeur (goederen)</option>
                <option <?php if ($_POST['voorkeur'] == 'Begeleider') { ?>selected="true" <?php }; ?> value="Begeleider" name="voorkeur">Groepsbegeleider</option>
                <option <?php if ($_POST['voorkeur'] == 'Nacht') { ?>selected="true" <?php }; ?> value="Nacht" name="voorkeur">Nachtwaker</option>
                <option <?php if ($_POST['voorkeur'] == 'Foto') { ?>selected="true" <?php }; ?> value="Foto" name="voorkeur">Fotograaf</option>
                <option <?php if ($_POST['voorkeur'] == 'keuken') { ?>selected="true" <?php }; ?> value="keuken" name="voorkeur">Keuekenhulp</option>
                <option <?php if ($_POST['voorkeur'] == 'EHBO') { ?>selected="true" <?php }; ?> value="EHBO" name="voorkeur">EHBO-er</option>
              </select>
              <p class="text-danger"><?php print($errvoorkeur); ?></p>
            </div>
            <div class="form-group">
              <label for="bijzonderheden">Eventuele bijzonderheden:</label>
              <textarea name="bijzonderheden" id="bijzonderheden" class="form-control" rows="3"><?php print($bijzonderheden); ?></textarea>
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
    } else{ ?>

    <div class="col-md-4 col-md-offset-1">
            <div class="input-group">
              <label for="name" class="control-label" id="basic-addon1">Naam</label>
              <input name="name" id="name" type="text" class="form-control" placeholder="Naam Achternaam" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
              <label for="adres" class="control-label" id="basic-addon1">Adres</label>
              <input name="adres" id="adres" type="text" class="form-control" placeholder="Straat straatnummer" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
              <label for="telefoon" class="control-label input" id="basic-addon2">Telefoonnummer</label>
              <input name="telefoon" id="telefoon" type="phone" class="form-control input" placeholder="06-123456789" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
              <label for="email" class="control-label" id="basic-addon1">Email-Adres</label>
              <input name="email" id="email" type="email" class="form-control" placeholder="iemand@email.com" aria-describedby="basic-addon1">
            </div>

          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel1">voorkeur:</label>
              <select name="voorkeur" class="form-control" id="sel1">
                <option value="Bouwer" name="voorkeur">Bouwer</option>
                <option value="ChaufK" name="voorkeur">Chauffeur (kinder/bagage)</option>
                <option value="ChaufG" name="voorkeur">Chauffeur (goederen)</option>
                <option value="Begeleider" name="voorkeur">Groepsbegeleider</option>
                <option value="Nacht" name="voorkeur">Nachtwaker</option>
                <option value="Foto" name="voorkeur">Fotograaf</option>
                <option value="keuken" name="voorkeur">Keuekenhulp</option>
                <option value="EHBO" name="voorkeur">EHBO-er</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bijzonderheden">Eventuele bijzonderheden:</label>
              <textarea name="bijzonderheden" id="bijzonderheden" class="form-control" rows="3" ></textarea>
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
    }
    ?>
  </form>
  </body>
</html>