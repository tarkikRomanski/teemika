<?php

namespace App\Http\Controllers\Api;

use App\Why;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Why::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Why::created($request->all());

        return response(['created' => true], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  Why $why
     * @return \Illuminate\Http\Response
     */
    public function show(Why $why)
    {
        return response($why, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Why $why
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Why $why)
    {
        $why->update($request->all());
        return response($why, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Why $why
     * @return \Illuminate\Http\Response
     */
    public function destroy(Why $why)
    {
        try {
            $why->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response(['error' => $e], Response::HTTP_BAD_REQUEST);
        }
    }
}
