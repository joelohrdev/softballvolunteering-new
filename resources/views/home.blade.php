@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Upcoming Events</h1>
            <div class="card-deck-wrapper mt-lg-5">
                <div class="card-deck">
                    @foreach($merged as $be)
                        <div class="col-3">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $be->name }}</h4>
                                        <p class="card-text">{{ $be->volunteereventable->first_name }}<br>
                                            {{ \Carbon\Carbon::parse($be->date_time)->toFormattedDateString() }}<br>
                                            {{ \Carbon\Carbon::parse($be->date_time)->format('g:ia') }}</p>
                                        <p class="card-text"><small class="text-muted">Signed up {{ \Carbon\Carbon::parse($be->created_at)->diffForHumans() }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row mt-lg-5" id="table-hover-animation">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Past Events</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="text-muted">If you have any questions about attendance please email <a href="mailto:sherryl.clgfs@gmail.com">sherryl.clgfs@gmail.com</a></p>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-hover-animation mb-0">
                                        <tbody>
                                        @foreach($pastMerged as $pe)
                                            <tr scope="row">
                                                <td>{{ $pe->volunteereventable->first_name }}</td>
                                                <td>{{ $pe->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($pe->date_time)->format('m-d-y g:ia') }}</td>
                                                <td>
                                                    @if ($pe->attended == 1)
                                                        <span class="text-success"><i class="mr-10 feather icon-award"></i>Attended</span>
                                                    @else
                                                        <span class="text-danger"><i class="mr-10 feather icon-alert-circle"></i> Did Not Attend</span>
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
            </div>
        </div>
    </div>
</div>
@endsection
