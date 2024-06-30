{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./sytles/signupuser.css">
    <title>Nutrition Fitness</title>
</head>

<body>
    <div class="container">
        <nav>
            <div class="nav__logo">Nutrition Fitness</div>
            <ul class="nav__links">
                <li class="link"><a href="#home">Home</a></li>
                <li class="link"><a href="#service">Service</a></li>
                <li class="link"><a href="#trainers">Coach</a></li>
                <li class="link"><a href="#nutritionists">Nutrition</a></li>
                <li class="link"><a href="">Feedback</a></li>
                <li class="link"><a href="#about">About Us</a></li>
            </ul>
            <div class="nav_button">
                <a href="../login.html"><button class="btn">Login</button> </a>

            </div>
        </nav>




            <form method="POST" class="client-registration-form" action="{{ route('register') }}">
                @csrf
   <h2>Client Registration</h2>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>


            <div class="form-group">
                <label for="gender"><i class="fas fa-venus-mars"></i> Gender</label>
                <select name="sex" id="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            {{--  <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
            </div>  --}}
            <div class="form-group">
                <label for="age"><i class="fas fa-calendar"></i> date de nessance</label>
                <input type="date" name="Date_N" id="age" placeholder="Age" required>
            </div>
            <div class="form-group">
                <label for="height"><i class="fas fa-ruler-vertical"></i> Height (cm)</label>
                <input type="number" name="taille" id="height" placeholder="Height (cm)" required>
            </div>
            {{--  <div class="form-group file-upload">
                <label for="profile-picture">
                    <i class="fas fa-image"></i> Upload Profile Picture
                </label>
                <input type="file" id="profile-picture" accept="image/*" required>
            </div>  --}}
            {{--  <div class="objectifs">
                <label>Objectifs</label>
                <div class="objectif">
            <button type="button" class="add-objectif-btn"><i class="fas fa-plus"></i> Add Objectif</button>

                    <input type="text" name="nom" placeholder="Objectif Name" required>
                    <input type="text" name="description" placeholder="Objectif Description" required>
                </div>
            </div>  --}}


            <div class="form-group etat-sante">
                <label for="">Info Santé</label>
                <label for="weight"><i class="fas fa-weight"></i> Weight (kg)</label>
                <input type="number" name="poids" id="weight" placeholder="Weight (kg)" required>

            </div>
            <div class="form-group-mode-de-vie">
                <label for="">Mode de Vie</label>
                <div class="mode-de-vie">
                    <div class="section">
                        <label for="gender"><i class="fas fa-venus-mars"></i> Work Type</label>
                        <select name="worktype" id="gender" required>
                            <option value="Sedentary">Sedentary</option>
                            <option value="LightActivity">Light Activity</option>
                        </select>
                    </div>
                    <div class="section">


                        <label for="gender"><i class="fas fa-venus-mars"></i> natureFood</label>
                        <select name="natureFood" id="gender" required>
                            <option value="Sedentary">Sedentary</option>
                            <option value="LightActivity">Light Activity</option>
                        </select>
                    </div>
                    <div class="section">

                        <label for="gender"><i class="fas fa-venus-mars"></i> activity</label>
                        <select name="activity" id="gender" required>
                            <option value="Sedentary">low</option>
                            <option value="LightActivity">Light Activity</option>
                        </select>
                    </div>
                    <div class="section">
                        <label>Water Intake (liters)</label>
                        <input type="number" name="waterTaken" placeholder="Water Intake (liters)" required>
                    </div>
                    <div class="section">
                        <label>Water Intake (liters)</label>
                        <input type="number" name="sleepHours" placeholder="sleepHours(liters)" required>
                    </div>
                </div>
            </div>



            <button type="submit" class="btn">Register</button>
        </form>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".add-objectif-btn").addEventListener("click", function () {
                var objectifContainer = document.querySelector(".objectifs");
                var newObjectif = document.createElement("div");
                newObjectif.classList.add("objectif");
                newObjectif.innerHTML = `
                    <input type="text" name="objectifs[]" placeholder="Objectif Name" required>
                    <input type="text" name="objectifs[]" placeholder="Objectif Description" required>
                `;
                objectifContainer.appendChild(newObjectif);
            });
        });
    </script>
</body>

</html>





