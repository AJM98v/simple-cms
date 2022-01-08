@extends('layouts.Admin.Master')


@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                @isset($data)
                    <form action="/admin/project/{{$data['project']->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                @else
                   <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                @endisset
                        @csrf

                    <label for="title">عنوان :</label>
                    <input id="title" type="text" name="title" value="@isset($data){{$data['project']->title}}@endisset">
                    <label for="info">توضیحات :</label>
                    <textarea id="info" name="info">@isset($data){{$data['project']->info}}@endisset</textarea>
                     <label for="image">عکس :</label>
                    <input id="image" type="file" name="image">
                    <button class="btn btn-flat btn-success" type="submit">@isset($data)ثبت تغییرات@elseذخیره@endisset</button>

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
