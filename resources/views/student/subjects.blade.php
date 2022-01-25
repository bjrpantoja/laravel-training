@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h3 class="display-4">{{ $view_title }}</h3>
            <p class="lead"></p>

            <div class="row">
                <div class="panel panel-default panel-plain">
					<div class="pull-right">
                    </div>
                    @if(count($subjects) == 0)
                    <div class="panel-body">
                        <h5 class="text-danger"><strong><i class="fa fa-info-circle"></i> No incoming document(s) found.</strong></h5>
                    </div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Room</th>
                                    <th>Professor</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($subjects as $subj)
								<tr>
									<td>{{ $loop->iteration }}. </td>
                                    <td>{{ $subj['sub_name'] }}</td>
                                    <td>{{ $subj['sub_code'] }}</td>
                                    <td>{{ $subj['sub_day'] }}</td>
                                    <td>{{ $subj['sub_time'] }}</td>
                                    <td>{{ $subj['sub_room'] }}</td>
                                    <td>{{ $subj['sub_prof'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection