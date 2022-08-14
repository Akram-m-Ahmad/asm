@extends('layouts.app', [
'class' => '',
'elementActive' => 'users'
])
@section('content')

    <div class="content">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h5 class="title">{{ __('Add New User') }}</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class="col-md-12" action="{{ route('users.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('Phone number') }}</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>{{ __('Email') }}</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label>{{ __('password') }}</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label>{{ __('Role') }}</label>
                            <select name="role" class="custom-select custom-select-md">
                             @foreach ($roles as $role)
                                 <option value="{{$role->name}}">{{$role->name}}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('Add User') }}</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
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
