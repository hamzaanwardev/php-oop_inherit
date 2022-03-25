<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Inherit</title>
</head>
<body>
    <h1>PHP Inheritance</h1>
<?php
class cars {
    private $price, $color, $model;

    public function __construct($p , $c , $m) {
        $this->price = $p;
        $this->color = $c;
        $this->model = $m;

    }
    function details() {
        echo "this car is of ". $this->price. " Price". "<br>";
        echo "this car have ". $this->color. " Color". "<br>";
        echo "The model of this car/truck is ". $this->model. " Modal"."<br>";
    }
}
class trucks extends cars {
}

$car = new cars  (500000 , "white" , 2006);
$truck = new trucks (1100000 , "Red" , 2000);
$car->details();
$truck->details();
?>
</body>
</html>