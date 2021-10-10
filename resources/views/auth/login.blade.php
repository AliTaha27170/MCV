@extends('layouts.app')
@section('content')

<br>


<div class="ta-c">
    <h1 class="wide-title"></h1><br><br>
</div>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <br>
        <label class="i-l" for="">Email Address:</label>
        <input type="email" class="input1 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br><br>
        <label class="i-l" for="">Password:</label>
        <input type="password" class="input1 @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br><br>
        <div class="ta-c">
            <button type="submit" class="btn1">Login</button>
        </div>
    </form>
</div>
<div class="col-md-4"></div>

</div>
        
@endsection