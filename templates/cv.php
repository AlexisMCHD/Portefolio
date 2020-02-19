<!-- include le head et le header... -->
<?php include("top.php") ?>

<!-- contenu spécifique à cette page -->

<head>
    	<meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    	<title>CV Alexis MICHAUD</title><!-- un titre est mit-->
    	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Port+Lligat+Slab&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
    <body>

          
          <div class="container mt-3">
            <h2>Ceci est mon CV</h2>
            <br>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Diplômes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu2">Expérience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu3">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu4">Télécharger</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div>
                  <h2>Présentation</h2>
                  Alexis MICHAUD<br>
                  <img src="content/cv.jpg" alt="salut" width="250" eith="300">
                  <p>
                    Jeune étudiant en 1ère année d'étude en informatique plus orienté dans le domaine du dévellopement à Campus Academy enciennement IMIE basé au 213 Route de Rennes à Orvault.
                  </p>
                  <p>
                    Mes multiples centres d'intérêts sont:<br>
                    ·Les jeux vidéos<br>
                    ·Le codage<br>
                    ·Faire des setup pour PC<br>
                    ·Coder <br>
                    ·L'histoire<br>
                    ·La reconstitution historique<br>
                    ·Les sport mécanisés<br>
                  </p> 
                </div>
              </div>
            <div id="menu1" class="container tab-pane fade"><br>
              <div>
                <h3>Diplômes</h3>
                  <p>
                  2016 Brevet des collèges<br>
                  2019 Bac technologique STI2D option SIN (Système d'Information Numérique)
                  </p>
              </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
              <div>
                <h3>Expériences</h3>
                  <p>Du 21 au 31 octobre 2019 :<br>
                    Manutentionaire<br>
                  Entrepose échaffaudage
                    7 Rue du Tisserand, 44800 Saint-Herblain<br><br>
                    Etudes:<br>
                    1ère année bachelor informatique développeur 
                    Campus Academy
                  44700 Orvault-Grand Val<br><br>
                  07-08/2019<br>
                    Cueillette de tomates Vinet maraîcher<br><br>
                    05/2019 <br>
                    Cueillette du muguet Vinet maraîcher<br><br>
                    Lycée :<br>
                    1er et Terminale STI2D
                    Lycée Saint Joseph, La Joliverie, St Sébastien/Loire
                    Option S.I.N   <br><br>
                    Du 19 au 23 juin 2017 :<br>
                    Stage de découverte<br>
                    Boulangerie/Pâtisserie
                    La Source des Délices, 44270 LA MARNE<br><br>
                    Lycée : 2nd<br>
                    Lycée Saint Joseph Machecoul
                    Option I.C.N<br><br>
                    Du 16 au 20 mars 2015 :<br>
                    Stage de découverte
                    U Technologie
                    Hyper U, 85300 Challans<br><br>
                    Collège :<br> 
                    De la 6ème à la 3ème 
                    Collège Saint Joseph Machecoul
                  </p>
                </div>
              </div>
            <div id="menu3" class="container tab-pane fade"><br>
                  <p>
                    Html Css et Javascript<br>
                    Java sous Processing<br>
                    C++ sous Arduino<br> 
                    Conception de planning prévisionnelle <br>
                    Conception de cahier des charges ou de cas d'utilisation type SYSML<br>
                    Conception de base de donnée type SQL<br>
                    Angular
                  </p>
            </div>
            <div id="menu4" class="container tab-pane fade" href="content/CV Alexis MICHAUD.pdf"><br>
            <a type="button" class="btn btn-outline-primary" href="content/CV Alexis MICHAUD.pdf"> CV en pdf</a>
            </div>
          </div>
        </div>
            
          </ul>
        </div>


<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>
