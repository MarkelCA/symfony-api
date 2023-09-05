<?php
namespace ModuleA\SubmoduleA\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SubmoduleAController extends AbstractController {
    public function __invoke() : Response {
        return $this->json(['hello' => 'Submodule A']);
    }
}
