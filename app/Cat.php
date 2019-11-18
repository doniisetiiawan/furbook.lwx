<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
//    use SoftDeletes;

    protected $table    = 'cats';
    protected $fillable = ['name', 'date_of_birth', 'breed_id'];

//    protected $dates    = ['deleted_at'];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function scopeOfBreed($query, $breedId)
    {
        return $query->where('breed_id', '=', $breedId);
    }
}
