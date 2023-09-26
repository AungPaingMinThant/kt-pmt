<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 
use App\Models\Media;
use DB;
use URL;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {        
        $media_List = Media::orderBy('id','desc')->get();
        return view('admin.media.list')->with('media_List',$media_List);
    }

    public function uploadMedia()
    {
        return view('admin.media.upload');
    }

    public function storeMedia(Request $request)
    {
        $media_name = $request->media_name;
        $media_category = $request->media_category;
        $media_file = $request->media_file;
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $media_category_path = str_replace(" ", "_", strtolower($media_category));

        if ($request->hasFile('media_file')) {
            $mediaFile = $request->file('media_file');
            $m_File = $mediaFile->getClientOriginalName();
            $upload_path = base_path() . '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/';
            $mediaFile->move($upload_path, $m_File);
            $media_file = '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/' . $m_File;
        } else {
            $media_file = '';
        }

        $media = new Media;
        $media->media_name = $media_name;
        $media->media_category = $media_category;
        $media->media_file = $media_file;
        $media->created_by = auth()->user()->id;
        $media->updated_by = auth()->user()->id;
        $media->save();

        return redirect('/admin/media')->with('success','Media uploaded successfully.');
    }

    public function editMedia($media_id)
    {
        $media_data = Media::where('id',$media_id)->first();
        return view('admin.media.edit')->with('media_data',$media_data);
    }

    public function updateMedia(Request $request)
    {
        $media_name = $request->media_name;
        $media_category = $request->media_category;
        $media_file = $request->media_file;
        $media_file_old = $request->media_file_old;
        $media_id = $request->media_id;
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $media_category_path = str_replace(" ", "_", strtolower($media_category));

        if($media_file_old == '') {
            if ($request->hasFile('media_file')) {
                $media = Media::where('id',$media_id)->first();
                $delete_url = base_path() . $media->media_file;
                File::delete($delete_url);
                $mediaFile = $request->file('media_file');
                $m_File = $mediaFile->getClientOriginalName();
                $upload_path = '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/';
                $mediaFile->move($upload_path, $m_File);
                $media_file = '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/' . $m_File;
            } else {
                $media_file = '';
            }
        } else {
            $media_file = $media_file_old;
        }

        $banner = DB::table('media')
                    ->where('id',$media_id)
                    ->update([
                        'media_name' => $media_name,
                        'media_category' => $media_category,
                        'media_file' => $media_file
                    ]);

        return redirect('/admin/media')->with('success','Media updated successfully.');
    }
}
