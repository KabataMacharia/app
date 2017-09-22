<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpesa extends Model
{
    //conversation_id  transaction_id mpesa_transaction_id amount status created_date
    protected $fillable = ['conversation_id','transaction_id','mpesa_transaction_id','amount','status','created_date'];
}
