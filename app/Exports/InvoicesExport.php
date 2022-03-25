<?php
namespace App\Exports;
class InvoicesExport implements \Maatwebsite\Excel\Concerns\FromCollection
{
    public function collection()
    {
        return factory('App\User', 10)->make();
    }

    public function view(): View
    {

        $export = DB::table('product')
        ->get();


        return view('exports.invoices', [
            'data' => $export
        ]);
    }

}