<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function show($id)
    {
        return view('Worker.profile', [
            'worker' => Worker::findOrFail($id)
        ]);
    }
}
