@extends('pages.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h1 class="display-4">Welcome to Contacts Page</h1>
                <p class="lead">Lorem impsum</p>

                <div class="row">
                    @foreach($contact_details as $contact)
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $contact['name'] }}</h3>
                                    <small>{{ $contact['email'] }}</small>
                                    <small>{{ $contact['contact_no'] }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection