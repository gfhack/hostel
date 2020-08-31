<?php

namespace App\Http\Controllers;

use App\Room;
use App\Hotel;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotel $hotel)
    {
        $rooms = $hotel->rooms;

        return view('rooms.index', compact('rooms', 'hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Hotel $hotel)
    {
        return view('rooms.form', [
            'room' => new Room(),
            'route' => ['route' => ['admin.hotel.room.store', $hotel->id]],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request, Hotel $hotel)
    {
        try {
            $hotel->rooms()->create($request->validated());
        } catch (\Throwable $th) {
            return redirect()->route('admin.hotel.room', $hotel->id)->with('message-error', __('Database error'));
        }

        return redirect()->route('admin.hotel.room',$hotel->id)->with('message-success', __('Successfully created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.form', [
            'hotel' => $hotel,
            'route' => ['route' => ['admin.hotel.update', $hotel->id]],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request, Hotel $hotel)
    {
        $hotel->fill($request->validated());
        $hotel->save();

        return redirect()->route('admin.hotel')->with('message-success', __('Successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        try {
            $hotel->delete();
        } catch (\Throwable $th) {
            return redirect()->route('admin.hotel')->with('message-error', __('Database error'));
        }

        return redirect()->route('admin.hotel')->with('message-success', __('Successfully deleted'));
    }
}
