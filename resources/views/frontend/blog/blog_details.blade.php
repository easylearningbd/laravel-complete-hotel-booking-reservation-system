@extends('frontend.main_master')
@section('main')
 <!-- Inner Banner -->
 <div class="inner-banner inner-bg3">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Blog Details </li>
            </ul>
            <h3>{{ $blog->post_titile }}</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Blog Details Area -->
<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-article">
                    <div class="blog-article-img">
                        <img src="{{ asset($blog->post_image) }}" alt="Images" style="width: 1000px; height:600px;">
                    </div>

                    <div class="blog-article-title">
                        <h2>{{ $blog->post_titile }}</h2>
                        <ul>
                            
                            <li>
                                <i class='bx bx-user'></i>
                                {{ $blog['user']['name'] }}
                            </li>

                            <li>
                                <i class='bx bx-calendar'></i>
                                {{ $blog->created_at->format('M d Y')  }}
                            </li>
                        </ul>
                    </div>
                    
                    <div class="article-content">
                        <p>
                            {!! $blog->long_descp !!}
                        </p>
                    </div>

                    <div class="comments-wrap">
                        <h3 class="title">Comments</h3>
                        <ul>
                            <li>
                                <img src="assets/img/blog/blog-profile1.jpg" alt="Image">
                                <h3>Megan Fox</h3>
                                <span>October 14, 2020, 12:10 PM</span>
                                <p>
                                    Engineering requires many building blocks and tools. To produce real world 
                                    results & one must  mathematics and sciences to tangible problems and we 
                                    are one of the  best company in the world. 
                                </p>
                                 
                            </li>
                            
                            <li>
                                <img src="assets/img/blog/blog-profile2.jpg" alt="Image">
                                <h3>Mike Thomas</h3>
                                <span>October 14, 2020, 11:30 AM</span>
                                <p>
                                    Engineering requires many building blocks and tools. To produce real world 
                                    results & one must  mathematics and sciences to tangible problems and we 
                                    are one of the  best company in the world. 
                                </p>
                                 
                            </li>
                        </ul>
                    </div>

                    <div class="comments-form">
                        <div class="contact-form">
                            <h2>Leave A Comment</h2>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="websit" class="form-control" required data-error="Your website" placeholder="Your website">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                   
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three">
                                            Post A Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="side-bar-wrap">
                    <div class="search-widget">
                        <form class="search-form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="services-bar-widget">
                        <h3 class="title">Blog Category</h3>
                        <div class="side-bar-categories">
                            @foreach ($bcategory as $cat) 
                            <ul>
                                <li>
                                    <a href="#">{{ $cat->category_name }}</a>
                                </li> 
                            </ul>
                            @endforeach
                        </div>
                    </div>

                    <div class="side-bar-widget">
                        <h3 class="title">Recent Posts</h3>
                        <div class="widget-popular-post">
                            
                            @foreach ($lpost as $post)   
                            <article class="item">
                                <a href="blog-details.html" class="thumb">
                <img src="{{ asset($post->post_image) }}" alt="Images" style="width: 80px; height:80px;">      
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            {{ $post->post_titile }}
                                        </a>
                                    </h4>
                                    <ul>
                                        <li>
                                            <i class='bx bx-user'></i>
                                            29K
                                        </li>
                                        <li>
                                            <i class='bx bx-message-square-detail'></i>
                                            15K
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach

                          
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Area End -->

@endsection