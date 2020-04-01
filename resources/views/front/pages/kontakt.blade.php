@extends("layout")

@section("content")
    <div class="container text-center " id="prvi">




        <!-- Contact Us Section -->

        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Mailer trenutno nije u funkciji</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Sajt je u izradi</p>

            </div>
            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="#">
                    <!-- Name -->
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Ime</label>
                        <input class="form-control" id="name" type="text" name="ime" required data-error="Unesite ime">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="unesite email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Naslov</label>
                        <input class="form-control" id="msg_subject" type="text" name="naslov" required data-error="Unesite naslov">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="msg" required data-error="Unesite poruku"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Pošalji</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
