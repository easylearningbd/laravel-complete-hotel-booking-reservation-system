@php
    $blog = App\Models\BlogPost::latest()->limit(3)->get();
@endphp
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">BLOGS</span>
            <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
        </div>
        <div class="row pt-45">

            @foreach ($blog as $item ) 
          
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="{{ url('blog/details/'.$item->post_slug) }}">
                        <img src="{{ asset($item->post_image) }}" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>{{ $item->created_at->format('M d Y')  }}</li>
                            <li><i class='bx bx-user'></i>29K</li>
                            <li><i class='bx bx-message-alt-dots'></i>15K</li>
                        </ul>
                        <h3>
                            <a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_titile }}</a>
                        </h3>
                        <p>{{ $item->short_descp }}</p>
                        <a href="{{ url('blog/details/'.$item->post_slug) }}" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


            
        </div>
    </div>
</div>