<?php
require './vendors/autoload.php';

echo $cryptedString = SecurityTroller::doTheTroll("hello");

echo $decryptedString  = SecurityTroller::doTheDeTroll($cryptedString);