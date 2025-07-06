<?php

namespace App\Http\Controllers\APIs;

use App\Models\BlogPhoto;
use Illuminate\Support\Facades\Response;

class BlogPhotoContr
{
    public function show_photo($id)
    {

        $blog_photo = BlogPhoto::where('id', $id)->first();

        if (!$blog_photo) {
            return response()->json(['error' => 'Fotografie nebyla nenalezena.'], 404);
        }

        $fileData = $blog_photo->file;
        $fileName = $blog_photo->original_name;

        // Detect the mime type from the file extension
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $mimeType = $this->getMimeType($extension);

        return Response::make($fileData, 200, [
            'Content-Type' => $mimeType,
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
        ];

        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
