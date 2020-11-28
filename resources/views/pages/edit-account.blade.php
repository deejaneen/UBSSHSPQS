@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row center">
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">DJANINE TARA TOMELDEN</h5>
                  <h6 class="card-subtitle text-muted" style="text-align: center;">BSCS 3rd Year</h6>
                  <h6 class="card-subtitle text-muted" style="text-align: center;">(Account Type)</h6>
                </div>
                <img width="200px" alt="User Photo"
                src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png"  style="margin: 4em; margin-bottom: 0em;" />
                <div class="card-body">
                    <button type="button" class="btn btn-primary disabled btn-block">Upload Profile Photo</button>
                    <br>
                    <p class="card-text" style="text-align: center;">Member since <em>November 11,2020 </em></p>
                </div>
              </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-8">
            <div class="card mb-3">
                <div class="card-body">
                  <form>
                    <h2 class="card-title">EDIT PROFILE</h2>
                    <fieldset>
                        <div class="form-group">
                            <label for="inputEditAccountStudentID" >Student ID:</label>
                            <input type="id" class="form-control" id="inputEditAccountStudentID"  value="415135" disabled="true">
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <label for="inputEditAccountFirstName">First Name:</label>
                                <input type="text" class="form-control" id="inputEditAccountFirstName" value="Djanine Tara">
                            </div>
                            <div class="col">
                                <label for="inputEditAccountLastName">Last Name:</label>
                                <input type="text" class="form-control" id="inputEditAccountLastName" value="Tomelden">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEditAccountBirthdate">Birthdate:</label>
                            <input type="date" class="form-control" id="inputEditAccountBirthdate"  value="30/03/1998">
                        </div>
                        <div class="form-group">
                            <label for="inputEditAccountGender">Gender:</label>
                            <input type="text" class="form-control" id="inputEditAccountGender"  value="Bisexual">
                        </div>
                        <div class="form-group">
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label for="inputEditAccountPassword">Password: </label>
                                    <input type="password" class="form-control" id="inputEditAccountPassword" value="asdhadlahf">
                                </div>
                                <div class="col">
                                    <label for="inputEditAccountConfirmPassword">Confirm Password: </label>
                                    <input type="password" class="form-control"Hid="inputEditAccountConfirmPassword" placeholder="Confirm Password">
                                </div>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEditAccountEmail">Email Address:</label>
                            <input type="uname" class="form-control" id="inputEditAccountEmail" value="tomeldendjaninetara@gmail.com" disabled="true">
                        </div>
                        <div class="form-group">
                            <label for="inputEditAccountMobileNumber">Mobile Number:</label>
                            <input type="tel" class="form-control" id="inputEditAccountMobileNumber" value="09452110147">
                        </div>
                        <div class="form-group">
                            <label for="inputEditAccountCity">Address:</label>
                            <input type="text" class="form-control" id="inputEditAccountCity" value="22 Baker Street">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" id="btnEditChangesSubmit">Save Changes</button> &nbsp;
                            <button type="submit" class="btn  btn-danger" id="btnEditChangesCancel">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection