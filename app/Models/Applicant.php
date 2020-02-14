<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function getRecruit(){
        return Applicant::where('selection_status', 0)->get();
    }
}
