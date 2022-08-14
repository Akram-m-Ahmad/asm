@extends('layouts.app', [
'class' => '',
'elementActive' => 'catdet'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض    </h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('catdets.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>  الاسم : </strong>
                            {{ $catdet->name }}
                        </div>
                    </div>
                   
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
