              /* IMAGE RESPONSIVE */

img {
  max-width: 100%;
  width: auto;
  height: auto;    
}            


               /* VARIABLES CSS */

:root {
  --couleurVert: #3d856e;
  --couleurGris: #a5a4a4;
  --couleurGrisText: #676666;  
  --couleurBleu: #274267;  
  --couleurNoir: #000;
  --couleurBlanc: #fff;
  --couleurVertConfirmation: #69bd45;
  --couleurRougeErreur: #f15a35;  
}


                   /* BODY */
body {
   top: 0px;
   margin: 0px;
   padding: 0px;
}
                    /* a */
a, a:hover, a:visited, a:active {
	text-decoration: none;
}

  
               /* HEADER */
.image-header {
    min-width: 100%;
    max-height: 790px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
    position: relative;
    z-index: 0;
}

.logo-header {
   width: 350px;    
   top: 60px;
   left: 50%;
   -webkit-transform: translate(-50%, 0%);
   transform: translate(-50%, 0%);
   position: absolute; 
   z-index: 9999;    
}

             /* HEADER/ Boutons */
.bouton-connexion {
   width: 145px;
   height: 40px;
   background-color: rgba(255, 255, 255, 0.2);
   border: 3px solid var(--couleurNoir);
   right: 100px;
   top: 60px;    
   position: absolute;
   -webkit-transition: all 0.2s ease-out;
   transition: all 0.2s ease-out;
   cursor: pointer; 
}

.bouton-connexion:hover {
   -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
   box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.3);
}

.text-bouton-connexion {
    font-size: 1.2em;
    font-weight: 600; 
    text-transform: uppercase;
    color: var(--couleurNoir);
    margin-left: 12.5px;
}

.bouton-connexion-trait {
   width: 142px;
   height: 3px;
   background-color: var(--couleurNoir);
   left: 0;
   bottom: 4px; 
   position: absolute;
}

.bouton-accueil {
   width: 125px;
   height: 40px;
   background-color: rgba(255, 255, 255, 0.5);
   border: 3px solid var(--couleurNoir);
   right: 100px;
   top: 110px;    
   position: absolute;
   -webkit-transition: all 0.2s ease-out;
   transition: all 0.2s ease-out; 
}

.bouton-accueil:hover {
   -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
   box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.3);
}

.text-bouton-accueil {
    font-size: 1.2em;
    font-weight: 600; 
    text-transform: uppercase;
    color: var(--couleurNoir);
    margin-left: 20px;
}

.bouton-accueil-trait {
   width: 122px;
   height: 2px;
   background-color: var(--couleurNoir);
   left: 0;
   bottom: 4px; 
   position: absolute;
}

      /* HEADER/ Citation */

.bandeau-citation {
   width: 100%;
   height: 150px;
   background-color: rgba(0, 0, 0, 0.3);     
   top: 50%;
   -webkit-transform: translate(0, -50%);
   transform: translate(0, -50%);
   position: absolute; 
}

.citation {
   color: var(--couleurBlanc);
   list-style-type: none;
   padding: 0px;    
   top: 50%;    
   left: 50%;
   -webkit-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
   position: absolute;
}

.phrase1 {
   font-family: 'Poppins', sans-serif; 
   font-size: 1.7em;
   font-style: italic;
   line-height: 1em;
}

.phrase2 {
   font-family: 'Poppins', sans-serif;
   text-transform: uppercase;  
   font-size: 0.8em;
   font-weight: 600;
   margin-right: 20px;    
   right: 0px;
   position: absolute;    
}

     /* HEADER/ Reseaux Sociaux */
.icones-reseaux-header {
    width: 100%;
    height: 40px;
    background-color: var(--couleurNoir);
    list-style-type: none;
    display: -webkit-box;
    display: -ms-flexbox;
    background-color: rgba(0, 0, 0, 0.6);  
    bottom: 0px;
    padding-bottom: 55px;
    position: absolute;
}

.icones-marge-header {
   width: 35px; 
   height: 35px;
   border-radius: 50%;
   background-color: var(--couleurBlanc);     
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   margin-top: 2px;
   margin-left: 38%;
   -webkit-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out;  
}

