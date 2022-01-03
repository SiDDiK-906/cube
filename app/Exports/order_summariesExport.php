<?php

namespace App\Exports;

use App\Models\order_summaries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class order_summariesExport implements FromView
{
    // public function collection()
    // {
    //     return order_summaries::all();
    // }
    public function view(): View
    {
        return view('excel.invoice', [
            'invoices' => order_summaries::all()
        ]);
    }
}
