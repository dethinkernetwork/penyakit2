<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Riwayat extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'nama',
        'hasil_diagnosa',
        'cf_max',
        'gejala_terpilih',
        'file_pdf',
        'user_id',
        'created_at',
        'updated_at'
    ];
    
    protected static $recordEvents = ['deleted'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
