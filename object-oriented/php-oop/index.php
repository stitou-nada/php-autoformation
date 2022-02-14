<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$fruit1 = new Fruit();
$fruit2 = new Fruit();
$fruit1->set_name('Apple');
$fruit2->set_name('Banana');

echo $fruit1->get_name();
echo "<br>";
echo $fruit2->get_name();
?>
 
</body>
</html>
