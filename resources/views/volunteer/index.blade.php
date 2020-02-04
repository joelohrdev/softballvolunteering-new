@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-header">Upcoming Events</div>

                    <div class="card-body">
                        @if (!Auth::user())
                            <div class="alert alert-warning" role="alert">
                               You must login or create a free account to sign up to volunteer.
                            </div>
                        @endif

                        @if ($upcomingEvents->count() > 0)
                            @foreach($upcomingEvents as $ue)
                                <div class="shadow p-3 mb-5 bg-white rounded col-4 text-center">
                                    {{ $ue->name }}<br>
                                    {{ $ue->date_time }}<br>
                                    @if (Auth::user())
                                        <a href="/volunteer/{{ $ue->id }}">Sign Up</a>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p>There are no available volunteer events at this time.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
