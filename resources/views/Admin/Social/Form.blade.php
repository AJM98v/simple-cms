@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                @isset($data)
                    <form action="/admin/social/{{$data['social']->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        @else
                            <form action="{{route('social.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @endisset
                                <label for="title">عنوان :</label>
                                <input name="title" id="title" type="text" value="@if(isset($data)){{$data['social']->title}}@endif">
                                     <label for="link">لینک :</label>
                                <input name="link" id="link" type="text" value="@if(isset($data)){{$data['social']->link}}@endif">

                                <button class="btn btn-flat btn-success" type="submit">@if(isset($data))ثبت تغییرات@elseذخیره@endif</button>
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

