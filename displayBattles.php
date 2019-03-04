<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Create a Superhero</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <?php
    include("db_connect.php");

    if (isset($_GET['id'])) {
        $superheroID = $_GET['id'];
        $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
    }
    else {
        $sql_query = "SELECT * FROM superherobattles";
    }

    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $mainSuperpower = $row['mainSuperPower'];
        $villianFought = $row['villianFought'];
        echo "<article>
       <p>The superhero known as <strong>{$firstname} {$lastname}</strong>recently fought<strong>{$villianFought} </strong> using <strong>{$mainSuperpower}</strong> </p>";
    }
?>
</main>
</body>
</html>