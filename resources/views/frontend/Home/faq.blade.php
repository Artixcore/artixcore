<!-- =======================
About accordion START -->
@php
    $faqs = \App\Models\mFAQ::latest()->get();
@endphp
<section>
    <div class="container">
        <div class="row align-items-start">
            <!-- About feature image -->
            <div class="col-md-6 col-xl-5 position-relative">
                <!-- Image -->
                <img src="https://img.freepik.com/free-photo/3d-render-robot-sitting-mouse_1048-5629.jpg" class="rounded"
                    alt="about-img">
            </div>
            <!-- About feature content -->
            <div class="col-md-6 position-relative ms-auto mt-5 mt-md-0">
                <h2 class="mb-4 mb-md-5">Frequently Asked Questions</h2>

                <!-- Accordion START -->
                <div class="accordion accordion-icon accordion-icon-start accordion-bg-light" id="accordionFaq">

                    @if (isset($faqs) && count($faqs) > 0)
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item mb-3">
                                <div class="accordion-header font-base" id="heading-{{ $index }}">
                                    <button
                                        class="accordion-button fw-semibold rounded ps-6 {{ $index !== 0 ? 'collapsed' : '' }}"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse-{{ $index }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </div>
                                <!-- Body -->
                                <div id="collapse-{{ $index }}"
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="heading-{{ $index }}" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body mt-3 pb-0">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted">No FAQ available.</p>
                    @endif

                </div>
                <!-- Accordion END -->
            </div>

        </div> <!-- Row END -->
    </div>
</section>
<!-- =======================
About accordion END -->
