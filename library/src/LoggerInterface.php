<?php

namespace Bom\library;

interface LoggerInterface
{
    public function write();

    public function format();
}