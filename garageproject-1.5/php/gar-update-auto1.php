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
    <title>gar-update-auto1.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ertans Garage | update Auto</title>
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

<h1 class="center">garage update auto </h1>
<p class="center">Dit formulier wordt gebruikt om autogegevens te wijzigen</p>
<div class="container">
  <div class="wrapper">
    <h2>Update auto</h2>
    <form action="gar-update-auto2.php" method="post">
      <div class="input-box">
        <input type="text" name="klantidvak" placeholder="Klant ID hier" required>
      </div>
      <div class="input-box button">
        <input type="Submit">
      </div>
    </form>
  </div>
</div>

<div class="margin-center">
  <table class="table">
      <tbody>
          <tr>
              <th scope="col">Klant ID</th>
              <th scope="col">autokenteken</th>
              <th scope="col">automerk</th>
              <th scope="col">autotype</th>
              <th scope="col">autokmstand</th>
          </tr>
      </tbody>
  </table>
</div>
<?php
    // tabel uitleezn en netjes afdrukken
    require_once 'gar-connect.php'; 

    $autos = $database->prepare ("select klanten_klantid, autokenteken, automerk, autotype, autokmstand FROM autos");
    $autos->execute(); 

    foreach($autos as $auto) {
            echo "<td>" . $auto["klanten_klantid"] . ", " . "</td>";
            echo "<td>" . $auto["autokenteken"] . ", " . "</td>";
            echo "<td>" . $auto["automerk"] . ", " . "</td>";
            echo "<td>" . $auto["autotype"] . ", " . "</td>";
            echo "<td>" . $auto["autokmstand"] . ", " . "</td>" . "<br>";
            echo "<br>";
    }
?>
    
</body>
</html>