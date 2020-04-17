<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;


class UploadController extends Controller
{
    public function upload(Request $request) {
        return ( new TesseractOCR())
            ->lang('slk')
            ->imageData($request->imageData, $request->size)
            ->run();
    }
}
