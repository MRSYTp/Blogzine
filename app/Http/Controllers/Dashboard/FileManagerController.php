<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\fileManager\FileManagerDeleteRequest;
use App\Http\Requests\fileManager\FileManagerRequest;
use App\Models\Dashboard\FileManager;
use App\Services\FileUploadService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class FileManagerController extends Controller
{

    public function __construct(protected FileUploadService $fileUploadService) {}

    public function index(): View
    {
        $files = FileManager::orderBy('id', 'desc')->get();
        return view('dashboard.file-manager', compact('files'));
    }


    public function store(FileManagerRequest $request, FileUploadService $fileUploadService): RedirectResponse
    {

        $files = $request->validated();

        $fileInfo = $fileUploadService->processFileManager($files['files']);


        $files = array_map(function ($file) {
            return [
                'user_id' => auth()->user()->id,
                'file_name' => $file['fileName'],
                'type' => $file['fileExtenstion'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }, $fileInfo);

        $result = FileManager::insert($files);

        return $result
            ? redirect()->back()->with('success', 'فایل های شما با موفقیت آپلود شد.')
            : redirect()->back()->withErrors(['error' => 'خطا در آپلود فایل ها.']);
    }


    public function destroy(FileManagerDeleteRequest $request): RedirectResponse
    {
        $fields = $request->validated();

        try {

            foreach ($fields['selectFile'] as $id) {

                $file = FileManager::findOrFail($id);

                $filePath = public_path('uploads/file_manager/' . $file->file_name . '.' . $file->type);

                if (!file_exists($filePath)) {
                    throw new \Exception();
                }

                File::delete($filePath);
                $result = $file->delete();

                if (!$result) {
                    throw new \Exception();
                }

            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'حذف کردن فایل های انتخاب شده به مشکل خورد']);
        }

        return redirect()->back()->with('success', 'حذف کردن فایل ها با موفقیت انجام شد');
    }
}
