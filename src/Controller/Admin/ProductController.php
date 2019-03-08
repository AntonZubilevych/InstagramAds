<?php

namespace App\Controller\Admin;


use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Services\ProductServices\ProductBuilder;
use App\Services\ProductServices\ProductMapper;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProductController extends AbstractController
{
    private $manager;
    private $repository;

    public function __construct(EntityManagerInterface $manager , ProductRepository $repository )
    {
        $this->manager = $manager;
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->render('product/index.html.twig', [
            'products' =>  $this->repository->findAll(),
        ]);
    }

    public function add(Request $request , ProductBuilder $builder)
    {
        $form = $this->createForm(ProductType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $builder->set($form->getData());
            return $this->redirectToRoute('admin_product');
        }

        return $this->render('product/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function edit(Product $product , Request $request , ProductMapper $mapper ,  ProductBuilder $builder)
    {
        $form = $this->createForm(ProductType::class , $mapper->fromEntityToDto($product));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $builder->edit($product , $form->getData());
            return $this->redirectToRoute('admin_product');
        }

        return $this->render('product/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function delete(Product $product ,  Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $this->manager->remove($product);
            $this->manager->flush();
        }

        return $this->redirectToRoute('admin_product');
    }
}
