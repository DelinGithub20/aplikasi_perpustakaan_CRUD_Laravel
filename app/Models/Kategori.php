<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
// use App\Models\Kategori;


// class Kategori extends Model
// {
//   protected $table = "kategori";
// }

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";

    protected $fillable = ['nama'];

    public function bukus()
{
    return $this->hasMany(Buku::class);
}

}

