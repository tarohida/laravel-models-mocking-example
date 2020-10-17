<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleModelUse extends Model
{
    use HasFactory;

    public static function method_to_be_tested()
    {
	    return ExampleModel::method_do_not_exists();
    }
}
