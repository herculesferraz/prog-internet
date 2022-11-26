<?php
spl_autoload_register(function ($class){
    include str_replace("\\", "/classe", $class) . '.php';
});