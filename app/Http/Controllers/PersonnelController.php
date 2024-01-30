<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnel = Personnel::orderBy('first_name', 'ASC')->get();
        return response(['data' => $personnel, 'message' => 'personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_OK')]);
    }

    public function getById($id)
    {
        $personnel = Personnel::find($id);
        if(!empty($personnel)){
            return response(['data' => $personnel, 'message' => 'single personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_OK')]);
        }else{
            return response(['data' => [], 'message' => 'unable to delete personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_BAD_REQUEST')]);
        }
    }

    public function create(Request $request)
    {

    }

    public function update(Request $request, $id)
    {
        $personnel = Personnel::find($id);
        if(!empty($personnel)){
            return response(['data' => $personnel, 'message' => 'single personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_OK')]);
        }else{
            return response(['data' => [], 'message' => 'unable to delete personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_BAD_REQUEST')]);
        }
    }

    public function delete($id)
    {
        $personnel = Personnel::find($id);
        if(!empty($personnel)){
            $personnel->delete();
            return response(['data' => $personnel, 'message' => 'personnel data deleted', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_OK')]);
        }else{
            return response(['data' => [], 'message' => 'unable to delete personnel data', 'status' => true, 'statusCode' => env('HTTP_SERVER_CODE_BAD_REQUEST')]);
        }
    }

}
