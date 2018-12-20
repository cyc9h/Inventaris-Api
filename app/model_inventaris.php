<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class model_inventaris extends Model
{
    protected $appends = ['gambar_url'];

    public function getGambarUrlAttribute(){
    	return url(Storage::url($this->foto));
    }
}
