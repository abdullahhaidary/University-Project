<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriminalPicture extends Model
{
    use HasFactory;
    protected $table = 'criminal_pictures';

    public function criminal(){
        return $this->belongsTo(criminal::class,'criminal_id');
    }
}
