<?php

namespace App\Controller\Admin;

use App\Entity\Info;
use App\Entity\Template;
use App\Form\InfoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{

    public function new(Template $template, Request $request): Response
    {

        $form = $this->createForm(InfoType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $product = $form->getData()->setTemplate($template);
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('admin_template_settings' , ['id' => $template->getId()]);
        }

        return $this->render('templates_description/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Info $info): Response
    {

        if ($this->isCsrfTokenValid('delete'.$info->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($info);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_template_settings',['id' => $info->getTemplate()->getId()]);
    }
}
