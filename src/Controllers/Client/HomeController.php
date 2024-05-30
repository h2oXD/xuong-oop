<?php
namespace Fixbu\XuongOop\Controllers\Client;

use Fixbu\XuongOop\Commons\Controller;
use Fixbu\XuongOop\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();
        echo '<pre>';
        print_r($user);

        $data = [
            'name' => 'Huuhao',
            'email' => 'hao@gmail.com'
        ];
        $this->renderClient('home',$data);
    }
}