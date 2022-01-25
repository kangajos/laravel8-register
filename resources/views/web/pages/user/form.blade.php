@extends('web.layouts.web')
@section('title')
    Edit Profile
@endsection
@section('content')
    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Edit Profile</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="info">
                                <div class="row justify-content-center mb-3">
                                    <div class="col-md-8 text-center align-self-center">
                                        @if ($user->image)
                                            <img src="{{ asset("storage/{$user->image}") }}" class="img-fluid rounded w-50"
                                                alt="image">
                                        @else
                                            <p>No Image</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="image">Photo (max size 2MB)</label>
                                        <input type="file" name="image" class="form-control form-control-file" id="image" accept="image/*">
                                        @error('image')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name', $user->name) }}" placeholder="Name" required>
                                        @error('name')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mt-3 mt-md-0">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ old('email', $user->email) }}" placeholder="Email" required>
                                        @error('email')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="phone" class="form-control" id="phone"
                                            value="{{ old('phone', $user->phone) }}" placeholder="Phone" required>
                                        @error('phone')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-md-6 mt-5 mt-md-0">
                                        <label for="password">New Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="New Password">
                                    </div>
                                    <div class="form-group col-md-6 mt-5 mt-md-0">
                                        <label for="confirmed">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="confirmed" placeholder="Confirm Password">
                                        @error('password')
                                            <p class="italic text-danger p-0">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" rows="5" placeholder="Address"
                                        required>{!! old('address', $user->address) !!}</textarea>
                                    @error('address')
                                        <p class="italic text-danger p-0">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group text-center mt-3">
                                    <button type="submit" class="btn btn-danger bg-orange">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
