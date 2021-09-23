<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        /*
        * // Using the Twig service directly
        * $html = $twigEnvironment->render('question/homepage.html.twig');
        * return new Response($html);
        */

        // Instead of the 2 above lines, could simply use the Twig service render()
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */

    public function show($slug)
    {
        $answers = [
            'Answer 1',
            'Answer 2',
            'Answer 3',
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-',' ', $slug)),
            'answers' => $answers,
            ]);
    }
}