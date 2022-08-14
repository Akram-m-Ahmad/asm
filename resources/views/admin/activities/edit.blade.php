@extends('layouts.app', [
'class' => '',
'elementActive' => 'activities'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h5 class="title">{{ __('تعديل بيانات  ') }}</h5>
                </div>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('activities.index') }}"> العودة</a>
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
            <form class="col-md-12" action="{{ route('activities.update', $activity->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-row text-right">
                        <div class="form-group col-md-12">
                            <label>{{ __('  الاسم   ') }}</label>
                            <input placeholder="title" type="text" name="name"value="{{ $activity->name }}" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('المعلومات') }}</label>
                            <input placeholder="details" type="text" name="details"value="{{ $activity->details }}" class="form-control">

                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('التاريخ') }}</label>
                            <input placeholder="details" type="date" name="date"value="{{ $activity->date}}" class="form-control">

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
