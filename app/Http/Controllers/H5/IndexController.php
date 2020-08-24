<?php
namespace App\Http\Controllers\H5;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
            public function index(){
                $url = env('SHOP_HOST')."/api/index";
                $data = file_get_contents($url);
                $list = json_decode($data,true);
                $response = [
                    'errno' => 0,
                    'msg'   => 'ok',
                    'data'  => [
                        'goods' => $list['data']['list']
                    ]
                ];

                return $response;

            }
}
