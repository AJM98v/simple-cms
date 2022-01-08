@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                @isset($data)
                    <form action="/admin/expirement/{{$data['expirement']->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        @else
                            <form action="{{route('expirement.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @endisset
                                <label for="title">عنوان :</label>
                                <input name="title" id="title" type="text" value="@if(isset($data)){{$data['expirement']->title}}@endif">
                                     <label for="company">کارفرما :</label>
                                <input name="company" id="company" type="text" value="@if(isset($data)){{$data['expirement']->company}}@endif">
                                   <label for="time">مدت زمان :</label>
                                <input name="time" id="time" type="number" min="1" max="10" value="@if(isset($data)){{$data['expirement']->time}}@endif">

                                <label for="info">توضیحات :</label>
                                <textarea name="info" id="info">@isset($data){{$data['expirement']->info}}@endisset</textarea>
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

