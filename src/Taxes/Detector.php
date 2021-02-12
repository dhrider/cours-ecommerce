<?php


namespace App\Taxes;


class Detector
{
    protected $tva;

    public function __construct(float $tva)
    {
        $this->tva = $tva;
    }

    public function detect(float $prix) : bool
    {
        if($prix > $this->tva) {
            return true;
        }

        return false;
    }
}