<?php
$titre = "Projets";

include('header.php');
?>

<div class="projet_container">
    <div class="container_projet1">
        <img src="img/projet1">
        <div class="text_projet">
            <a href="#"><h1>Département du Jura</h1></a>
            <hr>
            <ul>
                <li><span>Langage :</span> HTML - CSS - JS</li>
                <li><span>Durée :</span> 1 semaine</li>
                <li id="last"><span>Période :</span> 12/04/2021 au 22/04/2021</li>
            </ul>
            <p>
                Le projet consiste à choisir un département français afin de lui créer un site internet. Pour cela nous devions créer une maquette représentant nos idées, créer un logo et ensuite intégrer la maquette.
                <br>
                Pour réaliser le logo, je suis parti d’une base déjà existante en Vecteurs. Je l’ai modifié et exporté en VSG afin de l’intégrer pour le site web.
                Ensuite, pour dessiner la maquette, j’ai utilisé Paint afin de me donner un minium de directive pour éviter de partir dans tous les sens. La maquette est tout de même restée très simple afin de me laisser improviser comme je le sentais.

            </p>
        </div>
    </div>
    <div class="container_projet1">
        <img src="img/projet1" onclick="projet1()">
        <div class="text_projet">
            <h1>Département du Jura</h1>
            <hr>
            <ul>
                <li><span>Langage :</span> HTML - CSS - JS</li>
                <li><span>Durée :</span> 1 semaine</li>
                <li id="last"><span>Période :</span> 12/04/2021 au 22/04/2021</li>
            </ul>
            <p>
                Le projet consiste à choisir un département français afin de lui créer un site internet. Pour cela nous devions créer une maquette représentant nos idées, créer un logo et ensuite intégrer la maquette.
                <br>
                Pour réaliser le logo, je suis parti d’une base déjà existante en Vecteurs. Je l’ai modifié et exporté en VSG afin de l’intégrer pour le site web.
                Ensuite, pour dessiner la maquette, j’ai utilisé Paint afin de me donner un minium de directive pour éviter de partir dans tous les sens. La maquette est tout de même restée très simple afin de me laisser improviser comme je le sentais.

            </p>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>