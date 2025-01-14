<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class WebsiteSettingController extends Controller
{
    public function websitesetting()
    {

        if (!Auth::user()->can('websitesetting')) {
            abort(403);
        }
        $site = WebsiteSetting::first();
        // return  $site;
        return view('admin.setting.home-setting', compact('site'));
    }


    public function websitestoresetting(Request $request)
    {

        // return $request ->all();
        $data = [
            'site_title' => $request->site_title,
        ];
        if ($request->file('logo')) {
            $file_name = $request->file('logo')->store('logo');
            $data['logo'] = $file_name;
        }
        WebsiteSetting::updateOrInsert([
            'id' => 1
        ], $data);
        return redirect()->back();
    }
}
