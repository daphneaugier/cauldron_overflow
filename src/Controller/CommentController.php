<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */

    public function commentVote($id, $direction)
    {
        //TODO: use id to query database

        if ($direction === 'up') {
            $currentVoteCount = rand(7,100);
        } else {
            $currentVoteCount = rand(0,5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}