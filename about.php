<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/index.css">
    <title><?php echo $settings_r['site_title'] ?> - ABOUT</title>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        .box:hover {
            border-top-color: #2ec1ac !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">We at The Grand Placid Hotel Canova strive to create a pleasant and welcoming atmosphere. It’s our goal to make our clients feel at ease, greeting them with professionalism and attention for their every need. All our accommodations have satellite television, bathroom with shower, room safe, heating and air conditioning. All the rooms are equipped with balcony, some with a sea view. We also have a restaurant on the ground floor to satisfy our guests with authentic regional cooking. We are ready to give you an unforgettable holiday!</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Praesentium soluta similique, incidunt doloribus magnam hic amet?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Praesentium soluta similique, incidunt doloribus magnam hic amet?</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.webp" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.webp" width="70px">
                    <h4 class="mt-3">2000+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/ratings.jpg" width="90px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staffs.webp" width="55px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <?php
                $about_r = selectAll('team_details');
                $path = ABOUT_IMG_PATH;

                while ($row = mysqli_fetch_assoc($about_r)) {
                    echo <<<data
                        <div class="swiper-slide bg-whiite text-center overflow-hidden rounded">
                            <img src="$path$row[picture]" class="w-100">
                            <h5 class="mt-2">$row[name]</h5>
                        </div>
                    data;
                }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1014: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>