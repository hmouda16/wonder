<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        

        $questions =[
            [
                'id' => '1',
                'title' => 'je suis une super question',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque reprehenderit ratione eveniet iste quidem itaque deleniti esse corrupti, ipsum recusandae at omnis quibusdam vero incidunt officiis odio, excepturi tempore natus.',
                'rating' => 20,
                'author' => [
                    'name'=>'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/men/1.jpg'
                ],
                'nbrOfResponse' => 15

            ],
            [
                'id' => '2',
                'title' => 'je suis une super question',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque reprehenderit ratione eveniet iste quidem itaque deleniti esse corrupti, ipsum recusandae at omnis quibusdam vero incidunt officiis odio, excepturi tempore natus.',
                'rating' => 0,
                'author' => [
                    'name'=>'Alex Miro',
                    'avatar' => 'https://randomuser.me/api/portraits/men/30.jpg'
                ],
                'nbrOfResponse' => 20

            ],
            [
                'id' => '3',
                'title' => 'je suis une super question',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque reprehenderit ratione eveniet iste quidem itaque deleniti esse corrupti, ipsum recusandae at omnis quibusdam vero incidunt officiis odio, excepturi tempore natus.',
                'rating' => -15,
                'author' => [
                    'name'=>'Dan Delarue',
                    'avatar' => 'https://randomuser.me/api/portraits/men/10.jpg'
                ],
                'nbrOfResponse' => 30

            ],

        ];
   
        return $this->render('home/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
