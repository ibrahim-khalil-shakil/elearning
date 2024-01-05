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
                    'image' => asset('public/uploads/events/' . $e->image),
                    'location' => $e->location,
                    'topic' => $e->topic,
                    'goal' => $e->goal,
                    'hosted_by' => $e->hosted_by,
                    'date' => date("j F, Y, l", strtotime($e->date)),
                );
            }
        }
        return response($data, 200);
    }
    public function single($id)
    {
        $event = Event::find($id);
        $data = array();
        if ($event) {
            $data = array(
                'id' => $event->id,
                'title' => $event->title,
                'description' => $event->description,
                'image' => asset('public/uploads/events/' . $event->image),
                'location' => $event->location,
                'topic' => $event->topic,
                'goal' => $event->goal,
                'hosted_by' => $event->hosted_by,
                'date' => date("j F, Y, l", strtotime($event->date)),
            );
        }
        return response($data, 200);
    }
}
