<?php

namespace App\Domain\Model;

interface ExternalLogger
{
    public function log(string $message): void;
}
