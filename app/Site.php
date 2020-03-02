<?php

namespace jls;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['id','titulo','img','descricao','link'];
}
