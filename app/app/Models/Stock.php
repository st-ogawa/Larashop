<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [
        'id'
    ];
    public function productDetails($id)
    {
        $stocks= $this->where('id',$id)->get();

        return $stocks;
    }


}
