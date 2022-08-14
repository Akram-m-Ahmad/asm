@extends('layouts.app', [
'class' => '',
'elementActive' => 'about_str'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض  (هيكلية) نظرة عامة</h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('about_str.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>  العنوان : </strong>
                            {{ $about_str->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الإجراءات : </strong>
                            {{ $about_str->details }}
                        </div>
                    </div>
                  
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
