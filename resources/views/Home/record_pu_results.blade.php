@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            @if(Session::has('success'))
            <div style="position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem; color: #0f5132;background-color: #d1e7dd;border-color: #badbcc;text-align: center !important;">             
            {{ session('success') }}
            </div>
            @endif
                <div class="card">
                    <div class="card-header">Enter Polling Unit result</div>

                    <div class="card-body">
                        <form method="POST" action="/store_pu_result">
                            @csrf
                            <div class="row mb-3">
                                <label for="polling_unit" class="col-md-4 col-form-label text-md-end">Polling Unit</label>
                                <div class="col-md-6">
                                <select style="radius: 10px !important; margin-top:5px" class="custom-select mb-3" id="lga_id" name="polling_unit_uniqueid" >
                                    <option disabled>Select polling unit</option>
                                    @foreach ($polling_units as $pu)
                                    
                                    <option value="{{ $pu->uniqueid }}">
                                        
                                        {{ $pu->polling_unit_name }}
                                        
                                    </option>
                                    @endforeach
                                </select>

                                </div>
                                @error('polling_unit_uniqueid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="party" class="col-md-4 col-form-label text-md-end">Party</label>
                                <div class="col-md-6">
                                    <select style="radius: 10px !important; margin-top:5px" class="custom-select mb-3" id="lga_id" name="party_abbreviation" >
                                        <option selected>Select Party</option>
                                        @foreach ($party as $paty)
                                        
                                        <option value="{{ $paty->partyid }}">
                                            
                                            {{ $paty->partyname }}
                                            
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('party_abbreviation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Party Score</label>

                                <div class="col-md-6">
                                    <input id="party_score" type="text" class="form-control" name="party_score"  autofocus>

                                    @error('party_score')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Official name</label>

                                <div class="col-md-6">
                                    <input id="Official name" type="text" class="form-control" name="entered_by_user"  autofocus placeholder="Official name">

                                    @error('entered_by_user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary m-3" style="width:auto; margin:0 auto">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection