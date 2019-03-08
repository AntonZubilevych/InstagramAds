<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminController extends AbstractController
{

    public function index()
    {
        return $this->redirectToRoute('admin_order');
    }
}
