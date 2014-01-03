<?php
/*
 * Licenca
 * */
namespace core;
use core\manifest\Manifest;

class OGed
{
    /**
     * referencia para objeto de manipulacao de manifesto
     *
     * @var Manifesto
     * */
    public $manifest;

    public function __construct ()
    {
        $this->manifest = Manifest::factory();
    }
}