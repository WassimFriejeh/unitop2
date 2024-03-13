<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $table = "job_applications";
    protected $casts = [];

    public $fillable = ['first_name', 'extension_attached_cv','last_name', 'email', 'phone_number','attached_cv' ,'position', 'message'];

    // public function getAttachedCvAttribute()
    // {
    //     $path = env("DATA_URL") . "/attached_cv/" . $this->id . "." . pathinfo($this->attached_cv, PATHINFO_EXTENSION);

    //     return [
    //         "alt" => null, // You might want to replace this with an appropriate value
    //         "file" => $path,
    //     ];
    // }
    public function getAttachedCvAttribute()
    {
        $path = env("DATA_URL") . "/attached_cv/" . $this->id . "." . $this->extension_attached_cv;

        return [
            "alt" => null,
            "file" => $path,
        ];
    }

}
