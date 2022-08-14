@extends('layouts.app', [
'class' => '',
'elementActive' => 'statistics'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض     </h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('statistics.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>  العنوان : </strong>
                            {{ $statistics->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> العدد: </strong>
                            {{ $statistics->count }}
                        </div>
                    </div>
                  
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
