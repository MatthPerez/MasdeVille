<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use App\Repository\MembersRepository;
use App\Repository\VcmRepository;
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

    #[Route('/vcm', name: 'app_vcm')]
    public function vcm(VcmRepository $vcmRepository): Response
    {
        $vcm = $vcmRepository->findAll();

        return $this->render('main/vcm.html.twig', [
            'vcm' => $vcm,
        ]);
    }

    #[Route('/we', name: 'app_we')]
    public function we(): Response
    {
        return $this->render('main/we.html.twig');
    }

    #[Route('/predication', name: 'app_predication')]
    public function predication(): Response
    {
        return $this->render('main/predication.html.twig');
    }

    #[Route('/addMember', name: 'app_add_member')]
    public function addMember(MembersRepository $membersRepository): Response
    {
        $members = $membersRepository->findAll();

        return $this->render('main/addMember.html.twig', [
            'members' => $members,
        ]);
    }
}
