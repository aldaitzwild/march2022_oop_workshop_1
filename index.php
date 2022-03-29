<?php
require_once 'src/Fighter.php';

$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);

while($heracles->isAlive() && $lion->isAlive()) {
    $damage = $heracles->fight($lion);
    echo $heracles->getName() . " attaque " . $lion->getName() . " et lui fait perdre $damage points de vie.<br>";
    echo "Point de vie de " . $lion->getName() . " : " . $lion->getLife() . '<br><br>';

    if(!$lion->isAlive())
        break;

    $damage = $lion->fight($heracles);
    echo $lion->getName() . " attaque " . $heracles->getName() . " et lui fait perdre $damage points de vie.<br>";
    echo "Point de vie de " . $heracles->getName() . " : " . $heracles->getLife() . '<br><br>';
}

if($lion->isAlive())
{
    echo $lion->getName() . " a gagné !<br>";
} else {
    echo $heracles->getName() . " a gagné !<br>";
}
