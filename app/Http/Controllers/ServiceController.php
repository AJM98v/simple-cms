<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'services' => Service::all()
        ];
        return view('Admin.Service.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Service.Form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreServiceRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|string
     */
    public function store(StoreServiceRequest $request)
    {


        $icon = $request->file('icon');
        $iconName = $request->file('icon')->getClientOriginalName();



        if ($request->validated()){
            savePhoto($icon);

            Service::create([
                'title'=>$request->validated()['title'],
                'icon'=>$iconName,
                'info'=>$request->validated()['info']
            ]);

            return redirect()->route('service.index')->with(['message'=>'سرویس با موفقیت ساخته شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View|\Illuminate\Http\Response
     */

    public function edit(Service $service)
    {
        //
        $data = ['service' =>$service];
        return view('Admin.Service.Form',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateServiceRequest $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|string
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //

        if ($request->validated()){
            $service->update($request->validated());
            return redirect()->route('service.index')->with(['message'=>'سرویس با موفقیت آپدیت شد']);
        }else{
            return redirect()->back()->withErrors($request->validated());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|string
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect()->route('service.index')->with('message','سرویس با موفقیت حذف شد');

    }
}
