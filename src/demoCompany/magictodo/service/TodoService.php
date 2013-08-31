<?php

namespace demoCompany\magictodo\service;

use demoCompany\magictodo\dao\TodoDao;

/**
 * Description of TodoService
 *
 * @author juanma
 */
class TodoService {

    public function finAllSample() {
        $todoList = array();
        $todoList[] = "something to do";
        $todoList[] = "another thing to do";
        return $todoList;
    }

    public function finAll() {
        $todoDao = new TodoDao();
        return $todoDao->findAll();
    }

}

?>
