@extends('layouts.app', [
'class' => '',
'elementActive' => 'about'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض  نظرة عامة</h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('about.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>  العنوان : </strong>
                            {{ $about->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الإجراءات : </strong>
                            {{ $about->details }}
                        </div>
                    </div>
                  
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
