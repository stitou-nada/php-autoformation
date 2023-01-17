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
 abstract class ParentClass{
    abstract public function prefixName($Name);
 }

 class ChildClass extends ParentClass{

    public function prefixName($Name)
    {
        if ($Name=="nada") {
            $prefix="Mrs.";
        }
        elseif ($Name=="hicham") {
            $prefix="Mr.";
        }
        else{
            $prefix= "";
        }
          echo "{$prefix} {$Name}";
    }

}
$class=new ChildClass;
echo $class->prefixName("nada");
echo "</br>";
echo $class->prefixName("hicham")

    ?>
</body>
</html>