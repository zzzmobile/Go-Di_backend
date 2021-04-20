<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  

    public function getRememberTokenName()
    {
        return null; // not supported
    }

    /**
    * Overrides the method to ignore the remember token.
    */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }

    public function getImageAttribute($value){
        if(is_null($value)){
            return "";
        }

        if($this->login_with == '1'){
            if(substr($value, 0, 4) === "http"){
                return $value;
            }
            return url('storage/user_pics/' . $value);
        }
        else{
            return $value;
        }
    }

  
}

