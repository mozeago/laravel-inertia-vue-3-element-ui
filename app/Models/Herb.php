<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'herb_name',
        'herb_description',
        'herb_used_for',
        'herb_common_location_found',
    ];
}
