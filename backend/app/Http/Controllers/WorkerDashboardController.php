<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerDashboardController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.dashboard', ['workers' => $workers,]);
    }
}
