<?php

namespace App;
use File;
use Image;

class FeaturedImage
{
    
    public static function saveImageFromExternalURL( $image_url ) : string {
        $filepath = 'storage/featured_images/';
        $thumb_path = 'storage/featured_images/thumbnail/';
        $sthumb_path = 'storage/featured_images/sthumbnail/';

        if( !File::exists($filepath) ) {
            File::makeDirectory(public_path($filepath), 0777, true);
        }

        if( !File::exists($thumb_path) ) {
            File::makeDirectory(public_path($thumb_path), 0777, true);
        }

        if( !File::exists($sthumb_path) ) {
            File::makeDirectory(public_path($sthumb_path), 0777, true);
        }

        parse_str ( parse_url ( $image_url , PHP_URL_QUERY ) , $params );

        $filename = time() . '.' . $params['fm'];

        $img = Image::make($image_url);
        $img->save(public_path($filepath . $filename));

        $thimg = $img->resize(739, 946, function($constraint) {
            $constraint->aspectRatio();
        });

        $thimg->save(public_path($thumb_path . $filename));

        $width = $thimg->width();
        $height = $thimg->height();

        $sthimg = $thimg->crop($width, 313);

        $sthimg->save(public_path($sthumb_path . $filename));

        return '/' . $filepath . $filename;
    }
}
