<?php


namespace App\Http\Helpers;


use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

abstract class PostHelper
{
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

    public static function getImage($image){
        if (!$image) {
            return asset("no-image.png");
        }
        return asset("uploads/{$image}");
    }

    public static function getPostDate($postDate)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $postDate)->format('d F, Y');
    }

}
