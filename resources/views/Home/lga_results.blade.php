@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect02">
                <option selected>Choose...</option>
                @foreach ($lgas as $lga)
                <option value="{{ $lga->uniqueid }}">{{ $lga->lga_name }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">LGA</label>
            </div>
            </div>
        </div>
    </div>
</div>


<script>
       
</script>

 @endsection
