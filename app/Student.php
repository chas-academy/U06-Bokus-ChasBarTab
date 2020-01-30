<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
<<<<<<< HEAD
    protected $table = 'students';


    // Method to set the relationship between Students and Orders
    // (one to many) One Student can have multiple orders
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
   
=======
    protected $table ="students";
    public $timestamps = false;
>>>>>>> f074e952f72679cdea7aaad5a27d54d1966f98a9
}
