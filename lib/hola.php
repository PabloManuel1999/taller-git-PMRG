<?php
//Autor: Pablo Manuel Ramos Garrido <pablo@gmail.com>
//
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
