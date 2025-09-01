@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." value="{{ old('name') }}" required />
                            <label for="name">Full name</label>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" value="{{ old('phone') }}" required />
                            <label for="phone">Phone number</label>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Message input -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" required>{{ old('message') }}</textarea>
                            <label for="message">Message</label>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- File Upload -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="file" type="file" name="file" />
                            <label for="file">Upload File</label>
                            @error('file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
