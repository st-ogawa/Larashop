<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class PoHistory extends Model
{

    protected $table = 'po_history';

    protected $fillable = [
        'user_id',
        'stock_id'
    ];

    public function stock()
    {
        return $this->belongsTo('\App\Models\Stock');
    }

    public function getData()
    {
        $user_id = Auth::id();
        $data = $this->where('user_id',$user_id)->with('stock')->get();

        return $data;
    }

}
