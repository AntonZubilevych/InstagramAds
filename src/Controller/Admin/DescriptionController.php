<?php

namespace App\Controller\Admin;

use App\Entity\Template;
use App\Entity\TemplatesDescription;
use App\Form\TemplatesDescriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DescriptionController extends AbstractController
{

    public function new(Template $template , Request $request): Response
    {

        $form = $this->createForm(TemplatesDescriptionType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $product = $form->getData()->setTemplate($template);
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('admin_template_edit' , ['id' => $template->getId()]);
        }

        return $this->render('templates_description/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, TemplatesDescription $templatesDescription): Response
    {
        if ($this->isCsrfTokenValid('delete'.$templatesDescription->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($templatesDescription);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_template_settings',['id' => $templatesDescription->getTemplate()->getId()]);
    }
}
