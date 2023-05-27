@extends('frontend.main_master')
@section('main')
<!-- Banner Area -->
<div class="banner-area" style="height: 480px;">
    <div class="container">
        <div class="banner-content">
            <h1>Discover a Hotel & Resort to Book a Suitable Room</h1>
            
             
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Form Area -->
<div class="banner-form-area">
    <div class="container">
        <div class="banner-form">
            <form>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK IN TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker" type="text" class="form-control" placeholder="11/02/2020">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK OUT TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker-check" type="text" class="form-control" placeholder="11/02/2020">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label>GUESTS</label>
                            <select class="form-control">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>	
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit" class="default-btn btn-bg-one border-radius-5">
                            Check Arability
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Banner Form Area End -->

<!-- Room Area -->
<div class="room-area pt-100 pb-70 section-bg" style="background-color:#ffffff">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">ROOMS</span>
            <h2>Our Rooms & Rates</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img1.jpg" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                 <h3>
                                     <a href="room-details.html">Luxury Room</a>
                                </h3>
                                <span>320 / Per Night </span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                <ul>
                                    <li><i class='bx bx-user'></i> 4 Person</li>
                                    <li><i class='bx bx-expand'></i> 35m2 / 376ft2</li>
                                </ul>

                                <ul>
                                    <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                    <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                </ul>
                                
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img2.jpg" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                 <h3>
                                     <a href="room-details.html">Single Room</a>
                                </h3>
                                <span>300 / Per Night </span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                <ul>
                                    <li><i class='bx bx-user'></i> 1 Person</li>
                                    <li><i class='bx bx-expand'></i> 25m2 / 276ft2</li>
                                </ul>

                                <ul>
                                    <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                    <li><i class='bx bxs-hotel'></i> Smallsize / Twin</li>
                                </ul>
                                
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img3.jpg" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                 <h3>
                                     <a href="room-details.html">Family Room</a>
                                </h3>
                                <span>400 / Per Night </span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                <ul>
                                    <li><i class='bx bx-user'></i> 6 Person</li>
                                    <li><i class='bx bx-expand'></i> 55m2 / 476ft2</li>
                                </ul>

                                <ul>
                                    <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                    <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                </ul>
                                
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img4.jpg" alt="Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                 <h3>
                                     <a href="room-details.html">Deluxe Room</a>
                                </h3>
                                <span>340 / Per Night </span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                <ul>
                                    <li><i class='bx bx-user'></i> 4 Person</li>
                                    <li><i class='bx bx-expand'></i> 45m2 / 376ft2</li>
                                </ul>

                                <ul>
                                    <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                    <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                </ul>
                                
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room Area End -->

<!-- Book Area Two-->
<div class="book-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="book-content-two">
                    <div class="section-title">
                        <span class="sp-color">MAKE A QUICK BOOKING</span>
                        <h2>We Are the Best in All-time & So Please Get a Quick Booking</h2>
                        <p>
                            Atoli is one of the best resorts in the global market and that's why you will get a luxury life period on the global market. We always
                            provide you a special support for all of our guests and that's will  be the main reason to be the most popular.
                        </p>
                    </div>
                    <a href="#" class="default-btn btn-bg-three">Quick Booking</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="assets/img/book-img2.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Book Area Two End -->

<!-- Services Area Three -->
<div class="services-area-three pt-100 pb-70 section-bg">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">Our Services</span>
            <h2>Our Services on the Global Market for Our Client's Reservation</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-6 col-md-6">
                <div class="service-item-two">
                    <i class="flaticon-hotel"></i>
                    <div class="content">
                        <h3><a href="service-details.html">Hotel Room Reservation into the Desire Places</a></h3>
                        <p>
                            You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                            This will be really effective for us and all & all of the customers & clients.
                        </p>
                        <a href="service-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-item-two">
                    <i class="flaticon-resort"></i>
                    <div class="content">
                        <h3><a href="service-details.html">Resort Reservation Into the Good and Suitable Place</a></h3>
                        <p>
                            You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                            This will be really effective for us and all & all of the customers & clients.
                        </p>
                        <a href="service-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-item-two">
                    <i class="flaticon-buildings"></i>
                    <div class="content">
                        <h3><a href="service-details.html">Weeding Hall Reservation in the Suitable and Good Place</a></h3>
                        <p>
                            You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                            This will be really effective for us and all & all of the customers & clients.
                        </p>
                        <a href="service-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-item-two">
                    <i class="flaticon-businessmen"></i>
                    <div class="content">
                        <h3><a href="service-details.html">Conference Room Reservation in the Suitable and Good Place</a></h3>
                        <p>
                            You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                            This will be really effective for us and all & all of the customers & clients.
                        </p>
                        <a href="service-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area Three End -->

