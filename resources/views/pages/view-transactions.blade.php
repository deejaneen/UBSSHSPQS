@extends('layouts.app')

@section('content')
<br>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        &nbsp;
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <button type="button" class="btn btn-primary">Month</button>
            <div class="btn-group show" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                <div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="#">January</a>
                    <a class="dropdown-item" href="#">February</a>
                    <a class="dropdown-item" href="#">March</a>
                    <a class="dropdown-item" href="#">April</a>
                    <a class="dropdown-item" href="#">May</a>
                    <a class="dropdown-item" href="#">June</a>
                    <a class="dropdown-item" href="#">July</a>
                    <a class="dropdown-item" href="#">August</a>
                    <a class="dropdown-item" href="#">September</a>
                    <a class="dropdown-item" href="#">October</a>
                    <a class="dropdown-item" href="#">November</a>
                    <a class="dropdown-item" href="#">December</a>
                </div>
            </div>
        </div>      &nbsp;     
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Date</button>
            <div class="btn-group show" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                <div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <a class="dropdown-item" href="#">3</a>
                    <a class="dropdown-item" href="#">...</a>
                </div>
            </div>
        </div>        &nbsp;     
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Year</button>
            <div class="btn-group show" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                <div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="#">2020</a>
                    <a class="dropdown-item" href="#">2021</a>
                    <a class="dropdown-item" href="#">2022</a>
                    <a class="dropdown-item" href="#">...</a>
                </div>
            </div>
        </div>          &nbsp;     
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Status</button>
            <div class="btn-group show" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
                <div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                    <a class="dropdown-item" href="#">Printed</a>
                    <a class="dropdown-item" href="#">In queue</a>
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#">...</a>
                </div>
            </div>
        </div>         
    </form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">File</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table>
    
<div>
    <ul class="pagination pagination-sm">
      <li class="page-item disabled">
        <a class="page-link" href="#">&laquo;</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">4</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">5</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">&raquo;</a>
      </li>
    </ul>
  </div>
@endsection