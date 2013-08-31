<?php

use flowcode\ceibo\data\PDOMySqlDataSource;
use flowcode\ceibo\EntityManager;
use flowcode\enlace\Enlace;

require './vendor/autoload.php';

$app = new Enlace(Enlace::$MODE_DEVELOPMENT);

/** setup */
$app->set("dir", array(
    "src" => __DIR__ . "/src",
    "log" => __DIR__ . "/log"
));
$app->set("scanneableControllers", array(
    "magictodo" => "\\demoCompany\\magictodo\\controller\\"
));
$app->set("defaultController", "\\flowcode\\enlace\\controller\\DefaultController");
$app->set("defaultMethod", "defaultMethod");
$app->set("errorMethod", "errorMethod");

/** views layouts */
$app->set("view", array(
    "path" => __DIR__ . "/src/demoCompany/magictodo/view",
    "layout" => array(
        "frontend" => "frontend",
        "backend" => "backend",
    )
));

/** data access */
$dataSource = new PDOMySqlDataSource();
$dataSource->setDbDsn("mysql:host=localhost;dbname=wing-prueba");
$dataSource->setDbUser("root");
$dataSource->setDbPass("root");

$em = EntityManager::getInstance();
$em->setDataSource($dataSource);
$em->setMappingFilePath(__DIR__ . "/config/db/ceibo-mapping.xml");

/** other config */
$app->set("messages", array(
    "hello" => "hi",
));

/** routes */
$app->setRoute("homepage", array("permalink" => "home"));
$app->setRoute("demo", array("controller" => "Demo"));
$app->setRoute("admin", array("controller" => "AdminHome"));

/** run app */
$app->handleRequest($_SERVER['REQUEST_URI']);
?>
