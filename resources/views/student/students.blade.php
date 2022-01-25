@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h3 class="display-4">{{ $view_title }}</h3>

                {{-- <div class="row">
                    @foreach($stud_det as $det)
                        <div class="col-4">
                            <div class="card">
                                <center><br><img alt="" src="{{ asset($det['s_prof_pic']) }}" width="180" height="180"></center>
                                <div class="card-body">
                                    <h4>Student Name: {{ $det['s_fname'] }} {{ $det['s_mname'] }} {{ $det['s_lname'] }}</h4><br>
                                    <label>Student Number: {{ $det['s_number'] }}</label><br>
                                    <label>Course: {{ $det['s_course'] }}</label><br>

                                    <hr>
                                    Personal Details:
                                    <label>Birthdate: {{ $det['s_birthdate'] }}</label><br>
                                    <label>Address: {{ $det['s_address'] }}</label><br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}

                
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <center><br><img alt="" src="{{ asset($stud_det['s_prof_pic']) }}" width="180" height="180"></center>
                            <div class="card-body">
                                <h4>Student Name: {{ $stud_det['s_fname'] }} {{ $stud_det['s_mname'] }} {{ $stud_det['s_lname'] }}</h4><br>
                                <label>Student Number: {{ $stud_det['s_number'] }}</label><br>
                                <label>Course: {{ $stud_det['s_course'] }}</label><br>

                                <hr>
                                Personal Details:
                                <label>Birthdate: {{ $stud_det['s_birthdate'] }}</label><br>
                                <label>Address: {{ $stud_det['s_address'] }}</label><br>
                                
                                <hr>                     
                                <center>
                                    <a href="{{ route('Enrolled Subjects') }}">View Enrolled Subjects</a> || 
                                    <a href="{{ route('Student Grades') }}">View Student Grades</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>

            </div>
        </div>
    </div>            
@endsection