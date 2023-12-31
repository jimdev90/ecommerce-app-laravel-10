<?php

namespace App\Traits;

use File;
use Illuminate\Http\Request;

Trait ImageUploadTrait {

    public function uploadImage(Request $request, $inputName, $path)
    {

        if ($request->hasFile($inputName)){
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_'.uniqid().'.'.$ext;
            $image->move(public_path($path), $imageName);
            return $path.'/'.$imageName;
        }

    }

    public function updateImage(Request $request, $inputName, $path, $oldPath = null)
    {

        if ($request->hasFile($inputName)){
            if (File::exists(public_path($oldPath))){
                File::delete(public_path($oldPath));
            }
            return $this->uploadImage($request, $inputName, $path);
        }

    }

    public function deleteImage($path)
    {
        if (File::exists(public_path($path))){
            File::delete(public_path($path));
        }
    }
}
