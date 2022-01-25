@extends('web.layouts.web')
@section('title')
    Detail Profil
@endsection
@section('content')
    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Detail Profile</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="email">
                                        <i class="bi bi-info"></i>

                                        <h4>Name:</h4>
                                        <p>{{ $user->name }}</p>
                                    </div>
                                    <div class="email">
                                        <i class="bi bi-envelope"></i>

                                        <h4>Email:</h4>
                                        <p>{{ $user->email }}</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Phone:</h4>
                                        <p>{{ $user->phone }}</p>
                                    </div>

                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Address:</h4>
                                        <p>{!! $user->address !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center align-self-center">
                                    @if ($user->image)
                                        <img src="{{ asset("storage/{$user->image}") }}" class="img-fluid rounded w-75"
                                            alt="image">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('profile.edit') }}" class="btn btn-danger bg-orange">Edit Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
