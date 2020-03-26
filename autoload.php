<?php
header('Content-type: text/plain; charset=utf-8');
spl_autoload_register(function ($class_name) {
    include './Dependecies/'.$class_name . '.php';
});
try {
    $binaryObject = new BinaryTroller();
    $base64Object = new Base64Troller();
    echo $base64Object->getCryptedData($binaryObject->stringToBinaryConvertionMethod('Salim')) ;
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}