<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Buku;
use App\Models\Kategori;


class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    
    protected $fillable = [
        'judul', 'pengarang', 'kategori_id', 'create_at', 'create_by', 'update_at', 'update_by'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}

