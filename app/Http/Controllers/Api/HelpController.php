<?php

namespace App\Http\Controllers\Api;

use App\Help;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Help::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Help::created($request->all());

        return response(['created' => true], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  Help $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        return response($help, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Help $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        $help->update($request->all());
        return response($help, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Help $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        try {
            $help->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response(['error' => $e], Response::HTTP_BAD_REQUEST);
        }
    }
}
