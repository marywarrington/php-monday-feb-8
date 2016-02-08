<?php
class Parcel
{
    private $weight;
    private $length;
    private $width;
    private $height;

    function __construct($get_weight, $get_length, $get_width, $get_height)
    {
        $this->weight = $get_weight;
        $this->length = $get_length;
        $this->width = $get_width;
        $this->height = $get_height;
    }

    function getWeight()
    {
      return $this->weight;
    }

    function getLength()
    {
      return $this->length;
    }

    function getWidth()
    {
      return $this->width;
    }

    function getHeight()
    {
      return $this->height;
    }

    function getVolume() {
      return $this->length * $this->width * $this->height;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipping Details Page</title>
</head>
  <body>
      <h1>Shipping Costs</h1>
      <?php
      $get_weight = $parcel->getWeight();
      $get_length = $parcel->getLength();
      $get_width = $parcel->getWidth();
      $get_height = $parcel->getHeight();
      $get_volume = $parcel->getVolume();

      echo "<p>Your parcel weight is: $get_weight </p>
      <p>Your parcel length is: $get_length </p>
      <p>Your parcel width is: $get_width </p>
      <p>Your parcel height is: $get_height </p>
      <p>Your parcel volume is: $get_volume </p>"

      ?>
  </body>
</html>
