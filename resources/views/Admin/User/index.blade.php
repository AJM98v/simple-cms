@extends('layouts.Admin.Master')


@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="table-container">
                <table>
                    <tr>
                        <th>اسم</th>
                        <th>ایمیل</th>


                    </tr>
                    @foreach($user as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                        </tr>

                    @endforeach

                </table>
            </div>

        </div>
    </div>
@endsection
