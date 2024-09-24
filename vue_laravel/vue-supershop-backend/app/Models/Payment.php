<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function Purchase()
    {
        return $this->hasMany(Purchase::class);
    }
    public function sale() {
        return $this->hasMany(Sale::class);
    }
}
