 @if (isset($footerdata))
     <div class="footer-or-sec-6">
         <!------------------------sec6-start------------------------>
         <section class="sec-6">
             <div class="container">
                 <div class="row">
                     <div class=" col-lg-10 col-md-12 col-sm-12 mx-auto">
                         <div class="best-place-to-post text-center text-white">
                             <h3>Add New Listing <span>And Build Your Business</span> With Us</h3>
                             <p>Lorem ipsum dolor sit amet, consetetur adipisicing elit, sed do eiusmod tempor quam
                                 voluptatem.</p>
                             <a href="{{ route('login') }}" class="btn btn-primary">PLACE AN AD</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!------------------------sec6-end------------------------>

         <!------------------------footer-start------------------------>
         <footer>
             <div class="container">
                 <div class="row">
                     <div class=" col-lg-3 col-md-12 col-sm-12 col-12">
                         <div class="footer-mains">
                             <div class="footer-logo">
                                 <a href="index.html"><img src="{{ asset('assets/img/footernewlog.png') }}"
                                         class="img-fluid"></a>
                             </div>
                             <p>Lorem ipsum dolor sit amet,
                                 consetetur adipisicing elit, sed do eiusmod tempor quam voluptatem.
                             </p>
                             <div class="foot-contact">
                                 <div class="card border-0 ">
                                     <div class="row g-0 align-items-center">
                                         <div class="col-md-1 col-sm-1 col-1">
                                             <div class="contact-icons">
                                                 <span class="fas fa-map-marker-alt"></span>
                                             </div>
                                         </div>
                                         <div class="col-md-11 col-sm-11 col-11">
                                             <div class="card-body">
                                                 <p class="card-title">Dummy Avenue, 3rd Floor dummy 10011
                                                     212.913.9058</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card border-0 ">
                                     <div class="row g-0 align-items-center">
                                         <div class="col-md-1 col-sm-1 col-1">
                                             <div class="contact-icons">
                                                 <span class="fas fa-phone"></span>
                                             </div>
                                         </div>
                                         <div class="col-md-11 col-sm-11 col-11">
                                             <div class="card-body">
                                                 <p><a href="tel:0000000000">000-000-0000</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card border-0 ">
                                     <div class="row g-0 align-items-center">
                                         <div class="col-md-1 col-sm-1 col-1">
                                             <div class="contact-icons">
                                                 <span class="fas fa-envelope"></span>
                                             </div>
                                         </div>
                                         <div class="col-md-11 col-sm-11 col-11">
                                             <div class="card-body">
                                                 <p><a href="mailto:Dummy@gmail.com">Dummy@gmail.com</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="footer-headers">
                                     <h4>Our Location</h4>
                                     <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                         class="img-fluid">
                                 </div>
                                 <div class="footer-map">
                                     <iframe
                                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41313634.68886379!2d-130.19978933221205!3d50.801814945126814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1629197558130!5m2!1sen!2sin"
                                         width="100%" height="100%" style="border:0;" allowfullscreen=""
                                         loading="lazy"></iframe>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class=" col-lg-9 col-md-12 col-sm-12 col-12">
                         <div class="side-spacer">
                             <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                     <div class="footer-headers">
                                         <h4>Quick Links</h4>
                                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                             class="img-fluid">
                                     </div>
                                     <div class="menus-list">
                                         <ul>
                                             <li><a href="{{ route('home') }}">Home</a></li>
                                             <li><a href="{{ route('category') }}">Category</a></li>
                                             <li><a href="{{ route('listing') }}">Listing</a></li>
                                             <li><a href="#">Search</a></li>
                                             <li><a href="{{ route('login') }}">Post Add</a></li>
                                             <li><a href="#">Terms & Conditions</a></li>
                                         </ul>
                                     </div>

                                     <div class="footer-headers">
                                         <h4>More Links</h4>
                                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                             class="img-fluid">
                                     </div>
                                     <div class="menus-list">
                                         <ul>
                                             <li><a href="sign-up.html">Login / Register</a></li>
                                             <li><a href="#">Live Chat</a></li>
                                             <li><a href="#">My Ads</a></li>
                                             <li><a href="#">My Profile</a></li>
                                             <li><a href="#">Help</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                     <div class="footer-headers">
                                         <h4>Top Ads</h4>
                                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                             class="img-fluid">
                                     </div>
                                     <div class="menus-list">
                                         <ul>
                                             <li><a href="#">Cars & Vehicles</a></li>
                                             <li><a href="#">Farming</a></li>
                                             <li><a href="#">Animals</a></li>
                                             <li><a href="#">Household</a></li>
                                             <li><a href="#">Baby and Kids</a></li>
                                             <li><a href="#">Fashion & Lifestyle</a></li>
                                             <li><a href="#">Garden & DIY</a></li>
                                             <li><a href="#">Sports & Leisure</a></li>
                                             <li><a href="#">Music</a></li>
                                             <li><a href="#">Boats</a></li>
                                             <li><a href="#">Tech & Fun Stuff</a></li>
                                             <li><a href="#">Trades & Services</a></li>
                                             <li><a href="#">Property</a></li>
                                             <li><a href="#">Business</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                     <div class="footer-headers">
                                         <h4>Newsletter</h4>
                                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                             class="img-fluid">
                                     </div>
                                     <div class="menus-list">
                                         <p>To get the latest news and
                                             latest updates from us.
                                         </p>
                                     </div>
                                     <div class="sub-mail d-flex justify-content-start">
                                         <span>
                                             <form>
                                                 <div class="row">
                                                     <div class="col-6">
                                                         <input type="text" class="form-control"
                                                             placeholder="You E-mail">
                                                     </div>
                                                     <div class="col-6">
                                                         <span><img src="{{ asset('assets/img/Layer-59.png') }}"
                                                                 class="img-fluid"></span>
                                                     </div>
                                                 </div>
                                             </form>
                                         </span>
                                     </div>
                                     <div class="footer-headers">
                                         <h4>Facebook Updates</h4>
                                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                             class="img-fluid">
                                     </div>
                                     <div class="facebok-frame">
                                         <iframe
                                             src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                             width="100%" height="300" style="border:none;overflow:hidden"
                                             scrolling="no" frameborder="0" allowfullscreen="true"
                                             allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                     </div>
                                     <div class="footer-social-icon">
                                         <ul>
                                             <li><a href=""><span><i class="fab fa-facebook-f"></i></span></a></li>
                                             <li><a href=""><span><i class="fab fa-instagram"></i></span></a></li>
                                             <li><a href=""><span><i class="fab fa-twitter"></i></span></a></li>
                                             <li><a href=""><span><i class="fab fa-twitter"></i></span></a></li>
                                             <li><a href=""><span><i class="fab fa-linkedin-in"></i></span></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="copy-right d-flex justify-content-between">
                         <div>
                             <p>Copyright © 2021 All Rights Reserved</p>
                         </div>
                         <div>
                             <p>Privacy Policy|Terms and conditions</p>
                         </div>
                     </div>
                     <div class="all-scroller">
                         <a href="#my-btn"><span class="fas fa-long-arrow-alt-up"></span></a>
                     </div>
                 </div>
             </div>
         </footer>
         <!------------------------footer-end-start------------------------>
     </div>
 @endif
