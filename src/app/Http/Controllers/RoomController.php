<?php

namespace App\Http\Controllers;

use App\Room;
use App\Hotel;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
    public function index(Hotel $hotel)
    {
        $rooms = $hotel->rooms;

        return view('rooms.index', compact('rooms', 'hotel'));
    }

    public function create(Hotel $hotel)
    {
        return view('rooms.form', [
            'room' => new Room(),
            'route' => ['route' => ['admin.hotel.room.store', $hotel->id]],
        ]);
    }

    public function store(RoomRequest $request, Hotel $hotel)
    {
        try {
            $hotel->rooms()->create($request->validated());
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.hotel.room', $hotel->id)
                ->with('message-error', __('Database error'));
        }

        return redirect()
            ->route('admin.hotel.room',$hotel->id)
            ->with('message-success', __('Successfully created'));
    }

    public function show(Hotel $hotel, Room $room)
    {
        return view('rooms.show', compact('hotel', 'room'));
    }

    public function edit(Hotel $hotel, Room $room)
    {
        return view('rooms.form', [
            'room' => $room,
            'route' => [
                'route' => ['admin.hotel.room.update', $hotel->id, $room->id],
            ],
        ]);
    }

    public function update(RoomRequest $request, Hotel $hotel, Room $room)
    {
        $room->fill($request->validated());
        $room->save();

        return redirect()
            ->route('admin.hotel.room', $hotel->id)
            ->with('message-success', __('Successfully updated'));
    }

    public function destroy(Hotel $hotel, Room $room)
    {
        try {
            $room->delete();
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.hotel.room', $hotel->id)
                ->with('message-error', __('Database error'));
        }

        return redirect()
            ->route('admin.hotel.room', $hotel->id)
            ->with('message-success', __('Successfully deleted'));
    }
}
