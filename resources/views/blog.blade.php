@extends('layouts.app')

@section('content')


    <!-- Showcase -->
    <section class="bg-success text-light p-5 p-lg-0 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Learn how to <span class="text-warning">Sing</span> and <span class="text-warning">Play</span> a Musical Instrument</h1>
                <p class="lead my-4">We focus on teaching the fundamentals of music.</p>
                <a
                  class="btn btn-primary btn-lg" href="{{ route('register') }}">
                    Start The Enrollment
</a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/music.svg" alt="">
            </div>
        </div>

        </div>
    </section>

        <!-- Newsletter -->
        <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between
            align-items-center">
            <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

            <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Enter Email"/>
                <button class="btn btn-dark btn-lg" type="button">Sign Up</button>
              </div>
        </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                             <i class="bi bi-laptop"></i>
                           </div>
                           <h3 class="card-title">
                               E-learning 
                           </h3> 
                           <p class="card-text">
                             Online classes with video tutorials. Music learning, even on the go.  
                           </p>
                           <br/>
                           <a href="#" class ="btn btn-primary">Read More</a>  
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                             <i class="bi bi-person-square"></i>
                           </div>
                           <h3 class="card-title">
                               Professionals
                           </h3> 
                           <p class="card-text">
                             Seasoned professional instructors, with over 3 years work experience.  
                           </p>
                           <br/>
                           <a href="#" class ="btn btn-dark">Read More</a>  
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                             <i class="bi bi-people"></i>
                           </div>
                           <h3 class="card-title">
                               In Person
                           </h3> 
                           <p class="card-text">
                             One on one tutoring and instrument learning.    
                           </p>
                           <br/>
                           <a href="#" class ="btn btn-primary">Read More</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Learn Sections -->
        <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/mi_9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2><b>Music and it's Purpose</b></h2>
                    <br/>
                    <p class="lead">
                      Music's purpose is to express and modulate emotion. Music's primary use is mood control. We sing lullabies to soothe babies – which works very well when language fails. ... 
                    </p>
                    <br/>
                    <p>Through the years, music has also served cultures as a medium to tell stories which should be passed down through generations.</p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                      </a>
                </div>
            </div>
        </div>
    </section>

    <section id="learn" class="p-5 bg-success text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2><b>Elements of Music</b></h2>
                    <br/>
                    <p class="lead">
                      <p><b>Melody</b></p>
                      We might consider melody to be the single most important element within a song. In everyday language, this is the element we call ‘the tune’. In technical terms, however, the melody is a series of pitches, or notes, that are organised to form a shape or pattern. Each individual note is given a length determined by the rhythm of the melody, so we might think of melody as ‘pitch plus time’.
                    </p>
                    <br/>
                    <a href="#" class="btn-btn-light mt-3">
                        <a href="#" class ="btn btn-primary">Read More</a>
                    </a>
                </div>
                <div class="col-md">
                    <img src="img/react.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
          <h2 class="text-center mb-4">Frequently Asked Questions</h2>
          <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-one"
                >
                  Where exactly are you located?
                </button>
              </h2>
              <div
                id="question-one"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                  beatae fuga animi distinctio perspiciatis adipisci velit maiores
                  totam tempora accusamus modi explicabo accusantium consequatur,
                  praesentium rem quisquam molestias at quos vero. Officiis ad
                  velit doloremque at. Dignissimos praesentium necessitatibus
                  natus corrupti cum consequatur aliquam! Minima molestias iure
                  quam distinctio velit.
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-two"
                >
                  How much does it cost to enroll?
                </button>
              </h2>
              <div
                id="question-two"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                  beatae fuga animi distinctio perspiciatis adipisci velit maiores
                  totam tempora accusamus modi explicabo accusantium consequatur,
                  praesentium rem quisquam molestias at quos vero. Officiis ad
                  velit doloremque at. Dignissimos praesentium necessitatibus
                  natus corrupti cum consequatur aliquam! Minima molestias iure
                  quam distinctio velit.
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-three"
                >
                  What do I need to know?
                </button>
              </h2>
              <div
                id="question-three"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                  beatae fuga animi distinctio perspiciatis adipisci velit maiores
                  totam tempora accusamus modi explicabo accusantium consequatur,
                  praesentium rem quisquam molestias at quos vero. Officiis ad
                  velit doloremque at. Dignissimos praesentium necessitatibus
                  natus corrupti cum consequatur aliquam! Minima molestias iure
                  quam distinctio velit.
                </div>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-four"
                >
                  How Do I sign up?
                </button>
              </h2>
              <div
                id="question-four"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                  beatae fuga animi distinctio perspiciatis adipisci velit maiores
                  totam tempora accusamus modi explicabo accusantium consequatur,
                  praesentium rem quisquam molestias at quos vero. Officiis ad
                  velit doloremque at. Dignissimos praesentium necessitatibus
                  natus corrupti cum consequatur aliquam! Minima molestias iure
                  quam distinctio velit.
                </div>
              </div>
            </div>
            <!-- Item 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-five"
                >
                  Do you help me find a job?
                </button>
              </h2>
              <div
                id="question-five"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                  beatae fuga animi distinctio perspiciatis adipisci velit maiores
                  totam tempora accusamus modi explicabo accusantium consequatur,
                  praesentium rem quisquam molestias at quos vero. Officiis ad
                  velit doloremque at. Dignissimos praesentium necessitatibus
                  natus corrupti cum consequatur aliquam! Minima molestias iure
                  quam distinctio velit.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section id="instructors" class="p-5 bg-primary">
        <div class="container">
          <h2 class="text-center text-white">Our Instructors</h2>
          <p class="lead text-center text-white mb-5">
            Our instructors all have 3+ years working as music instructors in the
            industry
          </p>
          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_1.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Desmond Okeke</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_2.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Chioma Anosike</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_3.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Daniel Omeaku</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_4.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Rita Chukwunenye</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
          </div>
      
        <br/>
        <div class="row g-4">
        <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_5.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Agnes Anosike</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
        
        <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_6.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Angela Anosike</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_7.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3 class="card-title mb-3"><strong>Nnena Mgbenwelu</strong></h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                  </p>
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

        </div>
      </div>
      </section>

<!-- Contact & Map -->
<section class="p-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md">
          <h2 class="text-center mb-4">Contact Info</h2>
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">Main Location:</span> Melody-Music School address
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Enrollment Phone:</span> +234-
            </li>
            
            <li class="list-group-item">
              <span class="fw-bold">Enrollment Email:</span> 
              enroll@cdorchestra.org
            </li>
            
          </ul>
        </div>
        <div class="col-md">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>

    <!-- Modal -->
    <div
    class="modal fade"
    id="enroll"
    tabindex="-1"
    aria-labelledby="enrollLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="enrollLabel">Enrollment Form</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p class="lead">Fill out this form and we will get back to you</p>
          <form>
            <div class="mb-3">
              <label for="first-name" class="col-form-label">
                First Name:
              </label>
              <input type="text" class="form-control" id="first-name" />
            </div>
            <div class="mb-3">
              <label for="last-name" class="col-form-label">Last Name:</label>
              <input type="text" class="form-control" id="last-name" />
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" />
            </div>
            <div class="mb-3">
              <label for="phone" class="col-form-label">Phone:</label>
              <input type="tel" class="form-control" id="phone" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"
  ></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

  <script>
    mapboxgl.accessToken =
      'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-71.060982, 42.35725],
      zoom: 18,
    })
  </script>

@endsection