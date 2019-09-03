class Main {
    constructor() {
        this.bouton = new Bouton(); //Instanciation bouton.js
    }//Fin constructor Main
};//Fin class Main

let app = null;

//Chargement des fichiers JS au lancement 
window.onload = () => {
  app = new Main();
};