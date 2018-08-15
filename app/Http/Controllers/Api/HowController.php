<?php

namespace App\Http\Controllers\Api;

use App\How;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class HowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(How::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        How::created($request->all());

        return response(['created' => true], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  How $how
     * @return \Illuminate\Http\Response
     */
    public function show(How $how)
    {
        return response($how, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  How $how
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, How $how)
    {
        $how->update($request->all());
        return response($how, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  How $how
     * @return \Illuminate\Http\Response
     */
    public function destroy(How $how)
    {
        try {
            $how->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response(['error' => $e], Response::HTTP_BAD_REQUEST);
        }
    }
}
