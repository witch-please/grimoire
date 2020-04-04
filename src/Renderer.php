<?php

namespace DailyMoon;

use Twig\Environment;

class Renderer {

    /** @var Environment */
    private $twig;

    /** @var MoonPhaseRepository */
    private $repository;

    public function __construct(Environment $twig, MoonPhaseRepository $repository)
    {
        $this->twig = $twig;
        $this->repository = $repository;
    }

    public function render()
    {
        $moonPhase = $this->repository->find();

        echo $this->twig->render('index.twig', [
            'moonphase' => $moonPhase
        ]);        
    }
}