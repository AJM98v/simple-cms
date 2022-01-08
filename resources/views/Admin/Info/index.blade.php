@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                <span class="text-danger">{{session('message')}}</span>

                <form action="/admin/info/{{$data['info']->id}}" method="post">
                    @csrf
                    @method('patch')
                    <label for="firstname">نام :</label>
                    <input type="text" id="firstname" name="firstname" value="{{$data['info']->firstname}}">

                    <label for="lastname">نام خانوادگی :</label>
                    <input type="text" id="lastname" name="lastname" value="{{$data['info']->lastname}}">

                    <label for="age">سن :</label>
                    <input type="text" id="age" name="age" value="{{$data['info']->age}}">

                    <label for="email">ایمیل :</label>
                    <input type="email" id="email" name="email" value="{{$data['info']->email}}">

                    <label for="phone">شماره تلفن :</label>
                    <input type="text" id="phone" name="phone" value="{{$data['info']->phone}}">

                    <label for="address">آدرس :</label>
                    <input type="text" id="address" name="address" value="{{$data['info']->address}}">

                    <button class="btn btn-flat btn-success" type="submit">ثبت تفییرات</button>


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
