@extends('layouts.app')

@section('title', 'Confirmation')

@section('content')
<div class="container py-5">
    <h1>Form Submitted Successfully!</h1>

    <p><strong>Name:</strong> {{ session('formData.name') }}</p>
    <p><strong>Email:</strong> {{ session('formData.email') }}</p>
    <p><strong>Phone:</strong> {{ session('formData.phone') }}</p>
    <p><strong>Message:</strong> {{ session('formData.message') }}</p>

    @if(session('fileName'))
        <p><strong>Uploaded File:</strong> {{ session('fileName') }}</p>
    @endif

    @if(request()->cookie('file_uploaded'))
        <p>File uploaded successfully! (Cookie set)</p>
    @endif

    <a href="{{ route('contact.form') }}" class="btn btn-primary mt-3">Go Back</a>
</div>
@endsection
