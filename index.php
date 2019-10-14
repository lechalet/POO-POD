<?php
require_once 'Person.php';
$me = new Personne('BARDOUX', 'ROMAIN', '207 rue national', '01/02/1995');
echo $me;
echo 'J\'ai ' . $me->calculAge($me->getBirthDate()) . ' ans.';
