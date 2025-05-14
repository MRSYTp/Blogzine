<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\fileManager\FileManagerRequest;
use App\Models\Dashboard\FileManager;
use App\Services\FileUploadService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FileManagerController extends Controller
{

    public function __construct(protected FileUploadService $fileUploadService) {}

    public function index(): View
    {
        return view('dashboard.file-manager');
    }


    public function store(FileManagerRequest $request,FileUploadService $fileUploadService): RedirectResponse
    {

        $files = $request->validated();

        $fileNames = $fileUploadService->processFileManager($files['files']);

        $files = array_map(function ($file) {
            return [
                'user_id' => auth()->user()->id,
                'file_name' => $file,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }, $fileNames);


        $result = FileManager::insert($files);

        return $result 
            ? redirect()->back()->with('success', 'فایل های شما با موفقیت آپلود شد.')
            : redirect()->back()->withErrors(['error' => 'خطا در آپلود فایل ها.']);

    }
}
