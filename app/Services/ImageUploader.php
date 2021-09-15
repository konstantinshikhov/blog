<?php

namespace App\Services;


final class ImageUploader
{

    /**
     * @param $image
     * @param string $destinationPath
     * @return string
     */
    public function upload($image,$destinationPath = 'images/')
    {
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);

        return $profileImage;
    }
}
