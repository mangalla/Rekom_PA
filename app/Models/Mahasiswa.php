<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PaScore;

class Mahasiswa extends Model {
    protected $guarded = [];

    public function paScore() {
        return $this->hasOne(PaScore::class);
    }
}
