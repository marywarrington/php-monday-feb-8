<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $color;
    private $condition;

    function __construct($get_make_model, $car_price, $get_miles, $get_color, $get_condition = "Used")
    {
        $this->make_model = $get_make_model;
        $this->price = $car_price;
        $this->miles = $get_miles;
        $this->color = $get_color;
        $this->condition = $get_condition;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getMakeModel()
    {
        return $this->make_model;
    }

    function getMiles()
    {
        return $this->miles;
    }

    function getColor()
    {
        return $this->color;
    }

    function getCondition()
    {
        return $this->condition;
    }
}

$porsche = new Car("2014 Porsche 911", 114991, 7864, "Blue", "New");
$ford = new Car("2011 Ford F450", 55995, 14241, "Maroon");
$lexus = new Car("2013 Lexus RX 350", 44700, 20000, "Silver");
$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "Green");

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
              $car_price = $car->getPrice();
              $get_make_model = $car->getMakeModel();
              $get_miles = $car->getMiles();
              $get_color = $car->getColor();
              $get_condition = $car->getCondition();

                echo "<li> $get_make_model </li>";
                echo "<ul>";
                    echo "<li> $$car_price </li>";
                    echo "<li> Miles: $get_miles </li>";
                    echo "<li> Condition: $get_condition </li>";
                    echo "<li> Color: $get_color </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
