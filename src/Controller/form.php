<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\Trace;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/", name="index-request", methods={"POST"})
     */
    public function request(Request $request, Trace $trace):Response
    {
            $name = $request->get('name');
            $number = $request->get('contact_number');

            if ($name && $number) {
                $trace->insert($name, $number);
                return $this->render('form/form.html.twig', ['success' => true]);
            }

            return $this->render('form/form.html.twig', ['success' => false]);
    }
}
