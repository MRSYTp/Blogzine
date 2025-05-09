<?php

namespace App\Services;

use Intervention\Image\Laravel\Facades\Image;

class FileUploadService
{
    private array $thumbnailDimension = [
        'small' => [300, 225],
        'medium' => [500, 500],
        'large' => [1000, 750],
    ];


    public function __construct()
    {
        $baseDirectory = public_path('uploads');
        if (!is_dir($baseDirectory)) {
            mkdir($baseDirectory, 0755, true);
        }
        $subDirectories = [
            'avatars',
            'thumbnails/small',
            'thumbnails/medium',
            'thumbnails/large',
            'file_manager'
        ];
        foreach ($subDirectories as $directory) {
            $fullDirectory = $baseDirectory . '/' . $directory;
            if (!is_dir($fullDirectory)) {
                mkdir($fullDirectory, 0755, true);
            }
        }
    }

    public function fileUpload($file, $avatar = false, $thumbnail = false, $fileManager = false)
    {
        $processMethods = [
            $avatar => 'processAvatar',
            $thumbnail => 'processThumbnail',
            $fileManager => 'processFileManager',
        ];


        foreach ($processMethods as $condition => $method) {
            if ($condition) {
                return $this->$method($file);
            }
        }
        return false;
    }

    public function processThumbnail($file): array
    {
        $names = [];
        foreach ($this->thumbnailDimension as $size => $dimensions) {
            $image = $this->resize($file, $dimensions[0], $dimensions[1]);
            $image = $this->addWaterMark($image);
            //$image->save(public_path().'/thumbnails/t.jpg');
            $names["thumbnail_{$size}"] = $this->upload($file, $image, $size);
        }
        return $names;
    }

    private function resize($file, $width, $height)
    {
        $image = Image::read($file);
        $originalWidth = $image->width();
        $originalHeight = $image->height();
        $aspectRatio = $originalWidth / $originalHeight;
        if ($width === $height) {
            return $image->cover($width, $height, 'center');
        }
        if ($aspectRatio > ($width / $height)) {
            $newWidth = $width;
            $newHeight = intval($width / $aspectRatio);
        } else {
            $newHeight = $height;
            $newWidth = intval($newHeight * $aspectRatio);
        }
        return $image->resize($newWidth, $newHeight, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

    }

    private function addWaterMark($image): \Intervention\Image\Interfaces\ImageInterface
    {
        $watermarkPath = public_path('watermark/logo.png');
        if (file_exists($watermarkPath)) {
            $image = Image::read($image);
            $image->place($watermarkPath, 'bottom-left', 5, 5);
        } else {
            $image = Image::read($image);
        }
        return $image;
    }

    private function upload($file, $image, $type): string
    {
        $imageOriginalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $imageExtenstion = $file->getClientOriginalExtension();
        $newFileName = $imageOriginalName . '-' . uniqid() . '-' . $type . '.' . $imageExtenstion;
        $findUploadPath = $this->findUploadPath($type);
        $uploadPath = $findUploadPath . $newFileName;
        $image->save($uploadPath);
        return $newFileName;
    }

    private function findUploadPath($type): string
    {
        return match ($type) {
            'avatars' => "uploads/{$type}/",
            'small', 'medium', 'large' => "uploads/thumbnails/{$type}/",
            default => "uploads/file_manager/{$type}/",
        };
    }
}
