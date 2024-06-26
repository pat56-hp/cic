<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typeevenement extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['libelle'];

    protected $searchableFields = ['*'];

    
}
