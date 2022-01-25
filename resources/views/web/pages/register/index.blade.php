@extends('web.layouts.web')
@section('title')
    Register
@endsection
@section('content')
    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Register</h2>
                    <p>Register for new user</p>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <form action="" method="POST">
                            @csrf
                            <div class="info">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                                            placeholder="Your Name" required>
                                        @error('name')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mt-3 mt-md-0">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                                            placeholder="Your Email" required>
                                        @error('email')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone">Your Phone</label>
                                        <input type="tel" name="phone" class="form-control" id="phone" value="{{ old('phone') }}"
                                            placeholder="Your Phone" required>
                                        @error('phone')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-md-6 mt-5 mt-md-0">
                                        <label for="password">New Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="New Password" required>
                                    </div>
                                    <div class="form-group col-md-6 mt-5 mt-md-0">
                                        <label for="confirmed">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="confirmed"
                                            placeholder="Confirm Your Password" required>
                                        @error('password')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Your Address</label>
                                    <textarea class="form-control" name="address" rows="5" placeholder="Your Address" required>{!! old('address') !!}</textarea>
                                    @error('address')
                                        <p class="italic text-danger p-0">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group text-center mt-3">
                                    <button type="submit" class="btn btn-danger bg-orange">Submit</button>
                                </div>

                                <div class="form-group text-center mt-3">
                                    <p>Already have an account ? <a href="{{ route('login.index') }}" class="text-muted">please login here</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
