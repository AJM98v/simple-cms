<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;

class SocialController extends Controller
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
            'social'=>Social::all()
        ];
        return view('Admin.Social.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Social.Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSocialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialRequest $request)
    {
        //
        if ($request->validated()){
            Social::create($request->validated());
            return redirect()->route('social.index')->with(['message'=>'آیتم با موفقیت ایجاد شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        //
        $data = [
            'social'=>$social
        ];
        return view('Admin.Social.Form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialRequest  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        //
        if ($request->validated()){
            $social->update($request->validated());
            return redirect()->route('social.index')->with(['message'=>'آیتم با موفقیت آپدیت شد']);
        }else{
           return redirect()->back()->withErrors($request->validated());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
        $social->delete();
        return redirect()->route('social.index')->with(['message'=>'آیتم با موفقیت حذف شد']);
    }
}
