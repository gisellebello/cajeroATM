<?php

namespace App\Http\Controllers;


use App\Atm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtmController extends Controller
{
    /**
     * Show principal form
     */
    public function indexAtm()
    {
        return view('atm.principal');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    Public function processAtm(Request $request)
    {

        $validator = $this->validate($request, [
            'amount' => 'required',
        ]);
        $amount = $request->amount;
        $result = $this->calculateBillsNumber($amount);

        return view('atm.detail',['hundred' => $result['100'],'fifty' => $result['50'],'twenty' => $result['20'],'ten' => $result['10']]);
    }

    private function calculateBillsNumber($amount)
    {
        $left =0;

        $hundredbills = (int)($amount / 100);
        $left = $amount % 100;
        $result['100'] = $hundredbills;

        $fiftybills = (int)($left / 50);
        $left = $left % 50;
        $result['50'] = $fiftybills;

        $twentybills = (int)($left / 20);
        $left = $left % 20;
        $result['20'] = $twentybills;

        $tenbills = (int)($left / 10);
        $left = $left % 10;
        $result['10'] = $tenbills;
        return $result;


    }
}