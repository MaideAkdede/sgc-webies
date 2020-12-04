<?php

class Home
{
    public $header;
    public function __construct($header)
    {
        // récupérer les modèles utiles
        $this->header = $header;
    }
    public function render()
    {
        //Le code qui fait le rendu de mon template
        extract(get_object_vars($this));
        include('views/home.php');
    }
}