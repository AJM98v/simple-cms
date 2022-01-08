<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
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
            'project' => Project::orderByDesc('id')->get()
        ];
        return view('Admin.Project.Index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.Project.Form");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreProjectRequest $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(StoreProjectRequest $request)
    {
        //

        $file = $request->file('image');
        $fileName = $request->file('image')->getClientOriginalName();
        if ($request->validated()){
            savePhoto($file);
            Project::updateOrCreate([
                'title'=>$request->validated()['title'],
                'info'=>$request->validated()['info'],
                'image'=>$fileName,
            ]);
            return redirect()->route('project.index')->with('message','پروژه با موفقیت ایجاد شد');
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $data = ['project' => $project];

        return view('Admin.Project.Form',compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateProjectRequest $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response|string
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
        if ($request->validated()){
            $project->updateOrCreate($request->validated());
            return redirect()->route('project.index')->with(['message'=>'پروژه با موفقیت آپدیت شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response|string
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('project.index')->with(['message'=>'پروژه با موفقیت حذف شد']);

    }

}
