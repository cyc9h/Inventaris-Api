<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_inventaris extends Model
{
    protected $appends = ['gambar_url'];

    public function getGambarUrlAttribute(){
    	return url(Storage::url($this->foto));
    }
}
