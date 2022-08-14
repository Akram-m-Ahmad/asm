@extends('layouts.app', [
'class' => '',
'elementActive' => 'catdet'
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
                <a class="btn btn-success" href="{{ route('catdets.create') }}"> إضافة </a>
            </div>
            <div class="card-header text-right">
                <h4 class="card-title">قائمة </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>الرقم</th>
                            <th>الاسم</th>
                             
                         </thead>
                        <tbody>


                            @foreach ($catdet as $catdet)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                  
                                    <td>{{ $catdet->name}}</td>
                                     
                                    <td>
                                        <form action="{{ route('catdets.destroy', $catdet->id) }}" method="POST">
                                            <a class="btn btn-info btn-icon  "
                                                href="{{ route('catdets.show', $catdet->id) }}"> <i
                                                    class="fa fa-eye"></i></a>

                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('catdets.edit', $catdet->id) }}"><i
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
