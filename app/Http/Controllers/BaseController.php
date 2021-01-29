<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    // create veriable for whole base
    protected $output;
    protected $services;

    /**
     * @param $page_title
     * @param $sub_title
     * @param $page_icon
     */
    protected function setPageDate($page_title , $sub_title , $page_icon){
        view()->share(['page_title'=>$page_title, 'sub_title'=>$sub_title, 'page_icon'=>$page_icon]);
    }

    /**
     * @param $error_code
     * @param $messege
     * @param response 
     */
    protected function showErrorPage($error_code=404, $messege=null){
        $data['messege'] = $messege;
        return response()->view('errors.'.$error_code, $data, $error_code);
    }

    /**
     * json status
     */
    protected function response_json($status='success', $messege=null, $data=null, $response_code=200){
        return response()->json([
            'status' => $status,
            'messege' => $messege,
            'data' => $data,
            'response_code' => $response_code
        ]);
    }
}
