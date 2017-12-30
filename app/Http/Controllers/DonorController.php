<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Http\Requests\DonorRequest;
use App\Http\Resources\Donor\DonorResource;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*-
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }
*/
    public function index()
    {
        return Donor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(DonorRequest $request)
    {
        $donor = new Donor;
        $donor->name = $request->name;
        $donor->mobile = $request->mobile;
        $donor->age = $request->age;
        $donor->blood_group = $request->blood_group;
        $donor->save();
        return $donor;
//        return response([
//            'data' => new DonorResource($donor)
//        ], 201);
    }


    public function show(Donor $donor)
    {
        return new DonorResource($donor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Donor $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $donor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
