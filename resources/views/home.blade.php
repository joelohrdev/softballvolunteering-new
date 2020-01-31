@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">Upcoming Events</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($bookedEvents as $be)
                        {{ $be->name }}<br>
                        {{ $be->date_time }}
                    @endforeach
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-header">Past Events</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach($pastEvents as $pe)
                                <tr>
                                    <td>{{ $pe->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($pe->date_time)->format('m-d-y g:ia') }}</td>
                                    <td>
                                        @if ($pe->attend == '1')
                                            Attended
                                        @else
                                            Did Not Attend
                                        @endif
                                    </td>
                                    <td>{{ $pe->notes }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
