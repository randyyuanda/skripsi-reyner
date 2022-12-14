<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    protected $primaryKey = 'document_id';
    protected $table = "document";
    protected $fillable = [
        'document_name',
        'directory',
        'booking_id',
    ];
}
