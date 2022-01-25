@extends('web.layouts.web')
@section('title')
    List Users
@endsection
@section('content')
    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>List Users</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <form method="GET">
                            <div class="input-group mb-3">
                                <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                                    placeholder="Search by name or email">
                                <span class="input-group-text p-0" id="basic-addon2">
                                    <button class="btn btn-danger btn-orange rounded-0">Find</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    @forelse ($users as $user)
                        <div class="col-md-6 d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="info">
                                <div class="row">
                                    <div class="col-md-5">
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

                                        <div class="address">
                                            <i class="bi bi-calendar"></i>
                                            <h4>Date Joine:</h4>
                                            <p>{{ $user->created_at->format('l, d M Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 text-center align-self-center">
                                        @if ($user->image)
                                            <img src="{{ asset("storage/{$user->image}") }}"
                                                class="img-fluid rounded w-75" alt="image">
                                        @else
                                            <p>No Image</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-3 text-center">
                            <p>Data Not Found</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    {!! $users->appends(["q" => request("q")])->links() !!}
                </div>
            </div>
        </section>
    </main>
@endsection
