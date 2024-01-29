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

}
