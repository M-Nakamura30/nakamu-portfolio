<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-envelope"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div>
                    <p>１～３日以内に返信いたします。<br>
                        内容によってはお返事を差し上げられない場合もございます。<br>
                    あらかじめご了承ください。</p>
                </div>
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form method="POST" action="{{ route('contact.confirm') }}" >
                    @csrf
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    Name
                                    <input name="name" value="{{ old('name') }}" class="form-control" type="text" required="required">
                                    @if ($errors->has('name'))
                                    <p class="error-message">{{ $errors->first('name') }}</p>
                                    @endif

                                </div>
                                </label>
                            </div>
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    Email Address
                                    <input name="email" value="{{ old('email') }}" class="form-control" type="email" required="required">
                                </div>
                                </label>
                            </div>
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    Message
                                    <textarea class="form-control" name="body" rows="5" required="required" >{{ old('body') }}</textarea>
                                </div>
                                </label>
                            </div>
                            <br />
                            <div id="success"></div>
                            <input type="submit" class="btn btn-primary btn-xl" name="" value="確認">
                        </form>
            </div>
        </div>
    </div>
</section>