.icones-marge-header:hover {
   background-color: var(--couleurVert);     
}

.icones-header {
   width: 35px; 
   height: 35px;
   border-radius: 50%;
   background-color: var(--couleurBlanc);     
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   margin-top: 2px;
   margin-left: 95px;
   -webkit-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out;  
}

.icones-header:hover {
   background-color: var(--couleurVert);     
}

.text-google-haut {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 0.6em;
    margin-left: 15px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-google-haut:hover {
    color: var(--couleurGris);
}

.text-twitter-haut {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 0.6em;
    margin-left: 20px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-twitter-haut:hover {
    color: var(--couleurGris);
}

.text-facebook-haut {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 0.6em;
    margin-left: 30px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-facebook-haut:hover {
    color: var(--couleurGris);
}

.trait-vert {
    width: 125px;
    height: 6.5px;
    background-color: var(--couleurVert);
    left: 50%;
    bottom: 0px;
    -webkit-transform: translate(-50%, 0%);
    transform: translate(-50%, 0%);
    position: absolute;
}



       /* SECTION/ Bienvenue Sur le Blog */
.bloc-bienvenue {
   width: 100%;
   height: 350px;
   background-image: url(img/);
   background-color: var(--couleurBlanc);
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   position: relative;
   z-index: 9999;    
}   

.text-bienvenue {
    width: 380px;
    left: 50%;
    top: 60px;
    -webkit-transform: translate(-50%, 0%);
    transform: translate(-50%, 0%);
    position: absolute;
}

.bienvenue {
   width: 650px;
   height: 180px;
   background-color: var(--couleurBlanc);
   /*border: 2px  solid var(--couleurNoir);*/
   -webkit-box-shadow: 15px 5px 5px 2px rgba(0, 0, 0, 0.2);
   box-shadow: 0px 5px 5px 2px rgba(0, 0, 0, 0.2);
   margin-top: 140px;
   left: 50%;
   -webkit-transform: translate(-50%, 0%);
   transform: translate(-50%, 0%);
   position: absolute;    
}

.para-bienvenue {
    width: 80%;
    height: 200px;
    font-family: 'Poppins', sans-serif; 
    font-size: 0.9em;
    line-height: 1.5em;
    color: var(--couleurGrisText);
    top:  50%;
    left: 50%;
    -webkit-transform: translate(50%, 50%);
    transform: translate(-50%, -25%);
    position: absolute;
    z-index: 10000;
}

.lettre-bienvenue {
    font-size: 1.6em;
    color:  var(--couleurVert);
}

       



               /* SECTION/ Bandeau Book */
.bandeau-book {
   width: 100%;
   height: 400px;
   background-image: url(img/alaska-bandeau.png);
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   margin-top: 120px;
   position: relative;
}

.book {
    height: 400px;
    margin-left: 350px;
    margin-top: -60px;
}

.text-image-book {
    width: 450px;
    color: var(--couleurBlanc);
    top: 55px;
    right: 18.5%;
    position: absolute;
}

.bouton-chapitres {
   width: 265px;
   height: 40px;
   background-color: rgba(0, 0, 0, 0.3);
   border: 3px solid var(--couleurVert);
   right: 350px;
   bottom: 90px;
   position: absolute;
   -webkit-transition: all 0.2s ease-out;
   transition: all 0.2s ease-out;  
}

.bouton-chapitres:hover {
   background-color: var(--couleurVert);
   border: 3px solid var(--couleurBlanc); 
   -webkit-box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.6);
   box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.6);   
}

.text-bouton-chapitres {
    font-size: 1.2em;
    font-weight: 600; 
    text-transform: uppercase;
    color: var(--couleurBlanc);
    margin-left: 17.5px;
}

.bouton-chapitres-trait {
   width: 259px;
   height: 2px;
   background-color: var(--couleurVert);
   left: 0;
   bottom: 4px;
   position: absolute;
}

.book-citation {
   width: 100%;
   height: 150px;
   top: 50%;
   -webkit-transform: translate(0, -50%);
   transform: translate(0, -50%);
   position: absolute; 
}

.book-text {
   color: var(--couleurBlanc);
   list-style-type: none;
   padding: 0px;    
   top: 50%;    
   right: 17%;
   -webkit-transform: translate(0%, -50%);
   transform: translate(0%, -50%);
   position: absolute;
}

.book-phrase1 {
   font-family: 'Poppins', sans-serif; 
   font-size: 1.4em;
   font-style: italic;
   line-height: 1em;
}

.book-phrase2 {
   font-family: 'Poppins', sans-serif;
   text-transform: uppercase;  
   font-size: 0.6em;
   font-weight: 600;
   margin-right: 15px;    
   right: 0px;
   position: absolute;    
}


   

        /* SECTION/ Les Derniers Chapitres */
#section-chapitres {
    width: 100%;
    min-height: 850px;
    background-image: url(img/motif-points.png);
    background-repeat: repeat;
    background-size: 11%;
    padding-top: 80px;
    padding-bottom: 250px;
   
}

