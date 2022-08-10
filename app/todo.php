<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // Btn get and Attribute is variable name Body
    public function getTitleAttribute($value) 
    {
        return ucfirst($value); //Accessor ** Set first letter to capital from databade
    }

    public function setBodyAttribute($value)
    {
        return $this->attributes['body'] = ucfirst($value); //Mutator ** Set first letter to CAPITAL in insering string to database
    }
}
