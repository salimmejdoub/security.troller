<?php
spl_autoload_register(function ($class_name) {
    require './Trollers/'.$class_name . '.php';
});

class SecurityTroller{
    
    public static function doTheTroll( $_string ):string {
        return Base64Troller::doTheCrypt( BinaryTroller::toBinary( $_string ) );
    }

    public static function doTheDeTroll( $_string ):string {
        return BinaryTroller::toString( Base64Troller::doTheDeCrypt( $_string ) );
    }
} 
