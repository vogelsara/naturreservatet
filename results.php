<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

There are/is <?php echo $_GET["numberOfMonkeys"]; ?> monkey(s)<br>
There are/is <?php echo $_GET["numberOfGiraffes"]; ?> giraffe(s)<br>
There are/is <?php echo $_GET["numberOfTigers"]; ?> tiger(s)<br>
There are/is <?php echo $_GET["numberOfCocos"]; ?> coco(s)<br>

<?php

abstract class Animal {
    abstract function makeSound();
}

class Monkey extends Animal {
    function makeSound() {
        echo "<script type='text/javascript'>alert('mak-mak');</script>";
    }
}

class Tiger extends Animal {
    function makeSound() {
        echo "<script type='text/javascript'>alert('wáááááá');</script>";
    }
}

class Giraffe extends Animal {
    function makeSound() {
        echo "<script type='text/javascript'>alert('i am a giraffe');</script>";
    }
}

class Coco {

}

?>

<?php

for ($i = 0; $i < $_GET["numberOfMonkeys"]; $i++) {
    echo "<img src='img/monkey.png'/>\n";
}

?>

</body>
</html>

