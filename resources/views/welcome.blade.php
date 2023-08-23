@extends('layouts.main')
@section('dashboard')
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-10">
        <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/slider2.jpg') }}" class="d-block" style="height:600px; width: 1300px;"  alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/slider3.jpg') }}" class="d-block" style="height:600px; width: 1300px;" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/image.png') }}" class="d-block" style="height:600px; width: 1300px;"  alt="Image 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#imageSlider" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#imageSlider" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="services">
          <ul class="list-unstyled">
            <a href="#map">
            <li class="align-items-center text-center p-2" style="background-color: blueviolet;color:white;">
              <span class="me-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                </svg>
              </span><br>
              <span>Directions</span>
              <hr>
            </li>
          </a>
          <a href="#shop">
            <li class="align-items-center text-center p-2" style="background-color: blueviolet;color:white;">
              <span class="me-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
              </span><br>
              <span>Shops</span>
              <hr>
            </li>
          </a>
          <a href="#map">
            <li class="align-items-center text-center p-2" style="background-color: blueviolet;color:white;">
              <span class="me-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-cloud-fog-fill" viewBox="0 0 16 16">
                  <path d="M3 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm10.405-9.473a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 12H13a3 3 0 0 0 .405-5.973z"/>
                </svg>
              </span><br>
              <span>Foods</span>
              <hr>
            </li>
          </a>
          <a href="#map">
            <li class="align-items-center text-center p-2" style="background-color: blueviolet;color:white;">
              <span class="me-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                  <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                </svg>
              </span><br>
              <span>Entertainments</span>
              <hr>
            </li>
            </a>
            <a href="#map">
            <li class="align-items-center text-center p-2" style="background-color: blueviolet;color:white;">
              <span class="me-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-cloud-fog-fill" viewBox="0 0 16 16">
                  <path d="M3 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm10.405-9.473a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 12H13a3 3 0 0 0 .405-5.973z"/>
                </svg>
              </span><br>
              <span>Foods</span>
              <hr>
            </li>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid  pb-5 mt-3" style="background-color:lavender;">
    <h2 class="text-center pt-5 pb-4">Our Brands</h2>
    <section class="section-90 section-md-120 bg-selago">
      <div class="inset-lg-left-35 inset-xxl-left-125 inset-lg-right-35 inset-xxl-right-125">
        <div class="container container-wide-custom">
          <div class="row justify-content-sm-center align-items-sm-center justify-content-xxl-between">
            <div class="col-md-10 col-xl-5 col-xxl-4 text-left">
              <div class="offset-top-20">
                <h3 class="text-center text-left">A Few Words About Audrey Mall</h3>
                <div class="offset-top-30">
                  <p>Audrey Mall is a four-story vertical shopping and entertainment center located in the heart of downtown San Diego in the thriving Yerba Buena Neighborhood. Shop at the City Target on the second level and visit a 16-screen AMC Theater with the largest IMAX in North America.</p>
                </div>
                <div class="offset-top-30 text-center text-lg-left">
                  <a class="btn pt-2 pb-2 ml-5 mr-5 " style="color:white;background-color: rgb(118,78,190);box-shadow:-webkit-box-shadow:2px -1px 23px 3px rgb(118,78,190);
                  -moz-box-shadow: 2px -1px 23px 3px rgb(118,78,190);
                  box-shadow: 2px -1px 23px 3px rgb(118,78,190);" href="entertainment.html">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-xl-7 col-xxl-8 offset-top-60 offset-xl-top-0">
              <div class="row justify-content-sm-center justify-content-md-start justify-content-lg-center inset-xxl-left-70 row-60">
                <div class="col-md-6 col-lg-4 text-center">
                  <span style="width: 80px; height: 80px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background-color: rgb(118,78,190);box-shadow:-webkit-box-shadow:2px -1px 23px 3px rgb(118,78,190);
                  -moz-box-shadow: 2px -1px 23px 3px rgb(118,78,190);
                  box-shadow: 2px -1px 23px 3px rgb(118,78,190);" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="color: white;" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                      <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                      <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                    </svg>
                  </span>
                  <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">
                    <br><h6>Free Wi-Fi</h6>
                    <hr class="divider divider-xs bg-bermuda offset-top-15">
                    <p class="offset-top-15 offset-md-top-25">We have a network accessible for free across the entire common mall area.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                  <span style="width: 80px; height: 80px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background-color: rgb(118,78,190);box-shadow:-webkit-box-shadow:2px -1px 23px 3px rgb(118,78,190);
                  -moz-box-shadow: 2px -1px 23px 3px rgb(118,78,190);
                  box-shadow: 2px -1px 23px 3px rgb(118,78,190);" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="color:white;" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                      <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                    </svg>
                  </span>
                  <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">
                    <br><h6>Mall Gift Cards</h6>
                    <hr class="divider divider-xs bg-bermuda offset-top-15">
                    <p class="offset-top-15 offset-md-top-25">The best gift solution is available at your favorite shopping mall.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                  <span style="width: 80px; height: 80px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background-color: rgb(118,78,190);box-shadow:-webkit-box-shadow:2px -1px 23px 3px rgb(118,78,190);
                  -moz-box-shadow: 2px -1px 23px 3px rgb(118,78,190);
                  box-shadow: 2px -1px 23px 3px rgb(118,78,190);" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="color:white;" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                      <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                    </svg>
                  </span>
                    <div class="offset-top-25 offset-md-top-35 inset-xxl-left-15 inset-xxl-right-15">
                    <br><h6>Lost and Found</h6>
                    <hr class="divider divider-xs bg-bermuda offset-top-15">
                    <p class="offset-top-15 offset-md-top-25">Did you lose an item while visiting the mall? Call now <a class="text-nowrap text-gray-light" href="tel:#">1-800-1234-456</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="shop" class="container mt-5" style="background-color:rgb(245,247,253);">
    <h2 class="text-left pt-5 pb-4">FEATURE SHOPES</h2>
      <div class="row">
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <div class="row no-gutters">
                <img src="news1.jpg" class="card-img-top" alt="News 1">
                <div class="card-body">
                  <h5 class="card-title">Breaking News</h5>
                  <p class="card-text">Published: August 19, 2023</p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                  <a href="#" class="btn  ">Read More</a>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container mt-5">
    <h2 class="text-center pt-5 pb-4">Events</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
      </div>
    </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-md-6">
              <img src="event1.jpg" class="card-img-top" alt="Event 1">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Event Name 1</h5>
                <p class="card-text">Date: August 25, 2023</p>
                <a href="#" class="btn  ">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  <div class="container mt-5" >
    <div class="text-center mb-3"><h1>LATEST NEWS</h1></div>

    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="row no-gutters">
              <img src="news1.jpg" class="card-img-top" alt="News 1">
              <div class="card-body">
                <h5 class="card-title">Breaking News</h5>
                <p class="card-text">Published: August 19, 2023</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                <a href="#" class="btn  ">Read More</a>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="row no-gutters">
              <img src="news1.jpg" class="card-img-top" alt="News 1">
              <div class="card-body">
                <h5 class="card-title">Breaking News</h5>
                <p class="card-text">Published: August 19, 2023</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                <a href="#" class="btn  ">Read More</a>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="row no-gutters">
              <img src="news1.jpg" class="card-img-top" alt="News 1">
              <div class="card-body">
                <h5 class="card-title">Breaking News</h5>
                <p class="card-text">Published: August 19, 2023</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                <a href="#" class="btn  ">Read More</a>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="row no-gutters">
              <img src="news1.jpg" class="card-img-top" alt="News 1">
              <div class="card-body">
                <h5 class="card-title">Breaking News</h5>
                <p class="card-text">Published: August 19, 2023</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in leo at mi pulvinar convallis.</p>
                <a href="#" class="btn  ">Read More</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="map" class="container mt-5 pt-5 align-items-center" style="background-color:rgb(236, 236, 240);">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15782.102803100846!2d39.2706564!3d8.54534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b1f38864bff7b%3A0x104e2b606ec222d5!2sDADA%20Mall!5e0!3m2!1sen!2set!4v1692475143797!5m2!1sen!2set" width="1299" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container-fluid mt-5" style="background-color:rgb(255, 255, 255)">
  <div class="container pt-2 pb-5 pl-3 pr-3"  style="background-color:lavender">
    <div class="page-content">
      <!-- Contacts-->
      <section class="section-60 section-md-120 text-left">
        <div class="container-wide">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-lg-8">
              <div class="inset-lg-right-60 inset-xxl-left-85 inset-xxl-right-120">
                <hr class="divider hr-left-0 bg-bermuda">
                <h3 class="offset-top-20">Contact Us</h3>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <p class="offset-top-40">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit us personally. We would be happy to answer your questions.</p>
                <!-- RD Mailform-->
                <form class="rd-mailform text-left offset-top-35" method="post" action="{{ route('contact_us') }}">
                    @csrf

                  <div class="row justify-content-sm-center">
                    <div class="col-xl-6">
                      <div class="form-group form-group-outside">
                        <label class="form-label form-label-outside rd-input-label" for="contact-first-name">First Name</label>
                        <input class="form-control form-control-has-validation form-control-last-child" id="contact-first-name" type="text" name="firstName" ><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6 offset-top-10 offset-xl-top-0">
                      <div class="form-group form-group-outside">
                        <label class="form-label form-label-outside rd-input-label" for="contact-last-name">Last Name</label>
                        <input class="form-control form-control-has-validation form-control-last-child" id="contact-last-name" type="text" name="lastName" ><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6 offset-top-10">
                      <div class="form-group form-group-outside">
                        <label class="form-label form-label-outside rd-input-label" for="contact-email">E-mail</label>
                        <input class="form-control form-control-has-validation form-control-last-child" id="contact-email" type="text" name="email"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-6 offset-top-10">
                      <div class="form-group form-group-outside">
                        <label class="form-label form-label-outside rd-input-label" for="contact-phone">Phone</label>
                        <input class="form-control form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="phone" ><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-xl-12 offset-top-10">
                      <div class="form-group form-group-outside">
                        <label class="form-label form-label-outside rd-input-label" for="contact-message">Message</label>
                        <textarea class="form-control form-control-has-validation form-control-last-child" id="contact-message" name="message" ></textarea><span class="form-validation"></span>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="offset-top-20">
                    <button class="btn   btn-block" type="submit">send</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-10 col-lg-4 offset-top-90 offset-lg-top-0">
              <div class="offset-top-60 offset-lg-top-85">
                <hr class="divider hr-left-0 bg-bermuda">
                <h5 class="offset-top-15">Phones</h5>
                <div class="offset-top-20">
                  <!-- Unit-->
                  <div class="unit align-items-center flex-row unit-spacing-xxs">
                    <div class="unit-left"><span class="icon icon-sm mdi mdi-phone text-primary"></span></div>
                    <div class="unit-body">
                      <div class="d-inline-block">
                        <p><a class="text-gray " href="tel:#">1-800-1234-567</a></p>
                      </div>,
                      <div class="d-inline-block">
                        <p><a class="text-gray" href="tel:#">1-800-9514-654</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-top-60 offset-lg-top-85">
                <hr class="divider hr-left-0 bg-bermuda">
                <h5 class="offset-top-15">E-mail</h5>
                <div class="offset-top-20">
                  <!-- Unit-->
                  <div class="unit align-items-center flex-row unit-spacing-xxs">
                    <div class="unit-left"><span class="icon icon-sm mdi mdi-email-outline text-primary"></span></div>
                    <div class="unit-body">
                      <p><a class="text-gray" href="mailto:#">info@demolink.org</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-top-60 offset-lg-top-85">
                <hr class="divider hr-left-0 bg-bermuda">
                <h5 class="offset-top-15">Address</h5>
                <div class="offset-top-20 p">
                  <div class="unit align-items-center align-items-lg-start align-items-xxl-center flex-row unit-spacing-xxs">
                    <div class="unit-left"><span class="icon icon-sm mdi mdi-map-marker text-primary"></span></div>
                    <div class="unit-body"><a class=" link text-gray" href="contacts.html">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
    </div>
  </div>
</div>
@endsection
