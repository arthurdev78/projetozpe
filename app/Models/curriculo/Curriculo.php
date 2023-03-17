<?php

namespace App\Models\Curriculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Curriculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'curriculos';
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'confirmado'
    ];
    protected $appends = ['full_name'];

    protected function fullName (): Attribute
    {
        return new Attribute(
            get: fn ()  => $this->first_name . '' . $this->last_name,
        ); 


      
    } 
    protected function firstName (): Attribute
    {    return new Attribute(
            get: fn ( $value)  => ucfirst($value),
        ); 


      
    }
    protected function LastName (): Attribute
    {    return new Attribute(
            get: fn ( $value)  => ucfirst($value),
        ); 

}
 

}
