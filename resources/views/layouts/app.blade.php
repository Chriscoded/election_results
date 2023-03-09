<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Election Results') }}</title>

          <!-- Styles -->
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    
    <link rel="stylesheet" type="text/css" href="{{ url('/bootstrap/css/bootstrap.min.css') }}" />
    
   

    
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Election Results') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <li>
                            <a class="navbar-brand" href="{{ url('/pu_results') }}">
                               Polling Unit Results
                            </a>
                        </li>
                        <li>
                        <select style="radius: 10px !important; margin-top:5px" class="custom-select mb-3" id="lga_id" >
                            <option selected>Choose LGA</option>
                            @foreach ($lgas as $lga)
                            
                            <option value="/lga_result/{{ $lga->lga_id }}">
                                  
                                    {{ $lga->lga_name }}
                                
                            </option>
                            @endforeach
                        </select>
                        </li>
                        
                        <li>
                            <a class="nav-link"  href="{{ url('record_pu_results') }}">
                               Submit Results
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row flex-nowrap">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('jquery/jquery.js') }}" ></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" ></script>
    <script>
        
        $('#lga_id').change(function() {  
            window.location = $(this).val();  
        }); 
    </script>
    
</body>
</html>
