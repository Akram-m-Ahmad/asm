@extends('layouts.app', [
'class' => '',
'elementActive' => 'about'
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
                <a class="btn btn-success" href="{{ route('countries.create') }}"> إضافة دولة جديدة</a>
            </div>
            <div class="card-header text-right">
                <h4 class="card-title"> قائمة الدول</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>الرقم</th>
                            <th>الاسم بالانجليزي</th>
                            <th>الاسم بالعربي</th>
                            <th>رمز الدولة</th>
                            <th>العلم</th>
                            <th >الإجراءات</th>
                        </thead>
                        <tbody>


                            @foreach ($countries as $country)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                  
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->name_ar }}</td>
                                    <td>{{ $country->country_code }}</td>
                                    <td><img src="{{ asset('storage/images/countries/' . $country->flag_icon) }}" width="100px">
                                    </td>
                                    <td>
                                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST">
                                            <a class="btn btn-info btn-icon  "
                                                href="{{ route('countries.show', $country->id) }}"> <i
                                                    class="fa fa-eye"></i></a>

                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('countries.edit', $country->id) }}"><i
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
            {{-- {!! $products->links('vendor.pagination.simple-tailwind') !!} --}}
            {!! $countries->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </div>
@endsection
