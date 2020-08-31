<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('hotels.index', compact('hotels', $hotels));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel = new Hotel();

        return view('hotels.form', [
            'hotel' => $hotel,
            'route' => ['route' => 'admin.hotel.store'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        try {
            Hotel::create($request->validated());
        } catch (\Throwable $th) {
            return redirect()->route('admin.hotel')->with('message-error', __('Database error'));
        }

        return redirect()->route('admin.hotel')->with('message-success', __('Successfully created'));
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
    public function update(HotelRequest $request, Hotel $hotel)
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
