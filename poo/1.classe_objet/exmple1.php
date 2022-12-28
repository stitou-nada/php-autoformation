<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php 
    
    class Fruit{
        public $name;
        public $color;


        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
          return  $this->name;
        }

        function set_color($color){
            $this->color=$color;
        }
        function get_color(){
           return $this->color;
        }
    }

    $fruit =new Fruit();
    
    $fruit->set_name('pomme'); 
    $fruit->set_color('red'); 
     echo "name : " .$fruit->get_name();
     echo "<br>";
     echo "color : " .$fruit->get_color();
    
      ?>
       
    
    
</body>
</html>