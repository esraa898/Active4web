@extends('front.layouts.master')

@section('title')

Contactus -تواصل معنا  

@endsection

@section('css')

@endsection 


@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('assets/front/img/header-bg-5.jpg')}})no-repeat center center / cover">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
              <h1 class="text-white mb-0">اتصل بنا</h1>
              <div class="custom-breadcrumb">
                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                  <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                  <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                  <li class="list-inline-item active">اتصل بنا</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact-section">
      <div class="container">
        <div class="row">
              
          <div class="contact-form-column col-md-8 col-sm-12 col-xs-12">
            <div class="inner-column">
              <h2>اترك رسالتك هنا</h2>
              <p class="text">لقد ساعدنا مؤخرًا شركة صغيرة على النمو من نقطة التعادل إلى ربح يزيد عن مليون دولار في أقل من عامين ، لديك سؤال عام ، ابحث أدناه عن تفاصيل الاتصال.</p>
              <div class="contact-form">
                <form id="contact-form">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" name="username" placeholder="اسم*">
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" placeholder="البريد الإلكتروني*">
                      </div>
                      
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <textarea name="message" placeholder="رسالتك..."></textarea>
                      </div>
                    </div>
                    <div class="btn-column col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">أرسل الآن</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="contact-info-column col-md-4 col-sm-12 col-xs-12">
            <div class="inner-column">
              <div class="upper-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
              </div>
              <div class="lower-box">
                <ul class="info-list">
                  <li>
                    <span class="icon"><img src="{{ asset('assets/front/img/address-icon.png')}}"></span> 
                    <strong>العنوان  :</strong> مدينة  نصر مكرم عبيد شارع توكل فريش
                  </li>
                  <li>
                    <span class="icon"><img src="{{ asset('assets/front/img/phone-icon.png')}}"></span> 
                    <strong>اتصل بنا:</strong><br> 01011112223334
                  </li>
                  <li><span class="icon">
                    <img src="{{ asset('assets/front/img/mail-icon.png')}}"></span> 
                    <strong>البريد لنا:</strong><br> Active-web@Gosearch.com
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     


     
@endsection