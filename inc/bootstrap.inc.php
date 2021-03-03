<?php

spl_autoload_register("autoload");

function autoload($class) {
    include("../class/" . $class . ".class.php");
}