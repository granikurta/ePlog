<?php

namespace App\Http\Controllers;
use App\Calculate\Tests\scl90r;
use App\Models\Test;
use App\Models\Tests\Tests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class testController extends Controller
{
    public function index($id)
    {
        $test = Test::find($id);
        $tests = Tests::with('question','option')->get()->find($id)->toArray();
        // $blank = json_decode($test->blank, true);
        // $name = $test->name;
        // $code = $test->code;
        // $resp = compact('name', 'blank', 'id', 'code');
        return view('test')->with('test', $tests);
    }
    public function result($id, Request $req)
    {
        $class = 'App\\Calculate\\Tests\\'. $req['code'];
        $result = new $class;
        $result->setAnswer($req['data']);
        return $result->calculate();
    }
    private function saveToDB(){
        
    }
}
