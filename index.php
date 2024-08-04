<?php
    const API_URL= "https://whenisthenextmcufilm.com/api";
    $ch = curl_init(API_URL);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data =json_decode($result,true);
    curl_close($ch);

?>
<header>
    <title>La proxima pelicula de marvel</title>
</header>
<main>
    <section>
        <h1>
            Proxima pelicula de marvel
        </h1>
        <img src="<?= $data["poster_url"]; ?>" alt="">
    </section>
    <hgroup>
        <h3>
            <?= $data["title"];?> se estrena en <?= $data["days_until"];?>
        </h3>
    </hgroup>
</main>
<style>
    body{
        background-color: black;
        display: flex;
        justify-content: center;
    }
    h1{
        color: aliceblue;
    }
</style>
