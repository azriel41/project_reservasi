<?php

namespace App\models\catalog;

use Illuminate\Database\Eloquent\Model;

class d_room_book extends Model
{
    protected $table = 'd_room_book';
    protected $primaryKey = 'drb_id';
    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'drb_id',
                            'drb_kode',
                            'drb_name',
                            'drb_desc',
                            'drb_desc_short',
                            'drb_price',
                            'drb_tax',
                            'drb_additional',
                            'drb_serve',
                            'drb_payment',
                            'drb_created_at',
                            'drb_updated_at'
                          ];

    public function d_room_book_guest(){
        return $this->hasMany('App\models\room_book\d_room_book_guest', 'crf_id', 'cr_id');
    }
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    } 

}