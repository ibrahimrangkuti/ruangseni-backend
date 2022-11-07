<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-2.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-3.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
    <div class="media-entry">
        <a href="detail-karya-2.html">
            <img src="assets/images/karya-4.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            <a href="detail-karya-2.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>

<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-5.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-6.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-7.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
    <div class="media-entry">
        <a href="index.html">
            <img src="assets/images/karya-8.jpg" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">May 14, 2020</span>
            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
            <a href="single.html" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
@foreach ($posts as $post)
@if ($post->status == 1)
<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
    <div class="media-entry">
        <a href="index.html">
            <img src="{{ asset($post->img_url) }}" alt="Image" class="img-fluid">
        </a>
        <div class="bg-white m-body">
            <span class="date">{{ $post->created_at->diffForHumans() }}</span>
            <h3><a href="index.html">{{ $post->title }}</a></h3>
            {{-- <p>{{ $post->body->limit($post->body, 200) }}</p> --}}
            <a href="{{ route('show', $post->id) }}" class="more d-flex align-items-center float-start">
                <span class="label">Read More</span>
                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
            </a>
        </div>
    </div>
</div>
@endif
@endforeach
