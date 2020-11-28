@extends('layouts.app')

@section('content')
<br>
    <h1>support</h1>
    <div class="card border-primary mb-3" style="max-width: 50rem;">
        <div class="card-header">HAVE A PROBLEM THAT NEEDS FIXING?</div>
        <div class="card-body">
            <p class="card-text">> Write us a <a onclick="myFunction()">Ticket</a></p>
            <hr>
            <div class="card border-primary mb-3" id="myDIV">
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
        </div>
        <div class="card-header">Ticket History</div>
      
        <form class="form-inline">
            &nbsp;
           
            <div class="btn-group col-3" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary">Ticket Satus</button>
                <div class="btn-group show" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                    <div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                        <a class="dropdown-item" href="#">All</a>
                        <a class="dropdown-item" href="#">New</a>
                        <a class="dropdown-item" href="#">Open</a>
                        <a class="dropdown-item" href="#">Pending</a>
                        <a class="dropdown-item" href="#">Solved</a>
                        <a class="dropdown-item" href="#">Closed</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p>Page 1 of 1</p>
            </div>
            <div class="col-3">
                <p>Total Tickets: 1</p>
            </div>
        </form> 
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th scope="row">Active</th>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection