<!-- Para ejecurtar un servido local php -S localhost:8000 -->
<?php
const API_KEY = "https://whenisthenextmcufilm.com/api";
# Inicializamo una sesion de cURL; ch = curl handle

$ch = curl_init(API_KEY);
//Indicar que queremeos recibir el resultado de la peticion y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//Ejecutar la peticion
$result = curl_exec($ch);
//ALTERNATIVAMERNTE SE PUEDE USAR file_get_contents(API_KEY);/Si solo se quiere hacer una peticion GET
$data = json_decode($result, true);
curl_close($ch);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>La proxima pelicula de marvel</title>
</head>

<body>
 <!-- <pre style="font-size: 10px; overflow: scroll; height: 250px; padding: 10px;">
     //var_dump($data); 
</pre> -->
    <main>
        <section >
            <img src=<?=$data["poster_url"]?> alt=<?= $data["title"] ?> style="height: 250px; whidth: 150; border-radius: 16px" />
           <br><br>
            <hgroup>
                <h3> <?= $data["title"] ?> Se estrena en <?= $data["days_until"] ?> Dias </h3>
                <p> Se estrena el <?= $data["release_date"] ?></p>        
                <br>
            </hgroup>
        </section>
        <br>
        <h1>Descripcion</h1>
        <section>
            <p><?= $data["overview"]?></p>
        </section>
<br><br>
        <section >
            <img src=<?=$data["following_production"]["poster_url"]?> alt=<?= $data["following_production"]["title"] ?> style="height: 150px; whidth: 50; border-radius: 16px" />
           <br><br>
            <hgroup>
                <p>La siguiente es <?= $data["following_production"]["title"] ?></p>
                <p>se estrenara en <?= $data["following_production"]["days_until"]?> Dias</p>
            </hgroup>
        </section>
       
    </main>
</body>

</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        gap: 1rem;
    
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    img {
     margin: 0;
    }
</style>