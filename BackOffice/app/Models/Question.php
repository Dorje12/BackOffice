<?php

namespace App\Models;
use App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\QuestionController;



class Question extends Model
{
    use HasFactory;
    public function subject(){
    return $this->belongsTo(Subject::class);
    }
}
