<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-search-auto2.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<!-- Title name -->
<div class="frozen-title">
  <h1>Search Auto</h1>
</div>

    <p>Op klantid gegevens zoeken uit de tabel autos van de database garage.</p>
    <table class="table">
            <tbody>
                <tr>
                    <th scope="col">Klant ID</th>
                    <th scope="col">Autokenteken</th>
                    <th scope="col">Automerk</th>
                    <th scope="col">Autotype</th>
                    <th scope="col">Autokmstand</th>
                 </tr>
            </tbody>
        </table>
    <?php
    //klantid uit het formulier halen
    $klanten_klantid = $_POST["klantidvak"];
    //klantgegevens uit de tabel halen
    require_once "gar-connect.php";

    $autos = $database->prepare ("SELECT klanten_klantid, autokenteken, automerk, autotype, autokmstand FROM autos WHERE klanten_klantid = :klanten_klantid");
    $autos->execute([":klanten_klantid" => $klanten_klantid]);
    //klantgegevens laten zien
    echo "<table>";
    foreach($autos as $auto) {
        echo "<td>" . $auto["klanten_klantid"] . ", " . "</td>" . "<br>";
        echo "<td>" . $auto["autokenteken"] . ", " . "</td>";
        echo "<td>" . $auto["automerk"] . ", " . "</td>";
        echo "<td>" . $auto["autotype"] . ", " . "</td>";
        echo "<td>" . $auto["autokmstand"] . ", " . "</td>";
        echo "<br>";
}
    echo "<table>";
      echo "<div class='goBack-Btn'><br/>";
        echo "<h3>De klant is opgezocht!</h3>";
        echo "<a href='gar-menu.php'> terug naar het menu </a>";
      echo "</div>";
    ?>
</body>
</html>