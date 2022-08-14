@extends('layouts.app', [
'class' => '',
'elementActive' => 'pre_project'
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
                            <a class="btn btn-primary" href="{{ route('pre_project.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>   العنوان: </strong>
                            {{ $pre_projects->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> المعلومات  : </strong>
                            {{ $pre_projects->details}}
                        </div>
                    </div>
                  
              
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الصورة: </strong>
                            <img src="{{ asset('storage/images/pre_projects/' . $pre_projects->image) }}" width="200px">
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
