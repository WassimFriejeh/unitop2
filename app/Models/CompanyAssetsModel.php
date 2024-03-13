<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAssetsModel extends Model
{
    use HasFactory;
    protected $table = "company_assets";
    protected $casts = [];

    public function getPdfFileAttribute()
    {
        $arr["alt"] = $this->alt_pdf_file;
        $arr["file"] = env("DATA_URL") . "/asset_pdf_file/" . $this->id . "." . $this->extension_pdf_file;
        return $arr;
    }
}
