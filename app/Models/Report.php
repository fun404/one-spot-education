<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'created_by', 'report_date',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}