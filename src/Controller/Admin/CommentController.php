<?php

namespace App\Controller\Admin;

use App\Entity\Template;
use App\Entity\TemplatesComment;
use App\Form\TemplatesCommentType;
use App\Repository\TemplatesCommentRepository;
use App\Services\TemplateServices\TemplateBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{


    public function new(Template $template , Request $request , TemplateBuilder $builder): Response
    {
        $form = $this->createForm(TemplatesCommentType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $builder->addComment($form->getData(), $template);

            return $this->redirectToRoute('admin_template_edit' , ['id' => $template->getId()]);
        }

        return $this->render('templates_comment/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, TemplatesComment $templatesComment): Response
    {
        if ($this->isCsrfTokenValid('delete'.$templatesComment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($templatesComment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_template');
    }
}
