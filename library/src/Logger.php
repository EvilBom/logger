<?php

namespace Bom\library\src;

use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    protected $path = '/home/bom/php/logger/files/';
    protected $level = '1';

    public function __constract($object)
    {

    }

    public function write($file,$context)
    {
        $context = $this->format($context,';');
        file_put_contents($this->path.$file, $context,FILE_APPEND);
    }

    public function format($context,$format)
    {
        $date = date(DATE_ATOM);
        return $date.$format.$this->level.$format.$context.$format."\n";
    }

    public function emergency($message, array $context = array())
    {
        // TODO: Implement emergency() method.
    }

    public function alert($message, array $context = array())
    {
        // TODO: Implement alert() method.
    }

    public function critical($message, array $context = array())
    {
        // TODO: Implement critical() method.
    }

    public function error($message, array $context = array())
    {
        // TODO: Implement error() method.
    }

    public function warning($message, array $context = array())
    {
        // TODO: Implement warning() method.
    }

    public function notice($message, array $context = array())
    {
        // TODO: Implement notice() method.
    }

    public function info($message, array $context = array())
    {
        // TODO: Implement info() method.
    }

    public function debug($message, array $context = array())
    {
        // TODO: Implement debug() method.
    }

    public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}