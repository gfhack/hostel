<?php

namespace App\Http\Controllers;

use App\Room;
use App\Hotel;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('rooms')->get();

        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.form', [
            'hotel' => new Hotel(),
            'route' => ['route' => 'admin.hotel.store'],
        ]);
    }

    public function store(HotelRequest $request)
    {
        try {
            Hotel::create($request->validated());
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.hotel')
                ->with('message-error', __('Database error'));
        }

        return redirect()
            ->route('admin.hotel')
            ->with('message-success', __('Successfully created'));
    }

    public function show(Hotel $hotel)
    {
        $hotel->loadMissing('rooms');
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('hotels.form', [
            'hotel' => $hotel,
            'route' => ['route' => ['admin.hotel.update', $hotel->id]],
        ]);
    }

    public function update(HotelRequest $request, Hotel $hotel)
    {
        $hotel->fill($request->validated());
        $hotel->save();

        return redirect()
            ->route('admin.hotel')
            ->with('message-success', __('Successfully updated'));
    }

    public function destroy(Hotel $hotel)
    {
        try {
            $hotel->delete();
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.hotel')
                ->with('message-error', __('Database error'));
        }

        return redirect()
            ->route('admin.hotel')
            ->with('message-success', __('Successfully deleted'));
    }

    public function listRooms()
    {
        $rooms = Room::with(['hotel', 'users'])->paginate(5);

        return view('rooms.list', compact('rooms'));
    }
}
