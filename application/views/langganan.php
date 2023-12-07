<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/sepatu2.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles2.css">


    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-YIeoV_QmZDpZ1Mki"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <title>Berlangganan</title>
</head>
<body>
     <!--==================== HEADER ====================-->
     <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="assets/img/sepatu2.png" alt="" class="nav__logo-img">
                SHOELEAN
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                    <a href="<?= site_url('./') ?>" class="nav__link">Home</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <img src="assets/img/nav-img.png" alt="" class="nav__img">
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

        </nav>
    </header>
    <!--==================== ABOUT ====================-->
    <section class="section about" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">Memasuki Tahap Pembayaran!</h2>
                    <p class="about__description">
                        Anda tinggal satu langkah lagi untuk menyelesaikan pembelian Anda. Lakukan pembayaran sekarang ya ...
                        Terima kasih :3
                        </p>
                        <button id="pay-button" class="button">Pay!</button>
                        </div>
                            <img src="assets/img/about-img.png" alt="" class="about__img">
                        </div>
                        <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
                        <input type="hidden" name="result_type" id="result-type" value=""></div>
                        <input type="hidden" name="result_data" id="result-data" value=""></div>
                        </form>
                  
            </section>

            <script type="text/javascript">
                $('#pay-button').click(function (event) {
                    event.preventDefault();
                    $(this).attr("disabled", "disabled");
                    
                    $.ajax({
                        url: '<?=site_url()?>/snap/token',
                        cache: false,

                        success: function(data) {
                            console.log('token = '+data);
                            
                            var resultType = document.getElementById('result-type');
                            var resultData = document.getElementById('result-data');

                            function changeResult(type,data){
                                $("#result-type").val(type);
                                $("#result-data").val(JSON.stringify(data));
                            }

                            snap.pay(data, {
                                onSuccess: function(result){
                                    changeResult('success', result);
                                    console.log(result.status_message);
                                    console.log(result);
                                    window.location.href = "<?= base_url('Welcome/register'); ?>";
                                    
                                },
                                onPending: function(result){
                                    changeResult('pending', result);
                                    console.log(result.status_message);
                                    $("#payment-form").submit();
                                    window.location.href = "<?= base_url('Welcome/register'); ?>";
                                },
                                onError: function(result){
                                    changeResult('error', result);
                                    console.log(result.status_message);
                                    $("#payment-form").submit();
                                }
                            });
                        }
                    });
                });
            </script>

            
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <!-- <script src="assets/js/scrollreveal.min.js"></script> -->

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
</body>
</html>