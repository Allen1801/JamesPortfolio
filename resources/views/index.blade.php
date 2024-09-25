@extends('layouts.app')

@push('styles')

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endpush

@push('styles')

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


@endpush

@section('content')
<div class="section">
  <div class="triangle" data-aos="fade-in">
    <img class="me" src="{{asset('img/2x2.jpg')}}" alt="Picture me">
    </div>
  <div class="about-me">
    <h1 class="main-title">ABOUT ME</h1>
    <h3 class="sub-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, esse ut. 
      Libero dolores, eveniet dolorem repellendus distinctio, corrupti animi aliquid eos, fuga repellat suscipit 
      quod at est nemo nostrum deleniti?</h3>
  </div>
</div>

<hr class="line">
<br>

<h1 class="title">EDUCATION</h1>
<div class="section">
  <div class="wrapper" data-aos="fade-up">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <ul class="carousel">
      <li class="card">
        <h1 class="education">UNIVERSITY</h1>
        <div class="img"><img src="{{asset('img/PLP.png')}}" alt="img" draggable="false"></div>
        <h2>PAMANTASAN NG LUNGSOD NG PASIG</h2>
        <span>YEAR</span>
      </li>
      <li class="card">
        <h1 class="education">SENIOR HIGH SCHOOL</h1>
        <div class="img"><img src="{{asset('img/RHS.jpg')}}" alt="img" draggable="false"></div>
        <h2>RIZAL HIGH SCHOOL</h2>
        <span>YEAR</span>
      </li>
      <li class="card">
        <h1 class="education">JUNIOR HIGH SCHOOL</h1>
        <div class="img"><img src="{{asset('img/RHS.jpg')}}" alt="img" draggable="false"></div>
        <h2>RIZAL HIGH SCHOOL</h2>
        <span>YEAR</span>
      </li>
      <li class="card">
        <h1 class="education">JUNIOR HIGH SCHOOL</h1>
        <div class="img"><img src="{{asset('img/PCC.png')}}" alt="img" draggable="false"></div>
        <h2>PASIG CATHOLIC COLLEGE</h2>
        <span>YEAR</span>
      </li>
      <li class="card">
        <h1 class="education">ELEMENTARY</h1>
        <div class="img"><img src="{{asset('img/PCC.png')}}" alt="img" draggable="false"></div>
        <h2>PASIG CATHOLIC COLLEGE</h2>
        <span>YEAR</span>
      </li>
    </ul>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
</div>

<br>
<hr class="line">

<h1 class="title">EMPLOYMENT HISTORY</h1> 
<div class="section">
  <div class="text">
    <div class="history" data-aos="zoom-in-right">
      <h3>Pasig City Hall | Junior IT Developer</h3>
      <h4 class="year">2022 - 2023</h4>
      <ul class="list">
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quam labore odio suscipit eaque, ad ut libero impedit quod tempore, obcaecati, nihil mollitia! Accusantium beatae tempora excepturi molestias quo velit?</li>
      </ul>
    </div>
    <div class="history" data-aos="zoom-in-left">
      <h3>Pasig City Hall | Junior IT Developer</h3>
      <h4 class="year">2022 - 2023</h4>
      <ul class="list">
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quam labore odio suscipit eaque, ad ut libero impedit quod tempore, obcaecati, nihil mollitia! Accusantium beatae tempora excepturi molestias quo velit?</li>
      </ul>
    </div>
    <div class="history" data-aos="zoom-in-right">
      <h3>Pasig City Hall | Junior IT Developer</h3>
      <h4 class="year">2022 - 2023</h4>
      <ul class="list">
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quam labore odio suscipit eaque, ad ut libero impedit quod tempore, obcaecati, nihil mollitia! Accusantium beatae tempora excepturi molestias quo velit?</li>
      </ul>
    </div>
  </div>
</div>

<br>
<hr class="line">

<h1 class="title">SKILLS</h1>
<div class="section">
  <div class="technical" data-aos="fade-right">
    <h2>Technical Skills</h2>
    <ul class="skill-list">
      <li>HTML</li>
      <li>CSS</li>
      <li>JavaScript</li>
      <li>React</li>
      <li>Node.js</li>
      <li>Python</li>
    </ul>
  </div>
  <div class="soft" data-aos="fade-left">
    <h2>Soft Skills</h2>
    <ul class="skill-list">
      <li>Communication</li>
      <li>Teamwork</li>
      <li>Problem-solving</li>
      <li>Time management</li>
    </ul>
  </div>
</div>

<br>
<hr class="line">

<h1 class="title">CERTIFICATES</h1>
<div class="section">
<div class="container swiper" data-aos="fade-down">
    <div class="card-wrapper">
      <!-- Card slides container -->
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="{{asset('img/cert.jpg')}}" alt="Card Image" class="card-image">
            <p class="badge badge-designer">Designer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <span href="" class="card-link">
            <img src="{{asset('img/cert.jpg')}}" alt="Card Image" class="card-image">
            <p class="badge badge-developer">Developer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="#" class="card-link">
            <img src="{{asset('img/cert.jpg')}}" alt="Card Image" class="card-image">
            <p class="badge badge-marketer">Marketer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="#" class="card-link">
            <img src="{{asset('img/cert.jpg')}}" alt="Card Image" class="card-image">
            <p class="badge badge-gamer">Gamer</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
          </span>
        </li>
        <li class="card-item swiper-slide">
          <span href="#" class="card-link">
            <img src="{{asset('img/cert.jpg')}}" alt="Card Image" class="card-image">
            <p class="badge badge-editor">Editor</p>
            <h2 class="card-title">Lorem ipsum dolor sit explicabo adipisicing elit</h2>
          </span>
        </li>
      </ul>
       <!-- Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Navigation Buttons -->
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>

</div>

<script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>  
<script>
    AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: true, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  </script>


@endsection
