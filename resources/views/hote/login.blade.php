@extends('hote.layouts')

@section('contenu')
<div class="col-md-7">
    <h3>Connexion à <strong>Awlo App</strong></h3>
        <p class="mb-4">
            @if(session('erreurLogin'))
                <div class="alert alert-danger"> {{ session('erreurLogin') }} </div>
            @endif
        </p>
        <form action="{{ route('hote.login.post') }}" method="post">
            @csrf
            
            <div class="form-group first">
                <label for="username">Adresse mail</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" value="{{ old('email') }}" id="username">
                @error('email')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
            <div class="form-group last mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password">
                @error('password')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
            
            <div class="d-flex mb-5 align-items-center">
                
                <span class="ml-auto"><a href="#" class="forgot-pass"> - </a></span> 
            </div>

            <input type="submit" value="Se connecter" class="btn btn-block btn-primary">

        </form>
    </div>
@endsection