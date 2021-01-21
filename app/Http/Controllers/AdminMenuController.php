<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tests\Question;

class AdminMenuController extends Controller
{
    public function index()
    {
        return view('testQuery');
    }
    public function refact(Request $request)
    {
      $m = explode("\n", $request['data']);
      $ins = [];
      foreach ($m as $index => $item) {
        $ins[] = ['test_id'=> '2', 'text'=>$item, 'order'=>$index];
      }
        Question::insert($ins);
        return $ins;
    }
}
