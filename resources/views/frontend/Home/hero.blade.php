<!-- =======================
Main Banner START -->
@php
    $heroArticles = App\Models\Article::where('page_article', 'hero')->get();
@endphp

<!-- =======================
Main Banner START -->
<section class="pt-xl-8 pb-0">
    <div class="container pt-2 pt-sm-5">
        <!-- Hero START -->
        <div class="row g-4 g-xxl-5">
            @foreach ($heroArticles as $article)
                <!-- Hero content START -->
                <div class="col-xl-6">
                    <!-- Title -->
                    <h1 class="mb-0 lh-base">{{ $article->title }}</h1>
                    <p class="mb-0 mt-4 mt-xl-5">{{ $article->short_desc }}</p>

                    <!-- Buttons -->
                    <div class="d-flex gap-1 gap-sm-3 flex-wrap mt-4 mt-xl-5">
                        <button class="btn btn-dark" type="button">Get started</button>
                        <button class="btn btn-outline-dark" type="button">Start a 14 days free trial</button>
                    </div>

                    <!-- Features -->
                    <ul class="list-inline d-flex flex-wrap gap-2 gap-sm-4 mb-0 mt-4 mt-xl-5">
                        <li class="list-inline-item heading-color"> <i class="bi bi-stopwatch me-1"></i>24/7 Supports
                        </li>
                        <li class="list-inline-item heading-color"> <i class="bi bi-fire me-1"></i>Free updates</li>
                        <li class="list-inline-item heading-color"> <i class="bi bi-life-preserver me-1"></i>Access
                            premium doc</li>
                    </ul>
                </div>
                <!-- Hero content END -->

                <!-- Hero media START -->
                <div class="col-xl-6 text-center">
                    @if ($article->article_video)
                        <video id="my-video" class="video-js vjs-default-skin" controls preload="auto"
                            style="width: 100%; height:100%;"
                            poster="{{ asset('assets/images/elements/hero-finance.svg') }}"
                            data-setup='{"autoplay": true, "muted": true}'>
                            <source src="{{ asset('storage/' . $article->article_video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @elseif ($article->primary_image)
                        <img src="{{ asset('storage/' . $article->primary_image) }}" alt="hero-img">
                    @else
                        <img src="{{ asset('assets/images/elements/hero-finance.svg') }}" alt="hero-img">
                    @endif
                </div>
                <!-- Hero media END -->
            @endforeach
        </div>
        <!-- Hero END -->

        <hr class="border-primary opacity-2 mt-sm-7 my-5"> <!-- Divider -->

        <!-- Client and skill sets START -->
        <div class="row">
            <!-- Client -->

            @include('frontend.Home.client')

            <!-- Skill sets -->
            <div class="col-md-6 col-lg-5 col-xl-3 ms-auto text-md-end">
                <!-- Title -->
                <p class="mb-0 me-2">Trusted by Customers <span class="badge bg-dark">Active</span></p>

                <!-- Counter -->
                <div class="d-flex justify-content-md-end mt-2 mt-md-4">
                    <!-- Counter item -->
                    <div>
                        <div class="d-flex justify-content-md-end">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="15"
                                data-purecounter-delay="300">0</h4>
                            <span class="h4 mb-0">k+</span>
                        </div>
                        <p class="mb-0">Active users</p>
                    </div>

                    <div class="vr mx-3 mx-sm-4"></div> <!-- Divider -->

                    <!-- Counter item -->
                    <div>
                        <div class="d-flex justify-content-md-end">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="56"
                                data-purecounter-delay="300">0</h4>
                            <span class="h4 mb-0">+</span>
                        </div>
                        <p class="mb-0">Completed projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client and skill sets END -->
    </div>
</section>
<!-- =======================
Main Banner END -->
<style>
    /* Hide controls by default */
    /* Hide controls by default */
    .video-js .vjs-control-bar {
        display: none;
    }

    /* Show controls on hover */
    .video-js:hover .vjs-control-bar {
        display: flex !important;
    }

    /* Additional custom styles for the video player */
    .video-js .vjs-big-play-button {
        background: rgba(0, 0, 0, 0.7);
        border: none;
    }

    .video-js .vjs-slider {
        background: rgba(255, 255, 255, 0.3);
    }

    .video-js .vjs-play-progress {
        background: #e74c3c;
    }

    .video-js .vjs-load-progress {
        background: rgba(255, 255, 255, 0.3);
    }

    .video-js .vjs-volume-control .vjs-volume-bar {
        background: rgba(255, 255, 255, 0.3);
    }
</style>
