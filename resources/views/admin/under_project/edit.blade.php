@extends('layouts.app', [
'class' => '',
'elementActive' => 'countries'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('تعديل بيانات ') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('under_project.index') }}"> العودة</a>
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
            <form class="col-md-12" action="{{ route('under_project.update', $under_projects->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-row text-right">
                    <div class="form-group col-md-12">
                            <label>{{ __('  العنوان   ') }}</label>
                            <input placeholder="title" type="text" name="title" value="{{ $under_projects->title }}" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __(' المعلومات    ') }}</label>
                            <input   value="{{ $under_projects->details }}" type="text"
                                name="details" class="form-control">
                        </div>
                      
                       
                        <div class="form-group col-md-12">
                            <label>{{ __(' الصورة السابقة') }} <br> <i style="font-size:40px"
                                    class="nc-icon nc-image"></i>
                            </label>
                            <img src="{{ asset('storage/images/under_projects/' . $under_projects->image) }}" width="200px">

                        </div>

                        <div class="form-group col-md-12">
                            <label for="file" style="cursor: pointer;">{{ __('اختر صورة  ') }} <br> <i
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
                            <button type="submit" class="btn btn-info btn-round">{{ __('تعديل البيانات') }}</button>
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
