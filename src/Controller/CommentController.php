<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */

    public function commentVote($id, $direction, LoggerInterface $logger )
    {
        //TODO: use id to query database

        if ($direction === 'up') {
            $logger->info('Voting up!');
            $currentVoteCount = rand(7,100);
        } else {
            $logger->info('Voting down!');
            $currentVoteCount = rand(0,5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}