<?php
session_start();
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
            <div class="personnel">
                    <h3>Compétences professionnelles</h3>
                <div class="int_personnel">
                    <div class="circle_personnel">
                        <figure class="chart" data-percent="4">
                            <figcaption>45%</figcaption>
                            <svg width="200" height="200">
                                <circle class="outer" cx="125" cy="67" r="61" transform="rotate(-90, 95, 95)"/>
                            </svg>
                            <p>Photoshop</p>
                        </figure>
                        <figure class="chart" data-percent="5">
                            <figcaption>45%</figcaption>
                            <svg width="200" height="200">
                                <circle class="outer" cx="125" cy="67" r="61" transform="rotate(-90, 95, 95)"/>
                            </svg>
                            <p>Illustrator</p>
                        </figure>
                    </div>
                    <div class="slide_personnel">
                        <p id="title_slide">PHP</p>
                        <div class="slide_php">
                            <div class="int_php"><p><span>0</span>%</p></div>
                        </div>
                        <p id="title_slide">Figma</p>
                        <div class="slide_figma">
                            <div class="int_figma"><p><span>0</span>%</p></div>
                        </div>
                        <p id="title_slide">After Effect</p>
                        <div class="slide_ae">
                            <div class="int_ae"><p><span>0</span>%</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills">
                <div class="titre_skills">
                    <h3>Compétences Front-End</h3>
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
            <div class="formation">
                <h3>Mes formations</h3>
                <h4>Acces Code School | Developpeur web</h4>
                <p>- Diplôme : Niveau bac+ 2  <br>- lieu : 58000 Nevers<br>- Durée : 8 mois (Actuellement en cours)</p>
                <hr>
                <h4>École de la deuxième chance (E2C Nièvre)</h4>
                <p>- Diplôme : Remise à niveau des matières générales  <br>- lieu : 58640 Varennes-Vauzelles<br>- Durée : 1 an</p>
            </div>
            <div class="caractere">
                <h3>Mes principales Qualités</h3>
                <div class="int_cara">
                    <div class="left_cara">
                    <ui>
                        <li style="width: 320.1px;"><i class="fas fa-check"></i>Curieux</li>
                        <li style="width: 323.6px;"><i class="fas fa-check"></i>Logique</li>
                        <li style="width: 320.1px;"><i class="fas fa-check"></i>Attentif</li>
                        <li style="width: 359.1px;"><i class="fas fa-check"></i>Perséverant</li>
                    </ui>
                    </div>
                    <div class="right_cara">
                        <img id="ampoule" src="img/svg/ampoule.svg" alt="Décoration">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="skills_right">
            <div class="cadre_img"><img src="img/html.png" alt="Logo HTML" style="margin-top: 25px;"> </div>
            <div class="cadre_img"><img src="img/css.png" alt="Logo CSS"> </div>
            <div class="cadre_img"><img src="img/js.png" alt="Logo JS"> </div>
            <div class="cadre_img"><img src="img/mysql.png" alt="Logo MYSQL"> </div>
            <div class="cadre_img"><img src="img/ps.png" alt="Logo PHOTOSHOP"> </div>
            <div class="cadre_img"><img src="img/ai.png" alt="Logo ILLUSTRATOR"> </div>
            <div class="cadre_img"><img src="img/ae.png" alt="Logo AFTER EFFECT"> </div>
            <div class="cadre_img"><img src="img/figma.png" alt="Logo FIGMA"> </div>
        </div>
    </div>
<?php
include('footer.php');
?>