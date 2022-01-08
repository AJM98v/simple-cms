<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'skills'=>Skill::all()
            ];
        return view('Admin.Skill.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return
            view('Admin.Skill.Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkillRequest  $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(StoreSkillRequest $request)
    {
        //
        $file = $request->file('icon');
        $fileName = $request->file('icon')->getClientOriginalName();
        if ($request->validated()){
            Skill::create([
                'title'=>$request->validated()['title'],
                'info'=>$request->validated()['info'],
                'icon'=>$fileName
            ]);
            return redirect()->route('skill.index')->with(['message'=>'آیتم با موفقیت ایجاد شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
        $data  = [
          'skill'=>$skill
        ];
        return view('Admin.Skill.Form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response|string
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        //
        if ($request->validated()){
            $skill->update($request->validated());
            return redirect()->route('skill.index')->with(['message'=>'آیتم با موفقیت آپدیت شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response|string
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        return redirect()->route('skill.index')->with(['message'=>'آیتم با موفقیت آپدیت شد']);

    }
}
