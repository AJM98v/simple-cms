@extends('layouts.Admin.Master')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                @isset($data)
                    <form action="/admin/education/{{$data['education']->id}}" method="post"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        @else
                            <form action="{{route('education.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @endisset
                                <label for="title">عنوان :</label>
                                <input name="title" id="title" type="text"
                                       value="@if(isset($data)){{$data['education']->title}}@endif">
                                <label for="academy">آموزشگاه :</label>
                                <input name="academy" id="academy" type="text"
                                       value="@if(isset($data)){{$data['education']->academy}}@endif">
                                <label for="begin">تاریخ شروع :</label>
                                <input name="begin" id="begin" type="date"
                                       value="@if(isset($data)){{$data['education']->begin}}@endif">
                                <label for="finish">تاریخ پایان :</label>
                                <input name="finish" id="finish" type="date"
                                       value="@if(isset($data)){{$data['education']->finish}}@endif">

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

