<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contact extends Model
{

      protected $table = 'contacts';
       
      public function user() {

        return $this->belongsTo(User::class);
    }

}