<!-- Team Area Three -->
<div class="team-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">TEAM</span>
            <h2>Let's Meet Up With Our Special Team Members</h2>
        </div>
        <div class="team-slider-two owl-carousel owl-theme pt-45">
            <div class="team-item">
                <a href="team.html">
                    <img src="assets/img/team/team-img1.jpg" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="team.html">Tom Shumate</a></h3>
                    <span>Manager</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="team-item">
                <a href="team.html">
                    <img src="assets/img/team/team-img2.jpg" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="team.html">Carrie Horton</a></h3>
                    <span>Chief Reception Officer</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="team-item">
                <a href="team.html">
                    <img src="assets/img/team/team-img5.jpg" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="team.html">Brian Orlando</a></h3>
                    <span>Housekeeping</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="team-item">
                <a href="team.html">
                    <img src="assets/img/team/team-img4.jpg" alt="Images">
                </a>
                <div class="content">
                    <h3><a href="team.html">Michael Evens</a></h3>
                    <span>Housekeeping</span>
                    <ul class="social-link">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li> 
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area Three End -->

<!-- Testimonials Area Three -->
<div class="testimonials-area-three pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">TESTIMONIAL</span>
            <h2>Our Latest Testimonials and What Our Client Says</h2>
        </div>
        <div class="row align-items-center pt-45">
            <div class="col-lg-6 col-md-6">
                <div class="testimonials-img-two">
                    <img src="assets/img/testimonials/testimonials-img5.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="testimonials-slider-area owl-carousel owl-theme">
                    <div class="testimonials-slider-content">
                        <i class="flaticon-left-quote"></i>
                        <p>
                            You can easily make a good and easily the best service on 
                            this agency. This is one of the best and crucial service into
                            the global world. We will start to make a communications
                            with this agency and saw that, this has made our all of the
                            problems in an easiest way.
                        </p>
                        <ul>
                            <li>
                                <img src="assets/img/testimonials/testimonials-img1.jpg" alt="Images">
                                <h3>Mary Marden</h3>
                                <span>New York City</span>
                            </li>
                        </ul>
                    </div>

                    <div class="testimonials-slider-content">
                        <i class="flaticon-left-quote"></i>
                        <p>
                            You can easily make a good and easily the best service on 
                            this agency. This is one of the best and crucial service into
                            the global world. We will start to make a communications
                            with this agency and saw that, this has made our all of the
                            problems in an easiest way.
                        </p>
                        <ul>
                            <li>
                                <img src="assets/img/testimonials/testimonials-img2.jpg" alt="Images">
                                <h3>Harriet Johnson</h3>
                                <span>London City</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area Three End -->

<!-- FAQ Area -->
<div class="faq-area pt-100 pb-70 section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-content faq-content-bg2">
                    <div class="section-title">
                        <span class="sp-color">FEEL FREE TO ASK QUESTION</span>
                        <h2>Let's Start a Free of Questions and Get a Quick Support</h2>
                        <p>We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How I Will Book a Room or Resort?
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How I Will Be Able to Add on the Admin Portal? 
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    What are the Benefits of These Agencies?
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How I Will Make Payment for Room Book?
                                </a>

                                <div class="accordion-content show">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                        dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                        vel ultricies eu, vulputate at felis.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-img-3">
                    <img src="assets/img/faq/faq-img3.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area End -->

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">BLOGS</span>
            <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-item-img1.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>October 01, 2020</li>
                            <li><i class='bx bx-user'></i>29K</li>
                            <li><i class='bx bx-message-alt-dots'></i>15K</li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Hotel Management is the Best Policy</a>
                        </h3>
                        <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                        <a href="blog-details.html" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-item-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>October 07, 2020</li>
                            <li><i class='bx bx-user'></i>22K</li>
                            <li><i class='bx bx-message-alt-dots'></i>24K</li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">3d Hotel Models Have an Important Model</a>
                        </h3>
                        <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                        <a href="blog-details.html" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/blog-item-img3.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>October 17, 2020</li>
                            <li><i class='bx bx-user'></i>27K</li>
                            <li><i class='bx bx-message-alt-dots'></i>39K</li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Hotel Management Has a Good Future Era</a>
                        </h3>
                        <p>This is one of the best & quality full hotels in the world that will help you to make an excellent study market.</p>
                        <a href="blog-details.html" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@endsection