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
                            <div class="entry-date published">{{ Carbon\Carbon::now()->isoFormat('dddd, MMMM Do YYYY') }}
                            </div>
                            <h2 class="entry-title">
                                <a href="{{ route('about') }}">Hi, <br> I am Babatunde Eric <b>Olatunji</b></a>
                            </h2>
                            <div class="excerpt text-justify">
                                Self-motivated, and detail-oriented IT Learner. Aspiring to be Proficient in coding, as well
                                as software testing, debugging and deployment. Have skills in JavaScript, and other
                                peripheral coding languages.<a class="read-more" href="{{ route('about') }}"></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </article>


                <article id="post-2" class="blog-item-holder">
                    <div class="entry-content relative">
                        <div class="content-1170 center-relative">
                            <h2 class="entry-title">
                                <a href="{{ route('about.education') }}">Education</a>
                            </h2>
                            <div class="cat-links">
                                <ul>
                                    <li>
                                        <a href="#" style="pointer-events: none; cursor: default;">Mechatronics
                                            Engineering</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="entry-date published">B.Eng In view</div>
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
                            <div class="entry-date published">Embeded system, CAD design, 2D graphics Design, React Js,
                                JavaScript, HTML and CSS</div>
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
            <div class="featured-post-image" style="background-image: url('{{ asset('demo-images/home1.jpg') }}');"></div>

        </div>
        <div class="clear"></div>
    </div>


@endsection
