@extends('layouts.app', [
'class' => '',
'elementActive' => 'contacts'
])
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <h2>عرض  </h2>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-primary" href="{{ route('contact.index') }}"> العودة</a>
                        </div>
                    </div>
                </div>

   <!-- العنوان 
                            الايميل 
                            الهاتف 
                             فيسبوك 
                             تويتر 
                             يوتيوب 
                             انستاغرام  -->
                <div class="row text-right">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>  العنوان : </strong>
                            {{ $contact->address }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الايميل : </strong>
                            {{ $contact->email}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>الهاتف : </strong>
                            {{ $contact->phone}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>فيسبوك : </strong>
                            {{ $contact->f_link}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>تويتر : </strong>
                            {{ $contact->t_link}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>يوتيوب : </strong>
                            {{ $contact->y_link}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>انستاغرام : </strong>
                            {{ $contact->i_link}}
                        </div>
                    </div>
                  
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection
