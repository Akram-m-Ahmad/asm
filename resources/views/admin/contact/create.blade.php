@extends('layouts.app', [
'class' => '',
'elementActive' => 'contacts'
])
@section('content')

    <div class="content">

        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('أضف جديد') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('contact.index') }}"> العودة</a>
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


            <form class="col-md-12" action="{{ route('contact.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

              
                <div class="card-body">
                    <div class="form-row text-right">
                        <div class="form-group col-md-12">
                            <label>{{ __('  العنوان   ') }}</label>
                            <input placeholder="address" type="text" name="address" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('الايميل') }}</label>
                            <input placeholder="email" type="text" name="email" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('الهاتف') }}</label>
                            <input placeholder="phone" type="text" name="phone" class="form-control">

                        </div>

                        <div class="form-group col-md-12">
                            <label>{{ __('فيسبوك') }}</label>
                            <input placeholder="facebook" type="text" name="f_link" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('تويتر') }}</label>
                            <input placeholder="twitter" type="text" name="t_link" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('يوتيوب') }}</label>
                            <input placeholder="Youtube" type="text" name="y_link" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('انستاغرام') }}</label>
                            <input placeholder="instagram" type="text" name="i_link" class="form-control">

                        </div>
                     
                          
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('أضف ') }}</button>
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
