<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Image;

class MediaController extends Controller
{
    /**
     * Process an image upload.
     *
     * @return string
     */
    // public function __invoke(): string
    // {
    //     $path = request()->image->store(sprintf('%s/%s', config('canvas.storage_path'), 'images'), [
    //         'disk'       => config('canvas.storage_disk'),
    //         'visibility' => 'public',
    //     ]);

    //     return Storage::disk(config('canvas.storage_disk'))->url($path);
    // }

    public function store(Request $request)
    {
        if($request->image) {
            //get filename with extension
            $filenamewithextension = $request->image->getClientOriginalName();
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
            //get file extension
            $extension = $request->image->getClientOriginalExtension();
    
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            //Upload File
            $request->image->storeAs('public/featured_images', $filenametostore);
            $request->image->storeAs('public/featured_images/thumbnail', $filenametostore);
            $request->image->storeAs('public/featured_images/sthumbnail', $filenametostore);
            
            //Resize image here
            $thumbnailpath = public_path('storage/featured_images/thumbnail/'.$filenametostore);
            $sthumbnailpath = public_path('storage/featured_images/sthumbnail/'.$filenametostore);

            $img = Image::make($thumbnailpath)->resize(739, 946, function($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($thumbnailpath);
            
            $width = $img->width();
            $height = $img->height();

            $simg = $img->crop($width, round($height / 3), 0, round($height / 3));

            $simg->save($sthumbnailpath);

            //Resize image here
            // $thumbnailpath = public_path('storage/featured_images/sthumbnail/'.$filenametostore);
            
            // $img = Image::make(public_path('storage/featured_images/thumbnail/'.$filenametostore));
            // $width = $img->width();
            // $height = $img->height();

            // $img = Image::make($thumbnailpath)->crop($width, $height / 3, 0, $height / 3);
            // $img->save($thumbnailpath);
    
            return '/storage/featured_images/' . $filenametostore;
        }
    }
}
