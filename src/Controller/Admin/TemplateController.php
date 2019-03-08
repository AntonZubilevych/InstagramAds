<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\Template;
use App\Form\TemplateType;
use App\Repository\TemplateRepository;
use App\Services\TemplateServices\TemplateBuilder;
use App\Services\TemplateServices\TemplateMapper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class TemplateController extends AbstractController
{
    private $manager;
    private $repository;

    public function __construct(EntityManagerInterface $manager , TemplateRepository $repository )
    {
        $this->manager = $manager;
        $this->repository = $repository;
    }

    public function index()
    {

        return $this->render('template/index.html.twig', [
            'templates' => $this->repository->findAllJoined(),
        ]);
    }

    public function add(Product $product , TemplateBuilder $builder )
    {
        $builder->init($product);

        return $this->redirectToRoute('admin_template');
    }

    public function edit(Template $template , Request $request , TemplateBuilder $builder, TemplateMapper $mapper):Response
    {
        $form = $this->createForm(TemplateType::class , $mapper->fromEntityToDto($template));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $builder->edit($template , $form->getData());
            return $this->redirectToRoute('admin_template');
        }

        return $this->render('template/add.html.twig', [
            'id' => $template->getId(),
            'form' => $form->createView()
        ]);
    }

    public function more(Template $template)
    {

        return $this->render('template/settings.html.twig', [
            'id' => $template->getId(),
            'comments' => $template->getComments(),
            'descriptions' => $template->getDescriptions(),
            'infos' => $template->getInfos()
        ]);
    }

    public function delete(Template $template ,  Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$template->getId(), $request->request->get('_token'))) {
            $this->manager->remove($template);
            $this->manager->flush();
        }

        return $this->redirectToRoute('admin_template');
    }

}
