<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $data = [
            [
                "img" => 'assets/images/photography.png',
                "list" => [
                    "Drone Photography",
                    "Interiors",
                    "Exteriors / Architectural"
                ],
                "title" => "Photography",
                "desc" => "Every photograph we produce finds the beauty in your property while serving as a profitable asset."
            ],
            [
                "img" => 'assets/images/vs.png',
                "list" => [],
                "title" => "Virtual Staging",
                "desc" => "Our staging will help you sell the potential of your space.\nWe can work off of our own photography or photos you provide."
            ],
            [
                "img" => 'assets/images/rendering.png',
                "list" => [
                    "Interiors",
                    "Exteriors"
                ],
                "title" => "Renderings",
                "desc" => "Renderings are the gold standard in pre-construction marketing."
            ],
            [
                "img" => 'assets/images/interactive-tour.png',
                "list" => [
                    "Matterport",
                    "Video Walkthroughs"
                ],
                "title" => "Interactive Tours",
                "desc" => "Give your audience the ability to explore your property without requiring in-person travel."
            ],
            [
                "img" => 'assets/images/floor-plan.png',
                "list" => [
                    "On-site Measure",
                    '2D Floor Plans',
                    "3D Floor Plans"
                ],
                "title" => "Floor Plans",
                "desc" => "We produce laser-precise floor plans faster than any other service."
            ],
            [
                "img" => 'assets/images/video.png',
                "list" => [
                    "Drone Cinematography",
                    'Interiors',
                    "Exteriors / Architectural"
                ],
                "title" => "Floor Plans",
                "desc" => "Video content has higher engagement and will help your property stand out online."
            ]
        ];

        return $this->render('home_page.html.twig', [
            'data' => $data
        ]);

    }

}