<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our - Partners</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Font Awesome Link -->
    <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

</head>
<body>
        <section class="customer-logos slider">
    <div class="slide">
        <div class="card">
            
            <div class="content">
                <div class="title">Asa</div>
                <div class="sub-title">dolor sit amet</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="content">
                <div class="title">Asa</div>
                <div class="sub-title">dolor sit amet</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="content">
                <div class="title">Asa</div>
                <div class="sub-title">dolor sit amet</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
        </section>
    

    <script>
    
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover:false,
            responsive: [{
                breakpoint: 768,
                setting: {
                    slidesToShow:4
                }
            }, {
                breakpoint: 520,
                setting: {
                    slidesToShow: 3
                }
            }]
        });
    });

    </script>

</body>
</html>