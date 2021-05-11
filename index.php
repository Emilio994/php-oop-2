<?php

require_once 'user.php';

$giacomo = new User(1, 'Giacomo', 'Locatelli', '13/02/1992', 'impiegato', 'giacomo@email.it');
$giacomo->setPermission();
$giacomo->getUserData();


$giovanna = new User(2, 'Giovanna', 'Rossi', '11/11/1987', 'impiegata', 'giovanna@email.it');
$giovanna->setPermission();
$giovanna->getUserData();

$marco = new User(3, 'Marco', 'Colombo', '13/08/1994', 'supervisore', 'marco@email.it');
$marco->setPermission();
$marco->getUserData();

$pietro = new User(4, 'Pietro', 'Zanardi', '01/01/1991', 'amministratore', 'pietro@email.it');
$pietro->setPermission();
$pietro->getUserData();

$rosa = new User(5, 'Rosa', 'Anghileri', '22/04/1976', 'segretaria', 'rosa@email.it');
$rosa->setPermission();
$rosa->getUserData();

?>