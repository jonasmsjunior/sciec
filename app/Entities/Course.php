<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Course extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome','descricao','status','telefone','id_instutions'];

    protected $hidden = ['id_instutions','created_at','updated_at'];

    public function Activities(){
        return $this->hasMany(Activity::class);
    }
    public function Eventies(){
        return $this->belongsToMany(Event::class,'course_events','id_cursos','id_eventos');
    }

}
