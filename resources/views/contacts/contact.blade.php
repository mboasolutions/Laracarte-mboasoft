@extends('layouts.default', ['title' => 'Contact'])


@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>

                <p><div class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</div></p>

                <form method="POST" action="{{route('contact_path')}}" class="justify-content-center" novalidate>
{{--                    {{ csrf_field() }}--}}
                    @csrf

                    <div class="form-group">
                        <label for="name"  class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control @error('email') is-invalid @enderror" required autocomplete="message" name="message" id="message" rows="10" cols="10">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block">Submit &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop


