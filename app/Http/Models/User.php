<?php
/**
 * Created by PhpStorm.
 * User: lester
 * Date: 2018/5/22 14:45
 * Desc:
 */

namespace App\Http\Models;

use Illuminate\Database\Capsule\Manager as DB;

class User
{
    public function __construct()
    {

    }

    public function list(){
        return DB::table('user')
            ->get();
    }
}