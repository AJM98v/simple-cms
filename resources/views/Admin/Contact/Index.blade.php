@extends('layouts.Admin.Master')


@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="table-container">
                <table>
                     <tr>
                         <th>اسم</th>
                         <th>ایمیل</th>
                         <th>شماره</th>
                         <th>عملیات</th>

                     </tr>
                    @foreach($data['contact'] as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->phone}}</td>
                            <td>
                                <a href="/admin/contact/{{$message->id}}">
                                    <button class="btn btn-flat btn-info">نمایش</button>
                                </a>

                            </td>
                        </tr>

                    @endforeach

                </table>
            </div>

        </div>
    </div>
@endsection
