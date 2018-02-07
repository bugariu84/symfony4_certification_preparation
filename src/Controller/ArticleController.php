<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 07.02.2018
 * Time: 20:28
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('Omy i adore the event');
    }

    /**
     * @Route("/news/{slug}")
     *
     * @return Response
     */
    public function show($slug)
    {
        return $this->render('article/show.html.twig', [
            'title' => ucfirst(str_replace('-', ' ', $slug))
        ]);
    }
}