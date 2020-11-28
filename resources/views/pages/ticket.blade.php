@extends('layouts.app')

@section('content')
<br>
    <div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header">NEW TICKET</div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" class="form-control" id="inputTicketSubject" aria-describedby="emailHelp" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="txtAreaNewTicket" rows="3" placeholder="Description"></textarea>
            </div>
            <button type="button" class="btn btn-outline-danger">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
            <hr>
        </div>
    </div>
@endsection