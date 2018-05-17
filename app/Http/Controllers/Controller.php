<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected function sendSuccess($data)
    {
        $response = [
            'status' => 'success',
            'data' => $data
        ];
        return response()->json($response);
    }

    protected function sendError($msg = null)
    {
        $response = [
            'status' => 'error',
            'msg' => $msg
        ];
        return response()->json($response);
    }
}
