<?php
  session_start();

  if ($_SESSION['myrank'] == "admin" || $_SESSION['myrank'] == "planners") {
    echo "";
  } else {
  header("Location: gar-menu(rank).php");
  }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ertans Garage | Create Klant</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="gar-menu.php">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Log uit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="login.php">Log in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="title-two">
    <h1>Garage create klant </h1>
</div>
  
<div class="container">
  <div class="wrapper">
    <h2>Nieuwe Klant Toevoegen</h2>
    <form action="gar-create-klant2.php" method="post">
      <div class="input-box">
        <input type="text" name="klantnaamvak" placeholder="Naam Klant" required>
      </div>
      <div class="input-box">
        <input type="text" name="klantadresvak" placeholder="Klant Adres" required>
      </div>
      <div class="input-box">
        <input type="text" name="klantpostcodevak" placeholder="Klant Postcode" required>
      </div>
      <div class="input-box">
        <input type="text" name="klantplaatsvak" placeholder="Klant Plaats" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Versturen">
      </div>
    </form>
  </div>
</div>

<!-- <div class="container">
  <div class="inputForm">
    <form action="gar-create-klant2.php" method="post">
        klantnaam: <input type="text" name="klantnaamvak"><br>
        klantadres: <input type="text" name="klantadresvak"><br>
        klantpostcode: <input type="text" name="klantpostcodevak"><br>
        klantplaats: <input type="text" name="klantplaatsvak"><br>
        <input class="btn-two" type="submit">
    </form>
  </div>
</div> -->
</body>
</html>