<?php include 'header.php'; ?>

<header class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary " dir="rtl">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo IMAGES_DIR;?>logoSVG.svg" alt="moodpattern" title="moodpattern">
            </a>
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">فلسفه گراف حسی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">لیست گراف حسی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>
            </ul>
            <div class="col-md-3">
                <form class="d-flex">
                    <input type="text" class="form-control rounded-5 " placeholder="جستجو کنید...">
                    <a href="#" class="search-icon">
                        <img src="<?php echo IMAGES_DIR;?>search.svg" class="" alt="moodpattern" title="moodpattern">
                    </a>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img class="text-success" src="<?php echo IMAGES_DIR;?>user.svg" alt="moodpattern" title="moodpattern">
                            ورود</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ثبت نام</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success rounded-5 " type="submit">تماس با مشاوران</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!--slider-->
<section class="sliderBox">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo IMAGES_DIR;?>slider-graphic.png" alt="moodPattern" title="moodPattern" class="box2-leftSlider-img">
            </div>

            <div class="col-md-6" dir="rtl" >
                <div class="box2-RightSlider-img">
                    <!-- اطلاعات تماس -->
                    <h5 class="text-dark fs-5 m-4 p-4" dir="rtl">گراف حسی به طور دقیق به شما نشان خواهد داد <br/>رابطه ی زوجی که در آن هستید به چه میــــــــزان... </h5>
                    <ul class="list-unstyled text-white">
                        <li class="text-success mb-1">
                            <img src="<?php echo IMAGES_DIR;?>tik.svg" alt="moodpattern" title="moodpattern">
                            چه میزان از شادی ،غم ؛ اطظراب برای ما تولید می کند
                            <br/>
                            <span class="text-black-50">
                             چه میزان برای ما انرژی بخش است.جه میزان در تو اعتماد بنفس و عزت نفس میدهد.
                            </span>
                        </li>
                        <li class="text-success mb-2">
                            <img src="<?php echo IMAGES_DIR;?>tik.svg" alt="moodpattern" title="moodpattern">
                            احساسات تو را درجه بندی می کند
                            <br/>
                            <span class="text-black-50">
                              بحران در روابط زناشویی،و ععلی گه  ناشی میشود و مسیر اصلاح رابط را تجلیل و هموار میکند
                            </span>
                        </li>
                        <li class="text-success mb-2">
                            <img src="<?php echo IMAGES_DIR;?>tik.svg" alt="moodpattern" title="moodpattern">
                            گراف حسی هماهنگی، توان و ظرفیت  را در یک رابطه مشخص می کند
                            <br/>

                            <span class="text-black-50">
                               برایتان مشخص می شود چقدر ظرفیت ترک یا ادامه رابطه را داریم
                            </span>
                        </li>
                        <li class="text-success mb-2">
                            <img src="<?php echo IMAGES_DIR;?>tik.svg" alt="moodpattern" title="moodpattern">
                            گرافیگ حسی تغیرات مورد نیاز  را در یک رابطه مشخص می کند.
                            <br/>
                            <span class="text-black-50">
                               گرافیک حسی برای ادامه یا ترگ یک رابطه تعیرات را برای ما مشخص می کند.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--info-->
