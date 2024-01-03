<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $event = Event::get();
        $data = array();
        if ($event) {
            foreach ($event as $e) {
                $data[] = array(
                    'id' => $e->id,
                    'title' => $e->title,
                    'description' => $e->description,
                    'image' => asset('public/uploads/event/' . $e->image),
                    'location' => $e->location,
                    'hosted_by' => $e->hosted_by,
                    'date' => date("d", strtotime($e->date)),
                );
            }
        }
       return response($event, 200);
    }

}
