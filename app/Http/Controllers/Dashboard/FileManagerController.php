<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\fileManager\FileManagerRequest;
use Illuminate\Contracts\View\View;

class FileManagerController extends Controller
{
    public function index(): View
    {
        return view('dashboard.file-manager');
    }


    public function store(FileManagerRequest $request) {

        $files = $request->validated();


        dd($files);
    }
}
