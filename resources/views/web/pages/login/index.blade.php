@extends('web.layouts.web')
@section('title')
    Login
@endsection
@section('content')
    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Login</h2>
                    <p>Please login to start the session</p>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            @if (session('success'))
                                <div class="alert alert-success mb-3">{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger mb-3">{{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label for="name">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="****" required>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <button type="submit" class="btn btn-danger bg-orange">Submit</button>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <p>Don't have an account yet ? <a href="{{ route('register.index') }}" class="text-muted">Register here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
