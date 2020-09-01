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
    public function show(Hotel $hotel, Room $room)
    {
        return view('rooms.show', compact('hotel', 'room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel, Room $room)
    {
        return view('rooms.form', [
            'room' => $room,
            'route' => ['route' => ['admin.hotel.room.update', $hotel->id, $room->id]],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request, Hotel $hotel, Room $room)
    {
        $room->fill($request->validated());
        $room->save();

        return redirect()->route('admin.hotel.room', $hotel->id)->with('message-success', __('Successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, Room $room)
    {
        try {
            $room->delete();
        } catch (\Throwable $th) {
            return redirect()->route('admin.hotel.room', $hotel->id)->with('message-error', __('Database error'));
        }

        return redirect()->route('admin.hotel.room', $hotel->id)->with('message-success', __('Successfully deleted'));
    }
}
