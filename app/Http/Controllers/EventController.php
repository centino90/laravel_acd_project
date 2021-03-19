<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Events;
use App\Models\EventCalendar;
use App\Helpers\SessionMessageHelper;

class EventController extends Controller
{

    public function index()
    {
        $events = Events::all();
        $events_calendar = EventCalendar::all();

        return view("pages.events")
            ->with("events", $events)
            ->with("events_calendar", $events_calendar);
    }

    public function create()
    {

        $events_calendar = EventCalendar::all();

        return view("pages.create-event")
            ->with("events_calendar", $events_calendar);
    }

    public function store(EventRequest $request)
    {
        try {

            Events::create($request->all());

        } catch (\Exception $e) {
            // auto-rendered customized 404 error page
        }

        SessionMessageHelper::success($request, "store", "created");

        return redirect()->route('event.index');
    }

    public function show($id)
    {

        $events_calendar = EventCalendar::all();
        $event = Events::find($id);

        return view('pages.show-event')
            ->with('event', $event)
            ->with("events_calendar", $events_calendar);
    }

    public function edit($id)
    {

        $events_calendar = EventCalendar::all();
        $event = Events::find($id);

        return view('pages.edit-event')
            ->with('event', $event)
            ->with("events_calendar", $events_calendar);
    }

    public function update(EventRequest $request, $id)
    {
        try {

            Events::find($id)
                ->update($request->all());

        } catch (\Exception $e) {
            // auto-rendered customized error page
        }

        SessionMessageHelper::success($request, "update", "updated");

        return redirect()->route('event.index');
    }

    public function destroy($id, Request $request)
    {
        try {

            Events::destroy($id);
            
        } catch (\Exception $e) {
            // auto-rendered customized error page
        }

        SessionMessageHelper::success($request, "destroy", "deleted");

        return redirect()->route('event.index');
    }
}
