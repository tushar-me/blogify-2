@extends('layout.app');

@section('title', 'Contact Us')

@section('content')

    {{-- Header --}}
    {{-- <x-header.default-header/> --}}

        {{-- About Section --}}
        <section class="contact">
            <div class="container contact_form">
                <h1>Contact Us</h1>
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="col-12">
                            <label for="message">Message</label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit">Send Message  <i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </section>
        {{-- About Section End --}}

    {{-- Footer --}}
    <x-footer/>

@endsection