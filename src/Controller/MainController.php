<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use App\Repository\MembersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(MembersRepository $membersRepository, EventsRepository $eventsRepository): Response
    {
        $members = $membersRepository->findAll();
        $events = $eventsRepository->findAll();
        
        return $this->render('main/index.html.twig', [
            'members' => $members,
            'events' => $events,
        ]);
    }
}
