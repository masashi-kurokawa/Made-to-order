<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Test extends Model
{
    protected $table = 'tests';

    public function getTestUnscored(int $test_id)
    {
        return Test::find($test_id);
    }

}
