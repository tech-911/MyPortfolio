@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact Content -->
    <div id="content" class="site-content">

        <br>
        <br>


        <article>
            <div class="content-1070 center-relative entry-content">
                <div class="content-900 center-relative">
                    <h1 class="entry-title">Contact</h1>
                    <div class="one_half text-justify">
                        Want To Get In Touch Or Need Me On Your Team ?<p>
                        </p>
                        <br>
                        <p>I am always open to new opportunities.

                            Feel free to get in touch with me through the following medium</p>
                        <br>
                        <div class="montserrat">
                            <span style="color: #adadad;">Address:</span>&nbsp; P.M.B 65, CODeL, Minna, Niger State. <br>
                            <span style="color: #adadad;">Phone:</span> +234-8103-966057<br>
                            <span style="color: #adadad;">Hours:</span> 8:00 am – 4:00 pm WAT
                        </div>
                    </div>
                    <div class="one_half last ">
                        <div class="contact-form">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session::get('message') }}
                                </div>
                            @endif
                            <form class="form-group" action="#" method="POST">
                                @csrf
                                <div class="col-auto">
                                    <label for="name" class="visually-hidden" id="name">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        class="@error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-auto">
                                    <label for="email" class="visually-hidden">Email</label>
                                    <input type="email" id="contact-email" name="email" value="{{ old('email') }}"
                                        class="@error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-auto">
                                    <label for="subject" class="visually-hidden" name="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                        class="@error('subject') is-invalid @enderror">
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-auto">
                                    <label for="subject" class="visually-hidden" name="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="6" name="message" value="{{ old('message') }}"
                                        class="@error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-dark mb-3">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </article>


    </div>

@endsection
