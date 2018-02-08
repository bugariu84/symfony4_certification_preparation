<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 07.02.2018
 * Time: 20:28
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     *
     * @return Response
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     *
     * @return Response
     */
    public function show($slug)
    {
        $comments = [
            'This is the first sueper mega unispired comemment',
            'Yuhuu, let there be...guess what, COMMENTS!!!',
            'Hey guys, can i comment to by asking this question inside a comment?.. HA!! I just did it and nothing can stop me',
            'Boring...yesss yuhuu meeh',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucfirst(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'comments' => $comments
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     *
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger)
    {
        $logger->info('message has been hearted');
        return new JsonResponse(['hearts' => rand(5, 24)]);
    }
}