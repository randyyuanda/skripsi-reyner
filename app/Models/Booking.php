<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';
    protected $table = "booking";
    protected $fillable = [
        'booking_id',
        'pelabuhan_muat',
        'pelabuhan_tujuan',
        'final_destination',
        'vessel_name',
        'date_shipment',
        'container_no',
        'consignee',
        'shipper',
        'notify_party',
        'shipping_marks',
        'description_goods',
        'total_nett_weight',
        'total_gross_weight',
        'total_measurement',
        'users_id',
    ];
    public function document()
    {
        return $this->hasMany('App\Models\Document', 'booking_id', 'booking_id');
    }
}
