<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $connection = 'mysql';
    public $primaryKey = 'id_bill_inquiry';
    
    protected $table = 'bill_inquiry';
    protected $fillable = ['account_no', 'name', 'amount_before_due', 'due_date', 
    'amount_after_due', 'route_code', 'reading_date', 'bill_month', 'kwh', 'arrears', 'penalty', 
    'current_power_bill', 'discount', 'bill_status', 'current_penalty'];
    
}
