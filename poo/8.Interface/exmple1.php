<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
interface Animal{
    public function makeSound();
}
class Dog implements Animal{
    public function makeSound(){
     echo " how ";
    }
}
class Cat implements Animal{
    public function makeSound(){
     echo " miaw ";
    }
}
class Mouse implements Animal{
    public function makeSound(){
     echo " squick ";
    }
}
$dog =new Dog();
$cat =new Cat();
$mouse =new Mouse();
$animals = array($dog , $cat ,$mouse);

foreach($animals as $animal){
     $animal->makeSound();
}
    ?>
</body>
</html>