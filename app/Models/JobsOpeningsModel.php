<?php

namespace App\Models;

use App\GeneratedModels\CountriesCitiesModel;
use App\GeneratedModels\CountriesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsOpeningsModel extends Model
{
    use HasFactory;
    protected $table = "jobs_openings";
    protected $casts = [
        "job_details" => "array",
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('title', 'like', "%{$value}%")
        // dd($value);
        // ->orWhere('position', 'like', "%{$value}%")
        // ->orWhere('position', 'like', "%{$value}%")
        // ->orWhere('full_description', 'like', "%{$value}%")
        // ->orWhere('description_summary', 'like', "%{$value}%")
        ;

    }
    public function city()
    {
        return $this->belongsTo(CountriesCitiesModel::class, 'city_id');
    }
    public function country()
    {
        return $this->belongsTo(CountriesModel::class, 'country_id');
    }
}