<div class="container">
    <section class="info mt-5">
        <div class="row">
            <div class="col-md-8">
                <button type="button" class="btn btn-success m-xl-2 rounded-4 p-2 ">
                    تماس با مشاوران
                    <img src="<?php echo IMAGES_DIR;?>call.svg" alt="moodpattern" title="moodpattern">
                </button>
                <button type="button" class="btn btn-light btn-outline-success rounded-4 p-2 m-2 ml-4">مشاوره از طریق واتساپ

                    <img src="<?php echo IMAGES_DIR;?>watus.svg" alt="moodpattern" title="moodpattern">
                </button>
                <button type="button" class="btn btn-light btn-outline-success rounded-4  p-2 m-2">
                    مشاوره از طریق تلگرام
                    <img src="<?php echo IMAGES_DIR;?>telgram.svg" alt="moodpattern" title="moodpattern">
                </button>
            </div>
            <div class="col-md-4">
                <p class="m-2 p-2 fs-6" dir="rtl">
                    جهت مشاوره با ما در ارتباط باشید .
                </p>
            </div>
        </div>
    </section>
    <div class="row" >
        <div class="col-md-6">
            <img src="<?php echo IMAGES_DIR;?>box2-background.svg" alt="moodPattern" title="moodPattern" class="box2-l-img">
        </div>
        <div class="col-md-6">
            <div class="loginFrm m-2 box2-r-img">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-light m-4" dir="rtl" >
                                فرم ثبت موضوع
                            </h6>
                            <p class="text-light m-4 justify-content-md-center" dir="rtl">
                                با ترسیم گراف حسی می‌تونم کیفت رابطه تو با هرچیزی یا هر هدف یا کاری را تحلیل کنم، مثل فایده و هزینه درونی که برات داره یا میزان علاقه واقعی، نیاز حسی و توانمندی که نسبت بهش داری و خیلی چیزای دیگه، حالا به من بگو الان در مورد چه موضوعی می خوای بدونی؟
                            </p>

                            <div class="col-md-9 offset-3" dir="rtl">
                                <div class="m-4 d-grid gap-3 " dir="rtl">
                                    <label>
                                        <input type="text" name="title" class="form-control" placeholder="عنوان">
                                    </label>
                                    <label>
                                        <input type="text" name="relationPeaple" class="form-control"  placeholder="رابطه انسانی">
                                    </label>
                                </div>
                                <div class="m-4 d-grid gap-1">

                                    <button class="btn btn-light text-success" type="button">شروع کنید</button>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--sliderboxsvg-->
    <div class="row">
        <div class="col-md-10 justify-content-md-center mt-5 mb-5" dir="rtl">
            <h4 class="text-dark my-lg-5" >
                با تحلیل گراف حسی در روابط انسانی آگاه می شویم که:
            </h4>
        </div>
        <!--circle1-->
        <div class="col-md-3 my-5" dir="rtl">
            <div class="card h-100 border border-success" style="width:16rem;">
                <div class="card-img-top text-center cardMargintop">
                    <object data="<?php echo IMAGES_DIR;?>circle.svg" type="image/svg+xml"></object>
                </div>
                <div class="card-body">
                    <p class="card-text">میزان شادی ،خشم ،غم و استرس تولید شده چقدر است</p>
                </div>
            </div>
        </div>
        <!--circle2-->
        <div class="col-md-3 my-5" dir="rtl">
            <div class="card h-100 border border-success" style="width:16rem;">
                <div class="card-img-top text-center cardMargintop">
                    <object data="<?php echo IMAGES_DIR;?>circle1.svg" type="image/svg+xml"></object>
                </div>
                <div class="card-body">
                    <p class="card-text">میزان شادی ،خشم ،غم و استرس تولید شده چقدر است</p>
                </div>
            </div>
        </div>
        <!--circle3-->
        <div class="col-md-3 my-5" dir="rtl">
            <div class="card h-100 border border-success" style="width: 16rem;">
                <div class="card-img-top text-center cardMargintop">
                    <object data="<?php echo IMAGES_DIR;?>circle2.svg" type="image/svg+xml"></object>
                </div>
                <div class="card-body">
                    <p class="card-text">وجود این رابطه چگونه بر  کاهش یا افزایش عزت نفس و اعتماد بنفس تاثیر دارد.</p>
                </div>
            </div>
        </div>
        <!--circle4-->
        <div class="col-md-3 my-5 mar" dir="rtl">
            <div class="card h-100 border border-success" style="width: 16rem;">
                <div class="card-img-top text-center cardMargintop">
                    <object data="<?php echo IMAGES_DIR;?>circle3.svg" type="image/svg+xml"></object>
                </div>
                <div class="card-body">
                    <p class="card-text">میزان توانایی فرد را در ترک و یا ماندن و ادامه دادن رابطه را مشخص میکند.</p>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
    <!--boxStart-->
    <!--boxStart-->
    <div class="box3 my-5">
        <div class="row">
            <div class="col-md-2">
                <object data="<?php echo IMAGES_DIR;?>faq.svg" type="image/svg+xml"></object>
            </div>
            <div class="col-md-2" dir="rtl">
                <button class="btn btn-light text-success mt-4" type="button">شروع کنید</button>
            </div>
            <div class="col-md-8">
                <h6 class="text-white text-center mt-2" dir="rtl">
                    با ترسیم گراف حسی
                </h6>
                <p class="text-warning m-1 p-1 fs-6" dir="rtl">
                    با ترسیم گراف حسی نقاط بحرانی و قوت رابطه شناسایی ومسیر برای ماندن در رابطه و یا ترک آن روشن می شود
                </p>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <img src="<?php echo IMAGES_DIR;?>logo.svg" alt="moodpattern" title="moodpattern">

                <img src="<?php echo IMAGES_DIR;?>textLogo.svg" alt="moodpattern" title="moodpattern">

                <!-- نقشه گوگل -->
                <!-- اضافه کردن نقشه از گوگل با استفاده از کد Embed شده -->
                <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25897.79347643372!2d51.391414399999995!3d35.76986905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e06f8e6ad6b4b%3A0x4fde4f4d6ca30e47!2sVanak%2C%20District%203%2C%20Tehran%2C%20Tehran%20Province%2C%20Iran!5e0!3m2!1sen!2snl!4v1702829771308!5m2!1sen!2snl" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <ul class="list-unstyled text-white" dir="ltr">
                    <li>
                        <img src="<?php echo IMAGES_DIR;?>instagram.svg" alt="moodpattern" title="moodpattern">
                        <img src="<?php echo IMAGES_DIR;?>instagram.svg" alt="moodpattern" title="moodpattern">
                        <img src="<?php echo IMAGES_DIR;?>instagram.svg" alt="moodpattern" title="moodpattern">
                        <img src="<?php echo IMAGES_DIR;?>instagram.svg" alt="moodpattern" title="moodpattern">

                    </li>
                </ul>
            </div>
            <div class="col-md-6 mt-5" dir="rtl">
                <!-- اطلاعات تماس -->
                <h5 class="text-white">اطلاعات تماس</h5>
                <ul class="list-unstyled text-white">
                    <li>
                        <img src="<?php echo IMAGES_DIR;?>map.svg" alt="moodpattern" title="moodpattern">
                        شعبه 1: خیابان پیروزی نرسیده به چهار راه گوگا گولا روبروی گوچه جعفر نژاد جنب کافی شاپ دیدار بالای داروحانه شبانه روزی طبقه دوم
                    </li>
                </ul>
                <h5 class="text-white">تلفن</h5>
                <ul class="list-unstyled text-white" dir="rtl">
                    <li>
                        <img src="<?php echo IMAGES_DIR;?>call.svg" alt="moodpattern" title="moodpattern">
                        021-36601073
                        <img src="<?php echo IMAGES_DIR;?>call.svg" alt="moodpattern" title="moodpattern">
                        021-36601073
                        <img src="<?php echo IMAGES_DIR;?>call.svg" alt="moodpattern" title="moodpattern">
                        021-36601073
                    </li>
                </ul>
                <!-- اطلاعات تماس -->
                <h5 class="text-white">ایمیل :</h5>
                <ul class="list-unstyled text-white">
                    <li>
                        <img src="<?php echo IMAGES_DIR;?>email.svg" alt="moodpattern" title="moodpattern">
                        INFO@GRAFHESI.COM
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>
<!--copyRight-->
<div class="copyRight"></div>


<?php include 'footer.php'; ?>

