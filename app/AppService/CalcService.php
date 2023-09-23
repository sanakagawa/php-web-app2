<?php

namespace App\AppService;

use App\Domain\Model\Add;
use App\Domain\Model\ExternalLogger;

class CalcService
{
    private ExternalLogger $logger;

    public function __construct(ExternalLogger $logger)
    {
        $this->logger = $logger;
    }

    public function add(int $x, int $y): int
    {
        $calc = new Add();
        $this->logger->log("$x + $y" . " add called.");
        return $calc->calculator($x, $y);
    }
}
