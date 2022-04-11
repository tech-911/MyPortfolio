@extends('layout')

@section('title', 'Index Page')


@section('content')
    
        <!-- Home Content -->
        <div id="content" class="site-content">
            <div id="blog-wrapper">
                <div class="blog-holder center-relative">


                    <article id="post-1" class="blog-item-holder featured-post">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none; cursor: default;">Date</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">{{ Carbon\Carbon::now()->isoFormat('dddd, MMMM Do YYYY') }}</div>
                                <h2 class="entry-title">
                                    <a href="{{ route('about') }}">Hi, <br> I am Damilare Emmanuel <b>Olatunji</b></a>
                                </h2>
                                <div class="excerpt text-justify">
                                    Self-motivated, and detail-oriented IT expert. Proficient in coding, as well as software testing, debugging and deployment. Fluent in Laravel, Vue, PHP, JavaScript, and other peripheral coding languages. Possessed 1+ years overall experience with five (5) web development projects.<a class="read-more" href="{{ route('about') }}"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>


                    <article id="post-2" class="blog-item-holder">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <h2 class="entry-title">
                                    <a href="{{ route('about.education') }}" >Education</a>
                                </h2>
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none; cursor: default;">Physics Electronics</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="entry-date published">Second Class Upper Hons. (4.34/5.00)</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>


                    <article id="post-3" class="blog-item-holder">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <h2 class="entry-title">
                                    <a href="{{ route('about.expertise') }}">Expertise/Skills</a>
                                </h2>
                                {{-- <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="#">PHP</a>
                                        </li>
                                        <li>
                                            <a href="#">Vue Js and JavaScript</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="entry-date published">Laravel,  PHP,  Vue Js,  JavaScript,  HTML and  CSS</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>



                    <article id="post-4" class="blog-item-holder">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <h2 class="entry-title">
                                    <a href="{{ route('about.experience') }}">Experience</a>
                                </h2>
                                {{-- <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Life</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="entry-date published">Work Experience</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>



                    <article id="post-5" class="blog-item-holder">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <h2 class="entry-title">
                                    <a href="{{ route('about.volunteer_services') }}">Volunteer Services</a>
                                </h2>
                                {{-- <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Coding</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="entry-date published">Invited Talks and Presentations</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>



                    <article id="post-6" class="blog-item-holder">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <h2 class="entry-title">
                                    <a href="{{ route('about.recommendations') }}">Recommendations</a>
                                </h2>
                                {{-- <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="entry-date published">Clients' Report</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="clear"></div>
                {{-- <div class="block load-more-holder">LOAD MORE ENTRIES</div> --}}
            </div>

            <div class="featured-image-holder">
                <div class="featured-post-image" style="background-image: url('{{ asset('demo-images/featured-image.jpg') }}');"></div>

            </div>
            <div class="clear"></div>
        </div>


@endsection     
