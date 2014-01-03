<?php
/*
 * Licenca
 * */
namespace core\manifest;
use core\OGed;
use core\stream\file\JSon;
use core\exception\IOException;

class Manifest extends OGed
{
    /**
     * faz leitura do manifesto do modulo informado
     *
     * @param string $module
     * @return Configuration
     * @throws IOException
     * */
    public function module ($module)
    {
    }

    /**
     * faz a leitura do manifest informado
     *
     * @param string $manifest
     * @return Configuration
     * @throws IOException
     * */
    public function read ($manifest)
    {
        /* verifica se o arquiov informado existe */
        IOException::throwsIfNull(
            JSon::has($manifest),
            self::T_MANIFEST_UNVALIABLE
        );

        return ManifestProperty::factory(
            JSon::reader($manifest)
        );
    }
}