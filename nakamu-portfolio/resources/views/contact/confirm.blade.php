<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>なかむらポートフォリオ</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/na.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="http://127.0.0.1:8000/" style="margin-right: 0px;">Nakamura portfolio</a>
    </div>
</nav>
<p>以下の内容で送信します。よろしいですか？</p>
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
                <form method="POST" action="{{ route('contact.send') }}" onsubmit="return checkNijyuSubmit();" id="btnSubmit">
                    @csrf
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    {{ $inputs['name'] }}
                                    <input name="name" value="{{ $inputs['name'] }}" type="hidden">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Addre</label>
                                    {{ $inputs['email'] }}
                                <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    {!! nl2br(e($inputs['body'])) !!}
                                    <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <button type="button" onclick="history.back()" class="btn btn-primary btn-xl" style="margin: 10px">修正</button>
                            <button type="submit" name="action" value="submit" class="btn btn-primary btn-xl kakunin" style="margin: 10px">
                                送信
                            </button>
<script>
//判定用フラグ
var isSubmit = false;
function checkNijyuSubmit(){
  if(isSubmit){
    //フラグがtrueならアラートを表示してsubmitしない
    Swal.fire("送信中です")
    return false;
  }else{
    //フラグがtrueでなければ、フラグをtrueにした上でsubmitする
    isSubmit = true;
    return true;
  }
}
</script>
                        </form>
            </div>
        </div>
    </div>
</section>

    <!-- Footer-->
    @include('partials.footer')
</body>
</html>