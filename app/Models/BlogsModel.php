<?php

namespace App\Models;

use App\GeneratedModels\CategoriesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsModel extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $casts = [
       "gallery" => "array",
   ];

    public function getImageAttribute(){
        $arr["alt"] = $this->alt_image;
        $arr["image"] = env("DATA_URL")."/blogs_images/".$this->id.".".$this->extension_image;
        $arr["thumb"] = env("DATA_URL")."/blogs_images_500_500/".$this->id.".jpg";
        return $arr;
    }

    public function getTopImageAttribute(){
        $arr["alt"] = $this->alt_top_image;
        $arr["image"] = env("DATA_URL")."/blog_details_image_top/".$this->id.".".$this->extension_top_image;
        $arr["thumb"] = env("DATA_URL")."/blog_details_image_top_500_500/".$this->id.".jpg";
        return $arr;
    }
    public function getVideoImageAttribute()
    {
        $arr["alt"] = $this->alt_Video_image;
        $arr["image"] = env("DATA_URL") . "/blog_video_image/" . $this->id . "." . $this->extension_Video_image;
        $arr["thumb"] = env("DATA_URL") . "/blog_video_image_500_500/" . $this->id . ".jpg";
        return $arr;
    }

    public function getGalleryAttribute($value)
    {
        
        
        return collect(json_decode($value))->map(function ($value) {
            return [
                "image" => env("APP_URL") . "/blog_gallery/" . $value,
                "thumb" => env("APP_URL") . "/blog_gallery/" . $value, "alt" => ""
            ];
        });
    }
    public function category(){
        return $this->belongsTo(CategoriesModel::class,'category_id');
    }

    // public function category(){

    //     return $this->belongsTo()
    // }

}
