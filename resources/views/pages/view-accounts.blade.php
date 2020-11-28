@extends('layouts.app')

@section('content')
<br>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        &nbsp; 
    </form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Gender</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
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