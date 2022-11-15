<?php

namespace App\Controller;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @param $id
     * @param string $direction
     * @param LoggerInterface $logger
     * @return Response
     * @throws Exception
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, string $direction, LoggerInterface $logger): Response
    {
        if ($direction === 'up') {
            $currentVoteCount = random_int(7,100);
            $logger->info('Voting up!');
        } else {
            $currentVoteCount = random_int(0,5);
            $logger->info('Voting down!');
        }

        return new JsonResponse(['votes' => $currentVoteCount]);
    }
}