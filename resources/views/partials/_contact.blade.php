@switch($contact)
@case('1')
@foreach ($gutachter as $gutachters)
@if ($name == $gutachters['UrlName'])

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact pt-0 mt-0">
      <div class="container">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Die Abgabe einer Anfrage ist für Sie unverbindlich und kostenlos!</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ort:</h4>
                <p>{{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$gutachters['Email']}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon:</h4>
                <p>{{$gutachters['Phone']}}</p>
              </div>
              <iframe
                src="{{$gutachters['Map']}}"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Betreff</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Nachricht</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Nachricht senden</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
 @endif
 @endforeach
 
 @break

 @case('2')
       
    <section id="contact" class="contact pt-0 mt-0">
      <div class="container">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Die Abgabe einer Anfrage ist für Sie unverbindlich und kostenlos!</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ort:</h4>
                <p>Hrdenbergstraße 10, 32427 Minden</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>freda-lohse@baucampus.de</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon:</h4>
                <p>05722 913800</p>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.5608782516947!2d8.902243777046202!3d52.28767367200127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ba7405ef476345%3A0xa1066e708ad5c889!2sHardenbergstra%C3%9Fe%2010%2C%2032427%20Minden!5e0!3m2!1sde!2sde!4v1673145152636!5m2!1sde!2sde"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

           <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Vorname:</strong>
                                        <input type="text" name="firstname" class="form-control" placeholder="Vorname" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Nachname:</strong>
                                        <input type="text" name="lastname" class="form-control" placeholder="Nachname" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Telefonnummer" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Stadt:</strong>
                                        <input type="text" name="city" class="form-control" placeholder="Stadt" value="{{ old('city') }}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Objecttype:</strong>
                                        <input type="text" name="objecttype" class="form-control" placeholder="Objecttype" value="{{ old('objecttype') }}">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>    
                             <p><input type="checkbox"  name="checkbox" value="Checkbox"> 
                                         @if ($errors->has('checkbox'))
                                            <span class="text-danger">{{ $errors->first('checkbox') }}</span>
                                        @endif   
                                        
                              Ich stimme zu, dass meine Angaben aus dem Kontaktformular zur Bearbeitung meiner Anfrage erhoben und verarbeitet werden. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail widerrufen. Detaillierte Informationen zum Umgang mit Nutzerdaten finden Sie in unserer <a href="/datenschutzerklaerung">Datenschutzerklärung</a>.</p>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
          </div>

        </div>

      </div>
    </section>
    @break
 @endswitch
