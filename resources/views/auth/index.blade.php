<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}" />

</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            #intro {
                background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                height: 100vh;
            }
            /* Height for devices larger than 576px */
            
            @media (min-width: 992px) {
                #intro {
                    margin-top: -58.59px;
                }
            }
            
            .navbar .nav-link {
                color: #fff !important;
            }
        </style>

  
        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form class="bg-white rounded shadow-5-strong p-5" method="POST" action="/login">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" value="{{ old('username') }}" autocomplete="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username"  autofocus required >
                                    <label class="form-label" for="form1Example1">Username</label>
                                    @error('username')
                                    <div class="input-group">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>


                                 <!-- 2 column grid layout for inline styling -->
                                 <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <label class="form-check-label" for="form1Example3">
                                            <input type="checkbox" id="remember_token" name="remember_token" {{ old('remember_token') ? 'checked' : '' }}> {{ __('Remember Me') }}   
                      </label>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
</body>

</html>