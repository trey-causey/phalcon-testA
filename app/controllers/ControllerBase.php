<?php
declare(strict_types=1);

namespace testA\controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        $this->tag->prependTitle('TestA | ');
        $this->view->setTemplateAfter('main');
    }
}
