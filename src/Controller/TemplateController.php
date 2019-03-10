<?php

namespace App\Controller;

use App\Entity\Template;
use App\Services\OrderServices\OrderBuilder;
use App\Services\TemplateServices\TemplateBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class TemplateController extends AbstractController
{

    public function show(Template $template , Request $request , OrderBuilder $builder)
    {

        if($request->request->get('name')){
            $builder->setFromLanding($request->request->get('name'),$request->request->get('phone'),$template);
            return $this->redirectToRoute('app_success');
        }


        return $this->render('template/public.html.twig', [
            'template' => $template
        ]);
    }

    public function success()
    {
        return $this->render('template/success.html.twig');
    }
}
