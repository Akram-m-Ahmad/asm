@extends('layouts.app', [
'class' => '',
'elementActive' => 'media'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض  </h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('media.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>   العنوان: </strong>
                            {{ $medias->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> المعلومات  : </strong>
                            {{ $medias->details}}
                        </div>
                    </div>
                  
              
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الفيديو: </strong>
                            <video width="320" height="240" controls>
      <source src="{{ asset('storage/images/medias/' . $medias->video) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
