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
                    <a class="btn btn-primary" href="{{ route('media.index') }}"> العودة</a>
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
            <form class="col-md-12" action="{{ route('media.update', $medias->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-row text-right">
                    <div class="form-group col-md-12">
                            <label>{{ __('  العنوان   ') }}</label>
                            <input placeholder="title" type="text" name="title" value="{{ $medias->title }}" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __(' المعلومات    ') }}</label>
                            <input   value="{{ $medias->details }}" type="text"
                                name="details" class="form-control">
                        </div>
                      
                       
                        <div class="form-group col-md-12">
                            <label>{{ __('الفيديو السابق') }} <br> <i style="font-size:40px"
                                    class="nc-icon nc-image"></i>
                            </label>
                             <video width="320" height="240" controls>
      <source src="{{ asset('storage/images/medias/' . $medias->video) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
                        </div>

                        <div class="form-group col-md-12">
                        <label for="file" style="cursor: pointer;">{{ __(' الفيديو    ') }} <br> <i
                                    style="font-size:40px" class="nc-icon nc-image"></i>
                            </label>
                            <input type="file" accept="image/*" name="video" id="file" onchange="loadFile(event)"
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
