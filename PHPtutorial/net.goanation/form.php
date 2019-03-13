<?php
/**
 * Created by PhpStorm.
 * User: ufotje
 * Date: 10/03/2019
 * Time: 21:28
 */

if(isset($_POST["submit"])){
    echo "The name is " . $_POST["name"] . "<br>";
    echo print_r($_POST);
}
