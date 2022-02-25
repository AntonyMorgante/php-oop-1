<?php
require_once __DIR__."./classes/Movie.php";

$catalog = [
    new Movie("John Wick","azione"),
    new Movie("John Wick II","azione")
];

$catalog[0]->setYear(2014);
$catalog[1]->setYear(2017);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($catalog as $movie){
                echo "<li>{$movie->getInfo()}</li>";
            }
        ?>
    </ul>
</body>
</html>