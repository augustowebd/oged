<?php
/*
 * Licenca
 * */
 namespace core\stream;
use core\OGed;

  abstract
     class TFile
   extends OGed
{
    /**
     * armazena o link para o arquivo
     *
     * @var resource
     * */
    protected $_resource;

    /**
     * armazena o caminho completo para o arquivo
     *
     * @var stirng
     * */
    protected $_filepath;

    /**
     * retorna true se o caminho informado for um arquivo
     *
     * @param string $filepath
     * @return boolean
     * */
    public function has (/* string */ $filepath)
    {
        return
        is_file($filepath);
    }

    /**
     * retorna true se o arquivo possui permissao de leitura
     *
     * @return boolean
     * */
    public function canRead ()
    {
    }

    /**
     * retorna true se o arquivo possui permissao de escrita
     *
     * @return boolean
     * */
    public function canWrite ()
    {
    }

    /**
     * cria arquivo temporario
     *
     * @param Directory $directory
     * @param string $prefix
     * @param string $suffix
     * @return TFile
     * */
    public function createTempFile
    (
        Directory $directory,
        /* string */ $prefix,
        /* string */ $suffix
    )
    {
    }
}