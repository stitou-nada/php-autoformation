<?php

function getConnection(){
   
    $Connection = mysqli_connect('localhost', 'root', '', 'authentification');
      
return $Connection;

}
$selectRow = 'SELECT * FROM login';
         $query = mysqli_query(getConnection() ,$selectRow);
         $login_user = mysqli_fetch_all($query, MYSQLI_ASSOC);
        

if (!empty($_POST)) {
   
    foreach ($login_user as $value){ 
        
        if ($_POST["email"]==$value["email"] && $_POST["password"]==$value["password"]) {
           echo 'hello' ." ".$value["name"];
        }
        else{
            var_dump("erure");
        }
     
         }
    
}


?>