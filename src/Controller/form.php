<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class form extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function show():Response
    {
        return $this->render('form/form.html.twig');
    }
}