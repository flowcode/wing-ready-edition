<?php

namespace demoCompany\magictodo\controller;

use demoCompany\magictodo\form\SampleForm;
use flowcode\enlace\controller\BaseController;
use flowcode\enlace\http\HttpRequest;
use flowcode\enlace\view\View;

/**
 * Description of HomeController
 *
 * @author juanma
 */
class FormController extends BaseController {

    public function __construct() {
        $this->setIsSecure(FALSE);
    }

    public function index(HttpRequest $httpRequest) {
        $viewData['form'] = new SampleForm();
        return new View($viewData, "frontend/form/index");
    }

}

?>
