<!-- =======================
Services START -->
@php
     $services = \App\Models\Service::all();
@endphp
<section class="position-relative overflow-hidden">
    <div class="container position-relative">
        <!-- Title -->
        <div class="inner-container-small text-center">
            <span class="heading-color small rounded-3 px-3 py-2">🚀 Innovative solutions, Measurable results</span>
            <h2 class="mb-0 mt-4">We specialize in the following services</h2>
        </div>

        <!-- Service list START -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-5 gy-md-7 mt-3">
            @foreach ($services as $service)
                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <div class="card-body pb-0">

                            <!-- Content -->
                            <h5 class="mb-3"><a href="#">{{ $service->service_name }}</a></h5>
                            <p>{{ $service->service_short_desc }}</p>
                        </div>
                        <div class="card-footer mt-auto pt-2">
                            <a class="icon-link icon-link-hover" href="#">Know more<i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Service list END -->
    </div>
</section>
<!-- =======================
Services END -->
