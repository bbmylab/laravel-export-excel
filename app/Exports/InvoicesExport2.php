<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExport2 implements FromView
{
    public function view(): View
    {
        $export = DB::table('product')
        ->select('product.product_code','product.product_name') 
        ->where('product.status' ,'=', 'A') 
        ->get();


        return view('exports.invoices', [
            'data' => $export
        ]);
    }
}