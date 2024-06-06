<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'slug'];

    public static function generateSlug($title){
        $slug = Str::slug($title, '-'); 
        $count = 1; 
        while(Project::where('slug', $slug)->first()){
            $slug = Str::slug($title.'-'.$count, '-');
            $count++; 
        }
        return $slug; 
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
