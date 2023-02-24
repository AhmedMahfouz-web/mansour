<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "project_name",
        "brochure",
        "sepcifications",
        "video",
        "location_id",
        "unti_descreption",
        "status"
    ];

    protected function location(): HasOne 
    {
        return $this->hasOne(Location::class, 'location_id');
    }
}
