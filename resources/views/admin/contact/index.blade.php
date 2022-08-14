@extends('layouts.app', [
'class' => '',
'elementActive' => 'contacts'
])

<style>
    .table-responsive {
        overflow: hidden !important;
    }

</style>
@section('content')
    <div class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success text-right">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('updated'))
            <div class="alert alert-warning text-right">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('delete'))
            <div class="alert alert-danger text-right">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card">
            <div class="pull-right" style="padding-left:10px">
                <a class="btn btn-success" href="{{ route('contact.create') }}"> إضافة </a>
            </div>
            <div class="card-header text-right">
                <h4 class="card-title"> قائمة </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive text-right">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>الرقم</th>
                            <th>العنوان</th>
                            <th>الايميل</th>
                            <th>الهاتف</th>
                            <th>فيسبوك </th>
                            <th>تويتر</th>
                            <th>يوتيوب</th>
                            <th>انستاغرام</th>

                            <th >الإجراءات</th>
                        </thead>
                        <tbody>


                            @foreach ($contacts as $contacts)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                  
                                    <td>{{ $contacts->address }}</td>
                                    <td>{{ $contacts->email	 }}</td>
                                    <td>{{ $contacts->phone	 }}</td>
                                    <td>{{ $contacts->f_link }}</td>
                                    
                                    <td>{{ $contacts->t_link	 }}</td>
                                    <td>{{ $contacts->y_link	 }}</td>
                                    <td>{{ $contacts->i_link	 }}</td>
                                    <td>
                                        <form action="{{ route('contact.destroy', $contacts->id) }}" method="POST">
                                            <a class="btn btn-info btn-icon  "
                                                href="{{ route('contact.show', $contacts->id) }}"> <i
                                                    class="fa fa-eye"></i></a>

                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('contact.edit', $contacts->id) }}"><i
                                                    class="fa fa-edit"></i></a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div>
             
        </div>
    </div>
@endsection
