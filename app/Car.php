<?php

namespace App;
use \Esensi\Model\Model;
class Car extends Model
{ 
protected $rules = [
        'make' => ['required'],
        'model' => ['required'],
    ];
}
