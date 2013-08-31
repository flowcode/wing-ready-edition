<?php

namespace demoCompany\magictodo\controller;

use demoCompany\magictodo\service\TodoService;
use flowcode\enlace\controller\BaseController;
use flowcode\enlace\http\HttpRequest;
use flowcode\enlace\view\View;

/**
 * Description of HomeController
 *
 * @author juanma
 */
class HomeController extends BaseController {

    public function __construct() {
        $this->setIsSecure(FALSE);
    }

    public function index(HttpRequest $httpRequest) {
        $todoSrv = new TodoService();
        $viewData['todos'] = $todoSrv->finAll();
        return new View($viewData, "frontend/home/index");
    }

}

?>
