@extends('layouts.app', [
'class' => '',
'elementActive' => 'about_str'
])
@section('content')

    <div class="content">

        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('أضف   معلومات  ') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('details.index') }}"> العودة</a>
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


            <form class="col-md-12" action="{{ route('details.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="card-body">
                <select class="form-control m-bot15" name="catdet_id">
            
                @foreach($catdetls as $catdetl)
                <option value="{{ $catdetl->id }}"  >{{ $catdetl->name }}</option>          
                @endforeach
        </select>
                    <div class="form-row text-right">
                        <div class="form-group col-md-12">
                            <label>{{ __('  العنوان   ') }}</label>
                            <input placeholder="title" type="text" name="title" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('المعلومات') }}</label>
                            <input placeholder="topic" type="text" name="topic" class="form-control">

                        </div>
                     
                          
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('أضف   ') }}</button>
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
