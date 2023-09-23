<?php

namespace App\Http\Controllers;

use App\AppService\CalcService;
use Illuminate\Http\Request;

class Calculator extends Controller
{

    private CalcService $calcService;

    public function __construct(CalcService $calcService)
    {
        $this->calcService = $calcService;
    }

    public function add(Request $request): int
    {
        $x = $request->query('x', 0);
        $y = $request->query('y', 0);
        return $this->calcService->add($x, $y);
    }
}
