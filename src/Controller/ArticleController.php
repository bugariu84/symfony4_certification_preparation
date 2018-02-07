<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 07.02.2018
 * Time: 20:28
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response(sprintf('Future article to show on a space o my god this guy is fo funny and i love the event. PS: %s', $slug));
    }
}