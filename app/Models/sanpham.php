<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $primaryKey = 'masp';
    public function hienGiaSP()
    {
        return number_format($this->giasp, 0, ',', '.') . ' VND';
    }

    public function scopeCoTheBanSeThich($query)
    {
        return ($query->inRandomOrder()->take(4));
    }
}
