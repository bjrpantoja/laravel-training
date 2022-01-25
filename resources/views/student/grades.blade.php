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
                    @if(count($grades) == 0)
                    <div class="panel-body">
                        <h5 class="text-danger"><strong><i class="fa fa-info-circle"></i> No incoming document(s) found.</strong></h5>
                    </div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th class="text-center">Midterm Grade</th>
                                    <th class="text-center">Final Term Grade</th>
                                    <th class="text-center">Overall Grade</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($grades as $grade)
								<tr>
									<td>{{ $loop->iteration }}. </td>
                                    <td>{{ $grade['sub_name'] }} ({{ $grade['sub_code'] }})</td>
                                    <td class="text-center">{{ $grade['g_midterm'] }}</td>
                                    <td class="text-center">{{ $grade['g_final'] }}</td>
                                    <td class="text-center">
                                        {{ number_format((($grade['g_midterm'] + $grade['g_final'])) / 2, 2) }}%
                                    </td>
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