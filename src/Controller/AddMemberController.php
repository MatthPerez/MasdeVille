<?php

namespace App\Controller;

use App\Entity\Members;
use App\Repository\MembersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestMatcherInterface;

class AddMemberController extends AbstractController
{
    #[Route('/addMember', name: 'app_add_member')]
    public function add(Request $request, MembersRepository $membersRepository): Response
    {
        $member = new Members();
        $member->setFirstname('inconnu-' . time());

        $form = $this->createForm(MembersType::class, $member);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid) {
            dd($member);
        }

        return $this->render('addMembers.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
