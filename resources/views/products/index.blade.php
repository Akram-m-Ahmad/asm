@extends('layouts.app', [
'class' => '',
'elementActive' => 'products'
])

<style>
    .table-responsive {
        overflow: hidden !important;
    }

</style>
@section('content')
    <div class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('updated'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('delete'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card">
            <div class="pull-right" style="padding-left:10px">
                <a class="btn btn-success" href="{{ route('products.create') }}"> إضافة منتج جديد</a>
            </div>
            <div class="card-header text-right">
                <h4 class="card-title"> قائمة المنتجات</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>الرقم</th>
                            <th>الصورة</th>
                            <th>الاسم</th>
                            <th>التفاصيل</th>
                            <th width="280px">الإجراءات</th>
                        </thead>
                        <tbody>


                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td><img src="{{ asset('storage/images/' . $product->image) }}" width="100px">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            <a class="btn btn-info btn-icon  "
                                                href="{{ route('products.show', $product->id) }}"> <i
                                                    class="fa fa-eye"></i></a>

                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('products.edit', $product->id) }}"><i
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
            {!! $products->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </div>
@endsection
