@extends('layouts.app', [
'class' => '',
'elementActive' => 'products'
])
@section('content')

    <div class="content">

        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('أضف منتج جديد') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> العودة</a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger text-right">
                    <strong>عذرًا! بعض المدخلات غير صحيحة</strong><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class="col-md-12" action="{{ route('products.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="card-body">
                    <div class="form-row text-right">
                        <div class="form-group col-md-12">
                            <label>{{ __('اسم المنتج') }}</label>
                            <input type="text" name="name" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('التفاصيل') }}</label>
                            <textarea class="form-control" style="height:150px" name="detail"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="file" style="cursor: pointer;">{{ __('اختر صورة') }} <br> <i
                                    style="font-size:40px" class="nc-icon nc-image"></i>
                            </label>
                            <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;">
                            <img id="output" width="200" />

                        </div>
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('أضف المنتج') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>




@endsection
@push('scripts')
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
