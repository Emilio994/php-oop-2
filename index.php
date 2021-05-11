<?php

require_once 'extension.php';

$giacomo = new HireDate(1, 'Giacomo', 'Locatelli', '13/02/1992', 'impiegato', 'giacomo@email.it', '01-10-2015');
$giacomo->setPermission();
$giacomo->getUserData();


$giovanna = new HireDate(2, 'Giovanna', 'Rossi', '11/11/1987', 'supervisore', 'giovanna@email.it', '12-03-2011');
$giovanna->setPermission();
$giovanna->getUserData();

$marco = new HireDate(3, 'Marco', 'Colombo', '13/08/1994', 'impiegato', 'marco@email.it', '07-06-2017');
$marco->setPermission();
$marco->getUserData();

$pietro = new HireDate(4, 'Pietro', 'Zanardi', '01/01/1991', 'amministratore', 'pietro@email.it', '10-10-2011');
$pietro->setPermission();
$pietro->getUserData();

$rosa = new HireDate(5, 'Rosa', 'Anghileri', '22/04/1976', 'segretaria', 'rosa@email.it', '10-08-2014');
$rosa->setPermission();
$rosa->getUserData();

?>