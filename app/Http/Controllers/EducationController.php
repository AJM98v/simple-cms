<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;

class EducationController extends Controller
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
            'education'=>Education::all()
        ];
        return view('Admin.Education.index',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Education.Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEducationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEducationRequest $request)
    {
        //

        if ($request->validated()){
            Education::create($request->validated());
            return redirect()->route('education.index')->with(['message'=>'آیتم با موفقیت ساخته شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
        $data = [
            'education'=>$education
        ];
        return view('Admin.Education.Form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducationRequest  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationRequest $request, Education $education)
    {
        //

        if ($request->validated()){
            $education->update($request->validated());
            return redirect()->route('education.index')->with(['message'=>'آیتم با موفقیت ساخته شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
        $education->delete();
        return redirect()->route('education.index')->with(['message'=>'آیتم با موفقیت حذف شد']);;

    }
}
