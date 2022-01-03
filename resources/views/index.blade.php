@extends('layouts.mobile')

@section('content')

<div class="background-image grid grd-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block
            text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold 
                text-shadow-md pb-14">
                    Music is Life...
                </h1>
                <a
                    href="#"
                    class="text-center bg-green-50 text-gray-700 py-2 px-4
                    font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
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
                    <div class="card bg-smoke">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                           <img
                    src="{{ URL::to('/img/p8.jpg') }}"
                    class="#"
                    alt=""
                  />
                           </div>
                           <h3 class="card-title"><strong>
                               E-learning 
                        </strong></h3> 
                           <p class="card-text">
                             Online classes with video tutorials. Music learning, even on the go.  
                           </p>
                           <br/>
                           <a href="#" class ="btn btn-primary">Read More</a>  
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-smoke">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                           <img
                    src="{{ URL::to('/img/p9.png') }}"
                    class="#"
                    alt=""
                  />
                           </div>
                           <h3 class="card-title"><strong>
                               Professionals
                        </strong></h3> 
                           <p class="card-text">
                             Seasoned professional instructors, with over 3 years work experience.  
                           </p>
                           <br/>
                           <a href="#" class ="btn btn-dark">Read More</a>  
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-smoke">
                        <div class="card-body text-center">
                           <div class="h1 mb-3">
                           <img src="img/p10.png">
                           </div>
                           <h3 class="card-title"><strong>
                               In Person
                        </strong></h3> 
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
    <hr/>
<section>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b
    border-green-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/12/06/22/11/glasses-3002751_960_720.jpg" width="700" alt="" class="img-fluid">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-2xl font-extrabold text-gray-600">
                Struggling to play a musical instrument?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit, distinctio.
            </p>

            <a href="#"
            class="uppercase bg-blue-500 text-gray-100 text-s
            font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
            </a>

        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-3xl py-1">
            Violin
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Piano
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Electric Guitar
        </span>
        <span class="font-extrabold block text-3xl py-1">
            Saxophone
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase font-extrabold text-s text-gray-400">
            Music Lessons
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            beatae fuga animi distinctio perspiciatis adipisci velit maiores
            totam tempora accusamus. 
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-9">
            <div class="m-auto pt-4 pb-10 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                Certificate courses in Music
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </h3>

                <a 
                    href="#"
                    class="uppercase bg-transparent border-2 border-green-100
                    text-gray-100 texr-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2017/07/12/10/44/orchestra-2496505_960_720.jpg" width="700" alt="">
        </div>
    </div>
  
  <section>   

    
@endsection