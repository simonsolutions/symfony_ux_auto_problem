<?php

namespace App\Controller;

use App\Form\AutoDemoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AutocompleteController extends AbstractController
{
    #[Route('/', name: 'app_autocomplete')]
    public function index(): Response
    {

        $form = $this->createForm(AutoDemoType::class);


        return $this->render('autocomplete/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
