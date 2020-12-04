<?php

//charger élément qui permettront de générer la vue

require('config.php');
require('models/Model.php');
require('controllers/Home.php');

$page = new Home('Webies - The best cinema ever');

$page->render();