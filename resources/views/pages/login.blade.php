@extends('layouts.app')

@section('content')
<br>
<div class="container card border-primary mb-3" style="max-width: 100rem; padding: 4em;">
    <form>
        <h1 style="text-align: center;">
            Member Login
        </h1>
        <fieldset>
            <div class="form-group">
                <label for="inputLoginStudentID">Student ID</label>
                <input type="id" class="form-control" id="inputLoginStudentID" aria-describedby="emailHelp" placeholder="Enter Student ID">
            </div>
            <div class="form-group">
                <label for="inputLoginPassword">Password</label>
                <input type="password" class="form-control" id="inputLoginPassword" placeholder=" Enter Password">
            </div>
            <div>
                <a href="#" style="text-align: center;"><u>Forgot Password?</u></a> <br>
            </div>
              <br>
              <br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" id="btnLoginSubmit" >LOGIN</button>
                </div>
        </fieldset>
    </form>
</div>
@endsection