.titre-chapitres {
   width: 315px;
   height: 40px;
   background-color: var(--couleurVert);
}

.trait-chapitres {
   width: 2px;
   height: 40px;
   background-color: var(--couleurBlanc);
   margin-left: 7px;
   position: absolute;
}

.text-titre-chapitres {
   font-family: 'Poppins', sans-serif;
   font-size: 1.3em; 
   font-weight: 500;    
   text-transform: uppercase; 
   color: var(--couleurBlanc);
   float: left;
   margin-left: 18px;
   margin-top: 8px;    
}

.text-chapitres {
   font-family: 'Poppins', sans-serif;
   font-weight: 100;
   font-size: 0.9em;
   line-height: 20px;
   margin-top: 15px;    
}

.barre-recherche {
   -webkit-box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
   box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);  
   margin-top: 20px;
   margin-bottom: 20px; 
   margin-left: 50%;
   -webkit-transform: translate(-50%,0);
   transform: translate(-50%,0);
}

.onglet-recherche {
    width: 80%;
    height: 50px;
    font-size: 0.95em;
    color: var(--couleurGrisText);
    padding-left: 20px;
    border: none;
}

.bouton-recherche {
    width: 20%;
    height: 50px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 1.5em;
    background-color: var(--couleurNoir);
    color: var(--couleurBlanc);
    border: none;
    position: absolute;
    -webkit-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out; 
}

.bouton-recherche:hover {
    background-color: var(--couleurBleu);
    position: absolute;
}

.bloc-chapitres {
   width: 100%;
   height: 180px;
   background-color: var(--couleurBlanc);
   margin-top: 20px;
   margin-left: 50%;
   -webkit-transform: translate(-50%,0);
   transform: translate(-50%,0);
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
   box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
   -webkit-transition: all 0.1s ease-out;
   transition: all 0.1s ease-out;    
}

.bloc-chapitres:hover {
   -webkit-box-shadow: 10px 5px 5px rgba(2, 0, 0, 0.3);
   box-shadow: 10px 5px 5px rgba(2, 0, 0, 0.3);    
}

