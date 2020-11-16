<?php

namespace App\Controller;

use App\Entity\Tirage;
use App\Form\TirageType;
use App\Repository\TirageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tirage")
 */
class TirageController extends AbstractController
{
    /**
     * @Route("/", name="tirage_index", methods={"GET"})
     */
    public function index(TirageRepository $tirageRepository): Response
    {
        return $this->render('tirage/index.html.twig', [
            'tirages' => $tirageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tirage_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tirage = new Tirage();
        $form = $this->createForm(TirageType::class, $tirage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tirage);
            $entityManager->flush();

            return $this->redirectToRoute('tirage_index');
        }

        return $this->render('tirage/new.html.twig', [
            'tirage' => $tirage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tirage_show", methods={"GET"})
     */
    public function show(Tirage $tirage): Response
    {
        return $this->render('tirage/show.html.twig', [
            'tirage' => $tirage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tirage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tirage $tirage): Response
    {
        $form = $this->createForm(TirageType::class, $tirage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tirage_index');
        }

        return $this->render('tirage/edit.html.twig', [
            'tirage' => $tirage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tirage_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tirage $tirage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tirage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tirage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tirage_index');
    }
}
