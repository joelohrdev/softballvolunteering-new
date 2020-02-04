@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Available Events</h1>
                <div class="card-deck-wrapper mt-lg-5">
                    <div class="card-deck">
                        @foreach($events as $event)
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $event->name }}</h4>
                                            <p class="card-text">
                                                {{ \Carbon\Carbon::parse($event->date_time)->toFormattedDateString() }}<br>
                                                {{ \Carbon\Carbon::parse($event->date_time)->format('g:ia') }}</p>
                                            <a href="{{ route('volunteerevents.edit', $event->id) }}" class="btn gradient-light-primary btn-block mt-2 waves-effect waves-light">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
