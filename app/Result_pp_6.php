<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_pp_6 extends Model
{
    public function student() {
        return $this->belongsTo(Student::class);
    }
}