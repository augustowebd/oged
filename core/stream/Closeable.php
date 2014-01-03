<?php
/*
 * Licenca
 * */
namespace core\stream;

Interface Closeable
{
    /**
     * @throws IOException
     * */
    public function close ();
}