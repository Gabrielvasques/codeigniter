<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templade/header');
        echo view('home');
        echo view('templade/footer');
    }

    public function page($page='home')
    {
        echo view('templade/topo');
        echo view($page);
        echo view('templade/rodape');
    }
}
