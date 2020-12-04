<?php
// cette class-ci hérite de ce que Model

class NavigationLink extends Model
{
    public $url;
    public $label;
    public $icon;

    // ... Faire ce que le modèle doit faire
    public function __construct($data)
    {
        $this->url = $data['url'];
        $this->label = $data['label'];
        $this->icon = $data['icon'];
    }
    static public function getAllDisplayed()
    {
        //requete
        $results = static::fetchAll('SELECT `url`, `label`, `icon` FROM `navigation_links` ORDER BY `order` ASC;');
     // instance par ligne récup
        foreach($results as $index => $line){
           $results[$index] = new NavigationLink($line);
        }
        return $results;
    }
}