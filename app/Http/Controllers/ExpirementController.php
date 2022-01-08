<?php

namespace App\Http\Controllers;

use App\Models\Expirement;
use App\Http\Requests\StoreExpirementRequest;
use App\Http\Requests\UpdateExpirementRequest;

class ExpirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
          'expirement' => Expirement::all()
        ];
      return view('Admin.Expirement.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Expirement.Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpirementRequest $request)
    {
        //
        if ($request->validated()){
            Expirement::create($request->validated());
            return redirect()->route('expirement.index')->with(['message'=>'آیتم با موفقیت ساخته شد']);;
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expirement  $expirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Expirement $expirement)
    {
        //
        $data = [
            'expirement'=>$expirement
        ];
        return view('Admin.Expirement.Form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpirementRequest  $request
     * @param  \App\Models\Expirement  $expirement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpirementRequest $request, Expirement $expirement)
    {
        //


        if ($request->validated()){
            $expirement->update($request->validated());
            return redirect()->route('expirement.index')->with(['message'=>'آیتم با موفقیت آپدیت شد']);;
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expirement  $expirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expirement $expirement)
    {
        //
        $expirement->delete();
       return redirect()->route('expirement.index')->with(['message'=>'آیتم با موفقیت حذف شد']);
    }
}
