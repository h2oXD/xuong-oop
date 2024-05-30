<?php

namespace Fixbu\XuongOop\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    protected function renderClient($view,$data)
    {
        $pathView = __DIR__ . '/../Views/Client';

        $blade = new BladeOne($pathView);
       
        echo $blade->run($view,$data);
    }
    protected function renderAdmin($view,$data)
    {
        $pathView = __DIR__ . '/../Views/Admin';

        $blade = new BladeOne($pathView);
       
        echo $blade->run($view,$data);
    }
}