.numero-chapitres {
    width: 120px;
    height: 180px;
    background: rgba(61,133,110,1);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(61,133,110,1)), color-stop(25%, rgba(61,133,110,1)), color-stop(74%, rgba(39,66,103,1)), color-stop(100%, rgba(39,66,103,1)));
    background: linear-gradient(45deg, rgba(61,133,110,1) 0%, rgba(61,133,110,1) 25%, rgba(39,66,103,1) 74%, rgba(39,66,103,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3d856e', endColorstr='#274267', GradientType=1 );
    left: 0px;
    position: absolute; 
}

.numero {
    font-weight: 400;
    font-size: 13em;
    color: var(--couleurBlanc);
    margin-left: 50%;
    -webkit-transform: translate(-90%,-25%);
    transform: translate(-90%,-25%);
}

.titre-chapitre {
    width: 400px;
    height: 30px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.4em;
    color: var(--couleurNoir);
    left: 0px;
    margin-left: 145px;
    margin-top: 15px;
    display: block;
    position: absolute;
}

.debut-text {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 0.80em;
    color: var(--couleurGrisText); 
    margin-left: 130px;
    margin-right: 25px;
    margin-top: 50px;
}

.grande-lettre {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 1.5em;
    color: var(--couleurVert); 
}

.lire {  /* Bouton/ En Lire + */
    width: 90px;
    height: 30px;
    background-color: var(--couleurGris);
    border: 0px;
    bottom: 0px;
    right: 0px;
    position: absolute;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.lire:hover {  /* Bouton/ En Lire + */
    background-color: var(--couleurBleu);
}

.text-lire {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 1em;
    color: var(--couleurBlanc);
    margin-top: 2.5px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-lire:hover {
    color: var(--couleurBlanc);
}




        /* FOOTER/ Bouton-up */
.bouton-up {
   width: 60px;
   height: 60px;
   background-color: rgba(255, 255, 255, 0.2);
   border: 3px solid var(--couleurNoir);
   left: 50%;
   -webkit-transform: translate(-50%,0);
   transform: translate(-50%,0);
   margin-top: -150px;    
   position: absolute;
   -webkit-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out;  
   cursor: pointer;
}

.bouton-up:hover  {
   background-color: rgba(255, 255, 255, 0.8); 
   -webkit-box-shadow: 7px 5px 5px rgba(0, 0, 0, 0.2);
   box-shadow: 7px 5px 5px rgba(0, 0, 0, 0.2);  
}

.trait {
   width: 57px;
   height: 2px;
   background-color: var(--couleurNoir);
   left: 0;
   bottom: 6px; 
   position: absolute;
}

.fleche-bouton-up {
   width: 45px;
   margin-top: 10px;
   margin-left: 4px;    
}



          /* FOOTER/ Reseaux sociaux */
.icones-reseaux {
    width: 100%;
    height: 40px;
    background-color: var(--couleurNoir);
    list-style-type: none;
    display: -webkit-box;
    display: -ms-flexbox;
}

.icones {
   width: 35px; 
   height: 35px;
   border-radius: 50%;
   background-color: var(--couleurBlanc);     
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   margin-top: 2px;
   margin-left: 95px;
   -webkit-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out; 
}

.icones:hover {
   background-color: var(--couleurVert); 
}

.icones-marge {
   width: 35px; 
   height: 35px;
   border-radius: 50%;
   background-color: var(--couleurBlanc);     
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   margin-top: 2px;
   margin-left: 38%;
   -webkit-transition: all 0.3s ease-out;
   transition: all 0.3s ease-out; 
}

.icones-marge:hover {
   background-color: var(--couleurVert);     
}

.fa-google-plus-g {
   font-size: 1.3em;
   color: var(--couleurNoir); 
   -webkit-transform: translate(15%, 32%);
   transform: translate(15%, 32%);
}

.fa-twitter {
    font-size: 1.3em;
    color: var(--couleurNoir);
    -webkit-transform: translate(35%, 30%);
    transform: translate(35%, 30%);
}

.fa-facebook-f {
    font-size: 1.3em;
    color: var(--couleurNoir); 
    -webkit-transform: translate(110%, 30%);
    transform: translate(110%, 30%);
}

.text-google {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 15%;
    margin-left: 15px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-google:hover {
    color: var(--couleurGris);
}

.text-twitter {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 15%;
    margin-left: 20px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-twitter:hover {
    color: var(--couleurGris);
}

.text-facebook {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurBlanc);
    margin-top: 10%;
    margin-left: 30px;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; 
}

.text-facebook:hover {
    color: var(--couleurGris);
}

         
       /* FOOTER/ Bloc-footer */
.bloc-footer {
    width: 100%;
    height: 270px;
    background-color: var(--couleurGris);
}

.logo {
    width: 28%;
    margin-left: 50%;
    margin-top: 70px;
    -webkit-transform: translate(-50%);
    transform: translate(-50%);
}

.text-bloc-footer {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    color: var(--couleurNoir);
    text-align: center;
    text-decoration: underline;
    margin-top: 10px;
}

.text-bloc-footer:hover {
    color: var(--couleurGrisText);
    margin-top: 10px;
}

            /* FOOTER/ Rights */
.rights {
    width: 100%;
    height: 30px;
    line-height: 0;
    background-color: var(--couleurBlanc);
}

.text-rights {
    font-family: 'Poppins', sans-serif; 
    font-size: 0.8em;
    text-align: center;
    margin: 0px;
    padding-top: 15px;
}

