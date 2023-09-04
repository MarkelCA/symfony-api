<?php
namespace ModuleB\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private array $users = [
        '1' => [
            'name' => 'markelca'
        ]
    ];

    #[Route('/users', name: 'user_list')]
    public function list(): Response
    {
        return $this->json($this->users);
    }

    #[Route('/users/{id}', name: 'user')]
    public function user($id): Response
    {
        return $this->json($this->users[$id]);
    }
}
