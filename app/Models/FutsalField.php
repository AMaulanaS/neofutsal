<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutsalField extends Model
{
    use HasFactory;

    protected $table = 'futsal_fields';

    protected $fillable = ['field_type_id', 'price', 'width', 'height', 'is_available'];
}
