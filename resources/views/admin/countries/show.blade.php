@extends('layouts.app', [
'class' => '',
'elementActive' => 'countries'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2> عرض الدولة</h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('countries.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>


                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الاسم بالانجليزي: </strong>
                            {{ $country->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الاسم بالعربي: </strong>
                            {{ $country->name_ar }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>رمز الدولة: </strong>
                            {{ $country->country_code }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>نسبة الضريبة: </strong>
                            {{ $country->tax_percentage }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>وحدة السعر بالانجليزي: </strong>
                            {{ $country->unit }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>وحدة السعر بالعربي: </strong>
                            {{ $country->unit_ar }}
                        </div>
                    </div>
              
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الصورة: </strong>
                            <img src="{{ asset('storage/images/countries/' . $country->flag_icon) }}" width="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
