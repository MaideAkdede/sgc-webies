<?php

class Home
{
    public $header;
    public $links;

    public function __construct($header)
    {
        // récupérer les modèles utiles
       /* $this->header = $header;*/

        //méthode static elle sappele sans que l'objet existe
        //on lappel dans le vide

        $this->links = NavigationLink::getAllDisplayed();
    }
    public function render()
    {
        //Le code qui fait le rendu de mon template
        extract(get_object_vars($this));
        include('views/home.php');
    }
}