<?php

namespace App\Models;

use App\GeneratedModels\DepartmentsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMembersModel extends Model
{
    use HasFactory;
    protected $table = "team_members";
    protected $casts = [
   ];


    public function getImageAttribute(){
        $arr["alt"] = $this->alt_image;
        $arr["image"] = env("DATA_URL")."/team_members_images/".$this->id.".".$this->extension_image;
        $arr["thumb"] = env("DATA_URL")."/team_members_images_500_500/".$this->id.".jpg";
        return $arr;
    }
public function department(){
    return $this->belongsTo(DepartmentsModel::class,'department_id');
}
}