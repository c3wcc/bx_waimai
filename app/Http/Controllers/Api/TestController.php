<?php

namespace App\Http\Controllers\Api;

class TestController extends ApiController
{

    public function index()
    {

        $outData['data'] = '测试成功';

        return $this->success($outData);
    }

}
