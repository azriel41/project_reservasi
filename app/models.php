<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\models\catalog\c_room;
use App\models\catalog\c_room_features;
use App\models\catalog\c_room_image;
use App\models\master\m_type_room;
use App\models\master\m_features;


class models extends Model
{

    public function c_room()
    {
        $c_room = new c_room();

        return $c_room;
    }
    public function c_room_features()
    {
        $c_room_features = new c_room_features();

        return $c_room_features;
    }
    public function m_type_room()
    {
        $m_type_room = new m_type_room();

        return $m_type_room;
    }
    public function m_features()
    {
        $m_features = new m_features();

        return $m_features;
    }

}
