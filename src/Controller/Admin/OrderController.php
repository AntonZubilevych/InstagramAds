<?php

namespace App\Controller\Admin;



use App\Entity\Order;
use App\Entity\Product;
use App\Entity\Status;
use App\Form\OrderFilterFormType;
use App\Form\OrderType;
use App\Form\StatusType;
use App\Repository\OrderRepository;
use App\Services\OrderServices\OrderBuilder;
use App\Services\OrderServices\OrderMapper;
use App\Services\ProductServices\ProductBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    private $manager;
    private $repository;

    public function __construct(EntityManagerInterface $manager , OrderRepository $repository )
    {
        $this->manager = $manager;
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $form =  $this->createForm(OrderFilterFormType::class);
        $form->handleRequest($request);
        $dto = null;

        if($form->isSubmitted() && $form->isValid()){
            $dto =  $form->getData();
        }



        return $this->render('order/index.html.twig', [
            'orders' =>  $this->repository->findAllJoined($dto),
            'form' => $form->createView()
        ]);
    }


    public function add(Request $request ,OrderBuilder $builder)
    {
        $form = $this->createForm(OrderType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $builder->setManually($form->getData());
            return $this->redirectToRoute('admin_order');
        }

        return $this->render('order/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function edit(Order $order , Request $request , OrderBuilder $builder, OrderMapper $mapper):Response
    {
        $form = $this->createForm(OrderType::class , $mapper->fromEntityToDto($order));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $builder->edit($order , $form->getData());
            return $this->redirectToRoute('admin_order');
        }

        return $this->render('order/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function delete(Order $order ,  Request $request)
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $this->manager->remove($order);
            $this->manager->flush();
        }

        return $this->redirectToRoute('admin_order');
    }

    public function show(Order $order):Response
    {
        return $this->render('order/show.html.twig', [
            'order' => $order
        ]);
    }
}
