@extends('layouts.Admin.Master')

@section('content')




    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="flex-row align-items-center">
                <a href="{{route('service.create')}}">
                    <button class="m-3 btn btn-success btn-flat w-25">ایجاد</button>
                </a>

                    <span class="text-danger">{{session('message')}}</span>

            </div>


            <div class="table-container">
                <table>
                    <tr>
                        <th>
                            عنوان :
                        </th>
                        <th>
                            عملیات :
                        </th>
                    </tr>
                    @foreach($data['services'] as $item)
                        <tr>
                            <td>
                                {{$item->title}}
                            </td>
                            <td>
                                <a href="/admin/service/{{$item->id}}/edit">
                                    <button class="btn btn-primary btn-flat">ویرایش</button>
                                </a>
                                <form method="post" action="/admin/service/{{$item->id}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-flat btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection
