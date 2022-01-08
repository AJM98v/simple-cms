@extends('layouts.Admin.Master')


@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <a href="{{route('service.create')}}">
                <button class="btn btn-success btn-flat w-25 m-3">ایجاد</button>
            </a>
            <span class="text-danger">{{session('message')}}</span>
            <div class="table-container">
                <table>
                    <tr>
                        <th>اسم</th>

                        <th>عملیات</th>

                    </tr>
                    @foreach($data['project'] as $item)
                        <tr>
                            <td>{{$item->title}}</td>

                            <td>
                                <a href="/admin/contact/{{$item->id}}">
                                    <button class="btn btn-flat btn-light">نمایش</button>
                                </a>
                                <form method="post" action="/admin/project/{{$item->id}}">
                                    @method('delete')
                                    <button class="btn btn-danger btn-flat">حدف</button>
                                </form>
                                <a href="/admin/project/{{$item->id}}/edit">
                                    <button class="btn btn-flat btn-warning">ویراش</button>
                                </a>

                            </td>
                        </tr>

                    @endforeach

                </table>

            </div>
        </div>
    </div>


@endsection
