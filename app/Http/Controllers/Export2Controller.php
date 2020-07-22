<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ExportDataTable;

class Export2Controller extends Controller
{
    public function index(ExportDataTable $dataTable)
    {
     return $dataTable->render('export2');
    }
}