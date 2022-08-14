@extends('layouts.app', [
'class' => '',
'elementActive' => 'countries'
])
@section('content')

    <div class="content">

        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('أضف نظرة عامة جديدة') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('countries.index') }}"> العودة</a>
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


            <form class="col-md-12" action="{{ route('countries.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="card-body">
                    <div class="form-row text-right">
                        <div class="form-group col-md-12">
                            <label>{{ __('اسم الدولة بالانجليزي') }}</label>
                            <input placeholder="KSA" type="text" name="name" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('اسم الدولة بالعربي') }}</label>
                            <input placeholder="المملكة العربية السعودية" type="text" name="name_ar" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('رمز الدولة') }}</label>
                            <input placeholder="966 (0)" type="text" name="country_code" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('نسبة الضريبة') }}</label>
                            <input placeholder="0.15" type="text" name="tax_percentage" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('وحدة السعر بالانجليزي') }}</label>
                            <input placeholder="SR" type="text" name="unit" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('وحدة السعر بالعربي') }}</label>
                            <input placeholder="ريال" type="text" name="unit_ar" class="form-control">

                        </div>

                        <div class="form-group col-md-12">
                            <label for="file" style="cursor: pointer;">{{ __('اختر صورة العلم') }} <br> <i
                                    style="font-size:40px" class="nc-icon nc-image"></i>
                            </label>
                            <input type="file" accept="image/*" name="flag_icon" id="file" onchange="loadFile(event)"
                                style="display: none;">
                            <img id="output" width="200" />

                        </div>
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('أضف الدولة') }}</button>
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
