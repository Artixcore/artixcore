<!-- =======================
Testimonials START -->
@php
    // Fetch client reviews from the database
    $reviews = \App\Models\ClientReview::all();
@endphp

<section>
    <div class="container">
        <div class="row">
            <!-- Testimonials content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="heading-color bg-light small rounded-3 px-3 py-2">💖 Real results from real clients</span>
                <!-- Title -->
                <h2 class="my-4">See how we've helped our clients succeed</h2>

                <!-- Slider START -->
                <div class="swiper mt-2 mt-md-4" data-swiper-options='{
                    "spaceBetween": 30,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints": {
                        "576": {"slidesPerView": 2}
                    }}'>

                    <div class="swiper-wrapper pb-5" id="reviews-container">
                        <!-- Dynamic review items will be appended here -->
                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="card bg-transparent h-100">
                                    <div class="card-body p-0">
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-2">
                                            {!! getStars($review->star_rating) !!}
                                        </ul>
                                        <!-- Content -->
                                        <p class="heading-color fw-normal">{{ $review->review }}</p>
                                    </div>
                                    <div class="card-footer bg-transparent p-0">
                                        <!-- Avatar -->
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <!-- If image exists, show it, otherwise a default image -->
                                                <img class="avatar-img rounded" src="{{ $review->image ? asset('storage/'.$review->image) : 'default-avatar.jpg' }}" alt="avatar">
                                            </div>
                                            <p class="mb-0">By {{ $review->name }}</p>
                                            @if ($review->position)
                                                <p class="mb-0">{{ $review->position }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination swiper-pagination-primary position-relative text-start"></div>
                </div>
                <!-- Slider END -->
            </div>

            <!-- Testimonials image -->
            <div class="col-sm-10 col-lg-6 col-xl-5 position-relative ms-xl-auto">
                <!-- Image -->
                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-api-illustration_23-2149365021.jpg" class="rounded" alt="testimonial-img">
            </div>
        </div>
    </div>
</section>
<!-- =======================
Testimonials END -->

@php
    // Function to generate star rating
    function getStars($rating) {
        $stars = '';
        for ($i = 0; $i < 5; $i++) {
            if ($i < $rating) {
                $stars .= '<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>';
            } else if ($i === floor($rating) && $rating % 1 !== 0) {
                $stars .= '<li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>';
            } else {
                $stars .= '<li class="list-inline-item me-0"><i class="fas fa-star text-muted"></i></li>';
            }
        }
        return $stars;
    }
@endphp
