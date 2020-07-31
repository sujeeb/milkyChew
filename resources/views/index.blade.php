@extends('layouts.master')

@section('title', 'Home')

@section('content')
  
    <section class="site-blocks-cover overflow-hidden bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto align-self-center text-center text-md-left">
            <div class="intro-text">
              <h1>We Love Dogs</h1>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odio exercitationem iste, excepturi similique omnis.</p>
              <p><a href="#contact-section" class="btn btn-primary nav-link">Get In Touch</a></p>
            </div>
          </div>
          <div class="col-md-5 align-self-center text-center text-md-right">
            <img src="{{ asset('listed/images/dog_1.jpg') }}" alt="Image" class="img-fluid cover-img">
            <img src="{{ asset('listed/images/dog_2.jpg') }}" alt="Image" class="img-fluid cover-img2">
          </div>
        </div>
      </div>
    </section> 

    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            
            <h2 class="text-black mb-2">Welcome To Our Website</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="rotate10">
                  <img src="{{ asset('listed/images/dog_3.jpg') }}" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Happy Pets</h2>
                <p class="mb-4">Far far away, behind the word mountains, Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6">
                <a href="#" class="rotate-reverse10">
                  <img src="{{ asset('listed/images/dog_4.jpg') }}" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="text-black">Modern Equipment</h2>
                <p class="mb-4">Far far away, behind the word mountains, Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="site-section" id="pricing-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center heading-section mb-5">
            
            <h2 class="mb-2 text-black heading">Pricing Table</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-primary p-3 p-md-5">
            

            <div class="pricing">
              <span class="icon-paw d-block display-5 text-white mb-3"></span>
              <h3 class="text-center text-white text-uppercase">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$50</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>

          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-dark  p-3 p-md-5">
            <div class="pricing">
              <span class="icon-paw d-inline-block display-5 text-white mb-3"></span>
              <span class="icon-paw d-inline-block display-5 text-white mb-3"></span>
              <h3 class="text-center text-white text-uppercase">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$100</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-primary  p-3 p-md-5">
            <div class="pricing">
              <span class="icon-paw d-inline-block display-5 text-white mb-3"></span>
              <span class="icon-paw d-inline-block display-5 text-white mb-3"></span>
              <span class="icon-paw d-inline-block display-5 text-white mb-3"></span>
              <h3 class="text-center text-white text-uppercase">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="faq-section">
      <div class="container" id="accordion">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            
            <h2 class="text-black mb-2">Frequently Ask Questions</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit facere quia quas quod at, reprehenderit eaque nam.</p>
          </div>
        </div>
        <div class="row accordion justify-content-center block__76208">
          <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
            <img src="{{ asset('listed/images/dog_5.jpg') }}" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-5 ml-auto order-lg-2 align-self-center">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="true" aria-controls="collapseFive">Lorem ipsum dolor sit amet<span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum ipsum autem minima repellat, corrupti consequuntur sit amet atque, optio provident harum eius numquam dolores quam dolore quas! Quisquam, velit accusantium?</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, voluptas. <span class="icon"></span></a>
              </h3>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui doloremque magnam ea, fuga deserunt dolor, atque ex libero aspernatur nobis nisi soluta nulla vitae natus omnis! Inventore beatae amet autem?</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <span class="icon"></span></a>
              </h3>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, aspernatur exercitationem consequatur soluta vero error autem nemo cum! Consequatur illo voluptatum eos labore corrupti animi odio accusamus perferendis? Eveniet, odit.</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">consectetur, adipisicing elit?<span class="icon"></span></a>
              </h3>
              <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore dolorem aliquam commodi magni. Animi harum voluptates odio asperiores, atque tenetur eveniet itaque pariatur ut. Est quas ducimus architecto?</p>
                </div>
              </div>
            </div> 

          </div>

          
        </div>
      </div>
    </section>

    <section class="site-section bg-light block-13" id="testimonials-section">
      <div class="container">
        
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            
            <h2 class="text-black mb-2">Happy Customers</h2>
          </div>
        </div>
        <div >
          <div class="owl-carousel nonloop-block-13">
            <div>
              <div class="block-testimony-1 text-center">
                
                <blockquote class="mb-4">
                  <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem porro aliquam quisquam perferendis illum ad corporis tempore voluptatum, obcaecati, a unde? Aliquam suscipit dicta, error velit quaerat eligendi quam ipsa..&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="{{ asset('listed/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">

                

                <blockquote class="mb-4">
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ad provident ipsa similique quidem. Fugit nam deserunt ipsam? Excepturi, possimus.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="{{ asset('listed/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                

                <blockquote class="mb-4">
                  <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores numquam, animi est ratione aut explicabo fuga illum a nesciunt tempora! Incidunt laborum blanditiis quidem voluptatibus enim placeat!&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="{{ asset('listed/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">

                

                <blockquote class="mb-4">
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. A nemo distinctio ratione numquam. Magni quae a adipisci hic laborum voluptate optio ab tenetur. Officiis mollitia nam itaque laborum?.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="{{ asset('listed/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

                
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    


    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            
            <h2 class="text-black mb-2">Dogger Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="{{ asset('listed/images/dog_5.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">How to make first aid for your dog when in the house</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, perspiciatis debitis. Cumque nihil, laborum eos possimus quod dolor.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="{{ asset('listed/images/dog_6.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">How to make first aid for your dog when in the house</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quaerat beatae officiis, iure odio veritatis adipisci recusandae qui?</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="{{ asset('listed/images/dog_6.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">How to make first aid for your dog when in the house</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum illum harum odio iste et quae doloremque dicta.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="{{ asset('listed/images/dog_5.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">How to make first aid for your dog when in the house</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam veritatis minima ut voluptates aspernatur blanditiis repudiandae, voluptatem impedit.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    
    
    <section class="bg-light" id="contact-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <form method="post" action="{{URL('/contact/store')}}" class="p-5 contact-form needs-validation">
              {{csrf_field()}}
              
              <h2 class="h4 mb-5 heading">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="fname">First Name</label>
                  <input type="text" name="fname" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" name="lname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-dark btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-6">
            <div class="row justify-content-center align-items-center h-100">
              <div class="col-lg-6 text-center heading-section mb-5 align-self-center">
                
                <h2 class=" mb-5 text-black">Contact Us</h2>
                <ul class="list-unstyled text-left address">
                  <li>
                    <span class="d-block">Address:</span>
                    <p>Melbourne St,South Birbane 4101 Austraila</p>
                  </li>
                  <li>
                    <span class="d-block">Phone:</span>
                    <p>+(000) 123 4567 89</p>
                  </li>
                  <li>
                    <span class="d-block">Email:</span>
                    <p>info@yourdomain.com</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @endsection
    