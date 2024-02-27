<?php

// get the value of the cookie with name = "name"



echo "Value of the cookie name is: ";


if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
else{
    echo "Cookie does not exists";
}


?>