<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/index.css">
    <title><?php echo $settings_r['site_title'] ?> - FACILITIES</title>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        .pop:hover {
            border-top-color: #2ec1ac !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Whether you are travelling for business or pleasure, the luxury hotel services offered by the five star Grand Placid Hotel make it an ideal choice for your stay in Khulna, Bangladesh. The hotel’s luxurious surroundings, comfort, thoughtful touches and a personalized service sets it apart from any other hotel, allowing you to feel like being at home from your very first steps into the hotel.
            We are geared towards the fulfilment of the needs of any discerning guest and below you can find an overview of the most commonly-used services and facilities offered by our boutique hotel.</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $res = selectAll('facilities');
            $path = FEATURES_IMG_PATH;

            while ($row = mysqli_fetch_assoc($res)) {
                echo <<<data
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="$path$row[icon]" width="40px">
                                <h5 class="m-0 ms-3">$row[name]</h5>
                            </div>
                            <p>$row[description]</p>
                        </div>
                    </div>
                data;
            }
            ?>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>

</html>