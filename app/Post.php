<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content', 'description', 'category_id', 'image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('image')){
            if ($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('image')->store("images/$folder");
        }
        return null;
    }

    public function getImage(){
        if (!$this->image) {
            return asset("no-image.png");
        }
        return asset("uploads/{$this->image}");
    }

    public function scopeLike($query, $q)
    {
        return $query->where('title', 'LIKE', "%{$q}%");
    }
}
