<?php

//charger élément qui permettront de générer la vue

require_once('config.php');
require_once('models/Model.php');
require_once('models/NavigationLink.php');


require_once('controllers/Home.php');

$page = new Home('Webies - The best cinema ever');

$page->render();