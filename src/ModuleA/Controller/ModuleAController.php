<?php
namespace ModuleA\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ModuleAController extends AbstractController {
    public function __invoke() : Response {
        return $this->json(['hello' => 'Module A']);
    }

    public function list() : Response {
        return $this->json([
            'foo' => 'bar',
            'fizz' => 'buzz'
        ]);
    }
}
