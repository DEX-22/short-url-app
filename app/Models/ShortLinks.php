<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLinks extends Model
{
    use HasFactory;
    public $table = "short_links";

    public $fillable= ["origin_url","hashed","short_name","created_at"];
}
