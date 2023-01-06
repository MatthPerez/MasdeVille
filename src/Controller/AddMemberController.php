<?php

namespace App\Controller;

use LDAP\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddMemberController extends AbstractController
{
    #[Route('/add/member', name: 'app_add_member')]
    public function add(Request $request): Response
    {
        $form = $this->createForm(MemberType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }

        return new Response;
    }
}
