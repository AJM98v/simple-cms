@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="item-container">
                <table>
                    <tr>
                        <th>نام :</th>
                        <td>{{$data['contact']->name}}</td>
                    </tr>
                    <tr>
                        <th>شماره :</th>
                        <td>{{$data['contact']->phone}}</td>
                    </tr>
                    <tr>
                        <th>ایمیل :</th>
                        <td>{{$data['contact']->email}}</td>
                    </tr>
                    <tr>
                        <th>توضیحات :</th>
                        <td>{{$data['contact']->more}}</td>
                    </tr>

                </table>

            </div>
            <a href="{{route('contact.index')}}">
                <button class="btn btn-dark">بازگشت</button>

            </a>
        </div>
    </div>

@endsection
