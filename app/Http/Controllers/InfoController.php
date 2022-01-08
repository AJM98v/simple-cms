<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;

class InfoController extends Controller
{


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
        $data = [
          'info'=>$info
        ];
        return view('Admin.Info.index',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoRequest  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response|string
     */
    public function update(UpdateInfoRequest $request, Info $info)
    {
        //

        if ($request->validated()){
            $info->update($request->validated());
            return redirect()->back()->with(['message'=>'با موفقیت آپدیت شد']);

        }
        return redirect()->back()->withErrors($request->validated());
    }

}
