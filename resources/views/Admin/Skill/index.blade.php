@extends('layouts.Admin.Master')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <a href="{{route('skill.create')}}">
                <button class="btn btn-success btn-flat w-25 m-3">ایجاد</button>
            </a>
            <span class="text-danger">{{session('message')}}</span>
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
                    @foreach($data['skills'] as $item)
                        <tr>
                            <td>
                                {{$item->title}}
                            </td>
                            <td>
                                <a href="/admin/skill/{{$item->id}}/edit">
                                    <button class="btn btn-primary btn-flat">ویرایش</button>
                                </a>
                                <form method="post" action="/admin/skill/{{$item->id}}">
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
