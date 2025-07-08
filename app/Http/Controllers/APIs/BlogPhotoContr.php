<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\BlogPhoto;
use Illuminate\Support\Facades\Response;

class BlogPhotoContr extends Controller
{
    public function show_photo($id)
    {
        $blog_photo = BlogPhoto::where('id', $id)->first();

        if (!$blog_photo) {
            return response()->json(['error' => 'Fotografie nebyla nalezena.'], 404);
        }

        if (ob_get_level()) {
            ob_end_clean(); // Vyčistí buffer, aby nepoškodil obrázek
        }

        $fileData = $blog_photo->file;
        $fileName = $blog_photo->original_name;

        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $mimeType = $this->getMimeType($extension);

        return Response::make($fileData, 200, [
            'Content-Type' => $mimeType,
            'Content-Length' => strlen($fileData),
            'Content-Disposition' => 'inline; filename="' . $fileName . '"'
        ]);
    }

    private function getMimeType($extension)
    {
        $mimeTypes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
        ];

        return $mimeTypes[strtolower($extension)] ?? 'application/octet-stream';
    }

    /*
    public function show_photo($id)
    {
        $blog_photo = BlogPhoto::where('id', $id)->first();

        return $this->mainLogic($blog_photo);
    }
    private function mainLogic($productFile)
    {
        if (!$productFile) {
            return response()->json(['error' => 'Fotografie nebyla nenalezena.'], 404);
        }

        $fileData = $productFile->file;
        $fileName = $productFile->original_name;

        // Detect the mime type from the file extension
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $mimeType = $this->getMimeType($extension);

        return Response::make($fileData, 200, [
            'Content-Type' => $mimeType,
            'Content-Length' => strlen($fileData),
            'Content-Disposition' => 'inline; filename="' . $fileName . '"'
        ]);

        $fileData = $productFile->file;
        $fileName = $productFile->original_name;
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $mimeType = $this->getMimeType($extension);

        return response()->stream(function () use ($fileData) {
            echo $fileData;
        }, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            'Content-Length' => strlen($fileData),
        ]);

//        return response()->json([
//            'type' => gettype($fileData),
//            'length' => strlen($fileData),
//            'mime' => $mimeType,
//            'preview' => base64_encode(substr($fileData, 0, 10))
//        ]);
    }

    private function getMimeType($extension)
    {
        $mimeTypes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
        ];

        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }*/
}
