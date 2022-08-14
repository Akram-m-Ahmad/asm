@extends('layouts.app', [
'class' => '',
'elementActive' => 'about_str'
])

<style>
    .table-responsive {
        overflow: hidden !important;
    }

</style>
@section('content')
    <div class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success text-right">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('updated'))
            <div class="alert alert-warning text-right">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('delete'))
            <div class="alert alert-danger text-right">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card">
            <div class="pull-right" style="padding-left:10px">
                <a class="btn btn-success" href="{{ route('about_str.create') }}"> إضافة  (هيكلية) نظرة عامة </a>
            </div>
            <div class="card-header text-right">
                <h4 class="card-title"> قائمة من نحن</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>الرقم</th>
                            <th>العنوان</th>
                            <th>المعلومات</th>
                            
                            <th >الإجراءات</th>
                        </thead>
                        <tbody>


                            @foreach ($about_str as $about_str)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                  
                                    <td>{{ $about_str->title }}</td>
                                    <td>{{ $about_str->details	 }}</td>
                                    
                                    <td>
                                        <form action="{{ route('about_str.destroy', $about_str->id) }}" method="POST">
                                            <a class="btn btn-info btn-icon  "
                                                href="{{ route('about_str.show', $about_str->id) }}"> <i
                                                    class="fa fa-eye"></i></a>

                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('about_str.edit', $about_str->id) }}"><i
                                                    class="fa fa-edit"></i></a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div>
             
        </div>
    </div>
@endsection
