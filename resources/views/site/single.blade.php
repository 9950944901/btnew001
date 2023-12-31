
@extends('site.layouts.app')
@section('title','')
@section('content')
  
  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Our Blog Single Page</h3>
        <ul>
          <li><a href="{{ route('Site.Home') }}">Home</a></li>
          <li>-</li>
          <li>Blog Single</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Blog Post Start here -->
  <section class="blog-post padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="single-post">
            <div class="post-image">
              <img src="{{ url('/') }}/public/site/assets/images/blog/post_01.jpg" alt="post image" class="img-responsive">
            </div>
            <div class="post-content">
              <h3>Asertivelly recaptiualize best rofesionally</h3>
              <ul class="post-meta">
                <li><span class="icon flaticon-people-1"></span> <a href="#">Robot Smith</a></li>
                <li><span class="icon flaticon-like"></span> <a href="#">128 Likes</a></li>
                <li><span class="icon flaticon-chat"></span> <a href="#">32 Comments</a></li>
              </ul>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <blockquote>Completely actuaze cent centric coloration and idea saharng without and creati installed an
                awesome theme of event aresourcescreatve awesome template and completely template a and awesome event
                template and awesome event template.</blockquote>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
              <p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is
                viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices
                Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand
                sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine
                effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive
                services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic
                products.</p>
            </div>
            <div class="content-bottom">
              <ul class="post-tags">
                <li><span class="flaticon-tags-outline"></span> Tags :</li>
                <li><a href="#">Corporate</a> -</li>
                <li><a href="#">KidsAcademy</a> -</li>
                <li><a href="#">Agency</a> -</li>
                <li><a href="#">Business</a></li>
              </ul>
              <ul class="post-share">
                <li><span class="flaticon-share"></span> Share :</li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
            </div><!-- content-bottom -->
            <div class="post-comments">
              <h3>03 Comments</h3>

              <ul>
                <li>
                  <div class="the-comment">
                    <div class="comment-image">
                      <img src="{{ url('/') }}/public/site/assets/images/blog/user_01.jpg" alt="user image" class="img-responsive">
                    </div>
                    <div class="comment-content">
                      <h4>Robot Smith</h4>
                      <span class="day"> 02 days ago at 10:30pm </span>
                      <span class="comm-reply"><i class="flaticon-back"></i> <a href="#">Reply</a></span>
                      <p>Professionally optimize intermandated data rather than and oriented and band width Seamlesly
                        and the extend distinctive awesome charity web services eamlesly and the extend distinctive
                        awesome charity web services.</p>
                    </div>
                  </div>
                  <ul>
                    <li>
                      <div class="the-comment">
                        <div class="comment-image">
                          <img src="{{ url('/') }}/public/site/assets/images/blog/user_02.jpg" alt="user image" class="img-responsive">
                        </div>
                        <div class="comment-content">
                          <h4>Janaton Smith</h4>
                          <span class="day"> 02 days ago at 10:30pm </span>
                          <span class="comm-reply"><i class="flaticon-back"></i> <a href="#">Reply</a></span>
                          <p>Professionally optimize intermandated data rather than and oriented and band width
                            Seamlesly and the extend distinctive awesome charity web and services eamlesly and the
                            extend distinctive.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="the-comment">
                    <div class="comment-image">
                      <img src="{{ url('/') }}/public/site/assets/images/blog/user_03.jpg" alt="user image" class="img-responsive">
                    </div>
                    <div class="comment-content">
                      <h4>Jhonson Smith</h4>
                      <span class="day"> 02 days ago at 10:30pm </span>
                      <span class="comm-reply"><i class="flaticon-back"></i> <a href="#">Reply</a></span>
                      <p>Professionally optimize intermandated data rather than and oriented and band width Seamlesly
                        and the extend distinctive awesome charity web services eamlesly and the extend distinctive
                        awesome charity web services.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div><!-- post-comments -->
            <div class="reply-form">
              <h3>Leave A Reply</h3>

              <form>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" name="name" placeholder="Name*" class="com-input">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="email" name="email" placeholder="Email*" class="com-input">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input type="text" name="website" placeholder="Website" class="com-input">
                  </div>
                </div>
                <textarea rows="6" class="com-input">Comments*</textarea>
                <button class="button-default">Submit Comment</button>
              </form>
            </div>
          </div><!-- single post -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-item">
              <form>
                <input type="text" name="text" placeholder="Search Your Catagorie...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">All Categories</h3>

              <ul class="sidebar-categories">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Brand Creation
                    <span>05</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Company Analysis
                    <span>27</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Corporate Identity
                    <span>07</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Funding <span>09</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Medical <span>08</span></a>
                </li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Strategy Planning
                    <span>25</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Uncategorized
                    <span>20</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Video Production
                    <span>30</span></a></li>
              </ul>
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Latest Blog Post</h3>

              <ul class="sidebar-posts">
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_01.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_02.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_03.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
                <li>
                  <div class="image">
                    <a href="{{ route('Site.Single') }}"><img src="{{ url('/') }}/public/site/assets/images/blog/latest_post_04.jpg" alt="post image"
                        class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <a href="{{ route('Site.Single') }}">Foulate revlunry and the mihare are a awesome the theme.</a>
                    <span>04 February 2021</span>
                  </div>
                </li>
              </ul><!-- sidebar-posts -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Photos Gallery</h3>

              <ul class="sidebar-gallery">
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_01.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_02.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_03.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_04.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_05.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_06.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_07.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
                <li><a href="#"><img src="{{ url('/') }}/public/site/assets/images/blog/gallery_08.jpg" alt="gallery image" class="img-responsive"></a>
                </li>
              </ul><!-- sidebar-gallery -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Recent Twitters</h3>

              <ul class="sidebar-twitts">
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Robot Smith</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Janaton Doe</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Smith Jhonson</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
                <li>
                  <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Jhonson Doe</a></li>
                      <li><a href="#">@ bonndu05 ascenarios</a></li>
                    </ul>
                    <p>Uniquely morph turnkey technlogy an</p>
                    <a href="#">http://trimanco.com/5e7ee</a>
                  </div>
                </li>
              </ul><!-- sidebar-twitts -->
            </div><!-- sidebar item -->
            <div class="sidebar-item">
              <h3 class="sidebar-title">Latest Tags</h3>

              <ul class="sidebar-tags">
                <li><a href="#">Business</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Agency</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Joomla</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div><!-- sidebar item -->
          </div><!-- sidebar -->
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Post End here -->

@endsection