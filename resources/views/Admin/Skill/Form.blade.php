@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                @isset($data)
                    <form action="/admin/skill/{{$data['skill']->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        @else
                            <form action="{{route('skill.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @endisset
                                <label for="title">عنوان :</label>
                                <input name="title" id="title" type="text"
                                       value="@if(isset($data)){{$data['skill']->title}}@endif">
                                <label for="icon">ایکون :</label>
                                @isset($data)
                                    <div>
                                        <p>{{$data['skill']->icon}}</p>
                                        <a href="">
                                            <button class="btn btn-secondary">تغییر عکس</button>
                                        </a>
                                    </div>
                                @else
                                    <input name="icon" id="icon" type="file">
                                @endisset

                                <label for="info">توضیحات :</label>
                                <textarea name="info"
                                          id="info">@isset($data){{$data['skill']->info}}@endisset</textarea>
                                <button class="btn btn-flat btn-success" type="submit">@if(isset($data))ثبت تغییرات@else
                                        ذخیره@endif</button>
                            </form>
            </div>
            <div class="text-danger m-1 p-2">
                @foreach($errors->all() as $error)
                    <h6>{{$error}}</h6>
                @endforeach
            </div>

        </div>
    </div>
@endsection

