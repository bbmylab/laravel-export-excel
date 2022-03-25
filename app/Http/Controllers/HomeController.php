<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use Maatwebsite\Excel\Facades\Excel;

use App\Exports\InvoicesExport2;

class HomeController extends Controller
{
    public function index() {
    }

    public function export() {
        return Excel::download(new InvoicesExport2, 'invoices.xlsx');
    }

}
