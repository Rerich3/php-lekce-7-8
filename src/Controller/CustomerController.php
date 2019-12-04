<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer/detail/id", name="id", methods="GET"))
     */
    public function detail()
    {
        return $this->render('templates/customer/index.html.twig', ['controller_name' => 'Customercontroller']);
    }
}