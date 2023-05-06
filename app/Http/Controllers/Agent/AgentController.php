<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agents(){
        $data['page_title'] = 'Agents / List';
        $data['agent'] = true;
        return view('agent/all',$data);
    }
}
