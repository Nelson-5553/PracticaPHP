<!-- Para ejecurtar un servido local php -S localhost:8000 -->
<?php
$name = "Nelson";
$isDev = true;
$age = 12;


define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png'); //Variable globales
const NOMBRE = 'Nelson'; //Variables constantes

$output = "Hola,  $name   Con Edad de  $age 👌";
$outputAge = match (true) {
    $age <= 2 => "Eres un nene, $name 👶",
    $age <= 10 => "Eres un niño, $name 👦",
    $age <= 18 => "Eres un ADOLECENTE, $name 👦",
    $age <= 30 => "Eres un VIEJO, $name 👴",
    default => "TAS GRANDE"
};

$bestLanguages = ["Php", "JavaScript", "Pyton", 1, 2,];
$bestLanguages[3] = "Java" ;
$bestLanguages[] = "Ruby" ;


// var_dump($name); //Tipo de variable
// var_dump($isDev);//Tipo de variable
// var_dump($age);//Tipo de variable
?>

<h1> El mejor lenguaje <?= $bestLanguages[5] ?>
<?php foreach ($bestLanguages as $Lenguajes) : ?>
    <li> <?= $Lenguajes ?> </li>
    <?php endforeach; ?>
<br>
<?= $outputAge; // concatenacion ?>

<br>
<img src="<?= LOGO_URL ?>" alt="php logo" width="200">
<h1>
    <?= $output // concatenacion ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>