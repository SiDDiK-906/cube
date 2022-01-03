<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_summaries extends Model
{
    use HasFactory;
    public function relationTobilling_details(){
        return $this->belongsTo(billing_details::class, 'id', 'order_summary_id');
    }
    protected $fillable=[
        'delivary_status',
    ];
}
