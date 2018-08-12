<?php

namespace App\Http\Controllers\Api;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(About::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        About::created($request->all());

        return response(['created' => true], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return response($about, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about->update($request->all());
        return response($about, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response(['error' => $e], Response::HTTP_BAD_REQUEST);
        }
    }
}
