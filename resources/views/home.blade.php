@extends('layouts.master')

@section('title', 'Web Applications Freelancer')


@section('content')
<!---=======================================================================
  HEADER
========================================================================-->
  <header class="header">
    <div class="header__logo">
      <div class="logo__img">
          <img class="img__svg" src="{{ URL::to('assets/img/Logo-H2.svg') }}" alt="" />
      </div>
    </div>
    <div class="header__hero">
      <div class="hero__filter">
        <div class="hero__container">
          <div class="cantainer__text">
            <div class="container">
              <h2 class="text__h2" >Discoverer</h2>
              <h2 class="text__h2 text__h2--white" >Developer</h2>
              <h2 class="text__h2" >Designer</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!---=======================================================================
    ABOUT
  ========================================================================-->
  <section class="about">
      <div class="about__text container">
        <p class="text__p">
          Hello, I’m William Hernández, a Full Stack Web Developer
          specialized in building custom web applications
          solutions for your particular business needs.
        </p>
      </div>
  </section>
  <!---=======================================================================
    CALL
  ========================================================================-->
  <section class="call">
    <div class="call__container container">
      <h2 class="call__h2">Why custom build?</h2>
      <p class="call__p">
        Wordpress is a great tool, don’t get me wrong, but sometimes you need
        something that’s your own.  Something that’s speaks to you, something
        unique that you cannot get from installing plug-in, after plug-in, after
        plug-in… When you’re lost in a river of unnecessary clutter you stumble,
        your team struggles and your business suffers.
      </p>
      <div class="call__btn">
          <a class="btn btn-lg  call__btn--orange" href="#">That’s when you call me!</a>
      </div>
    </div>
  </section>
  <!---=======================================================================
  WORKS
  ========================================================================-->
  <section class="work">
    <div class="work__container">
      <div class="work__top work__top--green">
        <!---=======================================================================
        Ontime soft
        ========================================================================-->
        <div class="container">
          <h2 class="work__h2">OnTime Soft Inc.</h2>
          <h2 class="work__h2">Custom Web Site, Web App &amp; CRM.</h2>
          <h4 class="work__h4">The most reliable community pharmacy service provider in Puerto Rico.</h4>
          <p class="work__p">
            // UX Design, Web Front-end &amp; Back-end Design and Development
          </p>
          <p class="work__p">
            (Dashboard Design, Administrator &amp; User Log-in System, Landing Page Generator)
          </p>
          <div class="work__img">
            <img class="work__image" src="{{ URL::to('assets/img/mockup-ontime.png') }}" alt="ontime-rx30-Web App" />

          </div>
        </div>
      </div>
      <div class="work__footer">
          <a class="btn btn-lg  work__btn work__btn--ot" href="http://rx30pr.com/" target="_blank">Rx30pr.com</a>
      </div>
    </div>

    <div class="work__container">
      <div class="work__top work__top--green--md">
        <!---=======================================================================
        Latte brands
        ========================================================================-->
        <div class="container">
          <h2 class="work__h2">Latte Brands</h2>
          <h2 class="work__h2">Custom Web Site &amp; Hybrid App.</h2>
          <h4 class="work__h4">Offering On-site Barista Courses, Professional Coffee Catering and
            putting on the map a new way to look at Coffee Shops;
            this start-up shows a lot of promise.</h4>
          <p class="work__p">
            Under Construction
          </p>

          <div class="work__img">
            <img class="work__image" src="{{ URL::to('assets/img/mockup-latte.png') }}" alt="latte brands-Web App" />

          </div>
        </div>
      </div>
      <div class="work__footer">
          <a class="btn btn-lg  work__btn work__btn--lb" href="http://lattebrands.com/" target="_blank">Lattebrands.com</a>
      </div>
    </div>

    <div class="work__container">
      <div class="work__top work__top--green--lw">
        <!---=======================================================================
        Stey tuned
        ========================================================================-->
        <div class="container">
          <h2 class="work__h2">StayTuned.tv.</h2>
          <h2 class="work__h2">Custom Web Site &amp; Web App.</h2>
          <h4 class="work__h4">  Taking unknown artist and getting them notice, this business is all about
            letting musicians, artist and filmographers do what they do best,
            while they take care of the rest.</h4>
          <p class="work__p">
            Under Construction
          </p>

          <div class="work__img">
            <img class="work__image" src="{{ URL::to('assets/img/mockup-staytuned.png') }}" alt="staytuned.tv-Web App" />

          </div>
        </div>
      </div>
      <div class="work__footer">
          <a class="btn btn-lg  work__btn work__btn--st" href="http://staytuned.tv/" target="_blank">Staytuned.tv</a>
      </div>
    </div>
  </section>

  <!---=======================================================================
  Contact
  ========================================================================-->
  <section class="contact">
    <div class="contact__container container">
      @if (count($errors) > 0)
          <!-- Modal error -->
          <div id="myModal" class="modal fade error" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header error__header">
                  <button type="button" class="close error__close" data-dismiss="modal">&times;</button>
                  <div class="error__item">
                    <i class="fa fa-exclamation-circle error__item--icon" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="modal-body error__body">
                  @foreach($errors->all() as $error)
                    <p class="error__p"><i class="fa fa-exclamation error__p--icon" aria-hidden="true"></i> {{ $error }}</p>
                  @endforeach
                </div>

              </div>

            </div>
          </div>
      @endif

      @if(Session::has('success'))
      <div id="myModal" class="modal fade send" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header send__header">
              <button type="button" class="close send__close" data-dismiss="modal">&times;</button>
              <div class="send__item">
                <i class="fa fa-check-circle-o send__item--icon" aria-hidden="true"></i>
              </div>
            </div>
            <div class="modal-body send__body">
                <p class="send__p"> {{ Session::get('success') }} </p>
            </div>

          </div>

        </div>
      </div>

      @endif
      <div class="row">
        <div class="col-md-6">
            <h2 class="contact__h2">Get in touch</h2>
            <p class="contact__p">
              I would love to know
              about your business
              needs, if you care to
              chat, let me know.
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="contact__h2">Send me a message</h2>
          <form id="form_contact" role="form" action="{{ route('contact') }}" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="contact__label" for="name">Name:</label>
                  <input type="text" name="name" class="form-control contact__input" id="name">
                </div>
                <div class="form-group">
                  <label class="contact__label" for="email">Email:</label>
                  <input type="email" name="email" class="form-control contact__input" id="email">
                </div>
                <div class="form-group">
                  <label class="contact__label" for="url">Website <small>(if update required)</small></label>
                  <input type="url" name="url" class="form-control contact__input" id="url">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="contact__label" for="comment">Message:</label>
                  <textarea class="form-control contact__text" rows="5" name="message" id="message"></textarea>
                </div>
                 <button type="submit" onclick="send(event)" class="btn contact__btn">Submit</button>
                 <input type="hidden" name="_token" value="{{ Session::token() }}">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
