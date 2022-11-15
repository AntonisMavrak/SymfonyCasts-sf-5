<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @return Response
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        return new Response(sprintf(
            'Future page to show the question "%s"!',
            ucwords(str_replace('-',' ', $slug))
        ));
    }
}