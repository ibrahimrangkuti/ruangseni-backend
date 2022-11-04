<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index() 
    {
        $events = Event::all();
        
        return view('dashboard.admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.admin.event.create');
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
