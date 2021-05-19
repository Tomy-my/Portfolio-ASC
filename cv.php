<?php
$titre = "C.V";

include('header.php');

?>
    <div class="container_cv">
        <div class="me">
            <div class="cercle"> <img id="hi" src="img/svg/hi.svg" alt="Logo du site"></div>
            <div class="nom">
                <p id="nom">Tomy SOTTY</p>
                <p id="job">Developpeur web</p>
            </div>
            <div class="social_cv">
            <a href="https://github.com/Tomy-my"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/_dakor/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" style="margin-right: 0px;"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="mail">
                <button class="email">Press here for show my Email</button>
            </div>
        </div>
        <div class="cv">
            <div class="sous_cv">
                <h1>À propos de moi</h1>
                <h4>Salut, je suis Tomy SOTTY</h4>
                <p>Grand fan de l'univers numérique, je passe mes journées à développer et créer des sites internets. Chaque jour, je fais de mon mieux pour innover et trouver de nouvelles idées afin de créer des sites internets uniques et ou l'expérience utilisateur sera la plus satisfaisante possible ! </p>
            </div>
            <div class="skills">
                <div class="titre_skills">
                    <h3>Compétences developpeur</h3>
                </div>
                <div class="int_skills">
                    <figure class="chart" data-percent="1">
                        <figcaption>70%</figcaption>
                        <svg width="200" height="200">
                            <circle class="outer" cx="125" cy="67" r="61" transform="rotate(-90, 95, 95)"/>
                        </svg>
                        <p>HTML</p>
                    </figure>
                    <figure class="chart" data-percent="2">
                        <figcaption>60%</figcaption>
                        <svg width="200" height="200">
                            <circle class="outer" cx="125" cy="67" r="61" transform="rotate(-90, 95, 95)"/>
                        </svg>
                        <p>CSS</p>
                    </figure>
                    <figure class="chart" data-percent="3">
                        <figcaption>40%</figcaption>
                        <svg width="200" height="200">
                            <circle class="outer" cx="125" cy="67" r="61" transform="rotate(-90, 95, 95)"/>
                        </svg>
                        <p>JS</p>
                    </figure>
                </div>
            </div>
            <div class="personnel">
                
            </div>
        </div>
    </div>
    
<?php
include('footer.php');
?>