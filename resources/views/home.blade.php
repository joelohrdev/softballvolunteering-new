@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">Upcoming Events</div>

                <div class="card-body">
                    @foreach($bookedEvents as $be)
                        <div class="shadow p-3 mb-5 bg-white rounded col-4 text-center">
                            {{ $be->name }}<br>
                            {{ $be->date_time }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-header">Past Events</div>

                <div class="card-body">
                   @foreach($players as $player)
                       <p>{{ $player->first_name }}</p>
                    @endforeach
                    @if ($pastEvents->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                @foreach($pastEvents as $pe)
                                    <tr @if($pe->attended == 'Did Not Attend') class="table-danger" @endif>
                                        <td>{{ $pe->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($pe->date_time)->format('m-d-y g:ia') }}</td>
                                        <td>{{ $pe->attended }}</td>
                                        <td>{{ $pe->notes }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>You have no past events.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
