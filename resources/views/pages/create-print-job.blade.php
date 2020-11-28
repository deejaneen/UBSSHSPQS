@extends('layouts.app')

@section('content')
<br>
    <div class="form-group">
        <label for="exampleInputFile">Create New Print Job</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    </div>
    <div class="form-group">
        <label for="inputPageRange">Pages to Print</label>
        <fieldset class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                All
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
               Current
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                Custom
              </label>
            </div>
          </fieldset>
        <input type="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
    </div>
@endsection