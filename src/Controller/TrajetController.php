<?php

namespace App\Controller;

use App\Entity\Trajet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/trajet', name: 'trajet')]
    public function index(): Response
    {

        $trajet = $this->entityManager->getRepository(Trajet::class)->findAll();

        return $this->render('trajet/index.html.twig', [
            'trajet' => $trajet,
        ]);
    }
}
