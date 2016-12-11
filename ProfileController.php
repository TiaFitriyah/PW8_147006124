<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
  public function index ($nama = ''){
      return view('nama', array('nama' => $nama));
    }
    function profilejokowi(){
      $data = array(
        'nama' => 'Joko Widodo',
        'profesi' => 'Presiden RI',
        'alamat' => 'solo',
      );
      return view('Jokowi-view', $data);
    }
}
