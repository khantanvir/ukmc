<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function company_settings(){
        $data['page_title'] = 'Company / Settings';
        $data['settings'] = true;
        $data['company_settings'] = true;
        return view('setting/company_setting',$data);
    }
}
