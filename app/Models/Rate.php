<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $connection = 'mysql_website';

    public $primaryKey = 'PK_Rates';
    protected $table = 'rates';
    protected $fillable = ['month', 'year', 'residential', 'low_voltage', 'high_voltage', 'generation'];
    
    public $timestamps = true;
}
