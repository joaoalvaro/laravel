<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'title', 'description', 'company', 'salary', 'city', 'email_contact', 'user_id'
    ];  
}
