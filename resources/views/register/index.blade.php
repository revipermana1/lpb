@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="post">
                @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-4">Already have account? <a href="/login" class="text-decoration-none">Sign in Here!</a></small>
          </main>
    </div>
</div>



@endsection
