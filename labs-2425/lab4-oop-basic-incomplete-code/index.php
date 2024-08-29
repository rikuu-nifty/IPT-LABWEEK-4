<?php

require "Profile.php";

$profile = new Profile(
    "Dela Cruz",
    "Juan",
    "Dipasisiil"
);

$profile->setEmail('juan@delacruz.ph');
$profile->setAddress('Barangay Mintal, Davao City, Philippines 8000');
$profile->setFavoriteQuote('To see a world in a grain of sand, And a heaven in a wild flower.');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <style>
        /* Custom style to center content vertically */
        html, body {
            height: 100%;
        }
        .is-vertical-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vh;
        }
    </style>
</head>
<body>
    <section class="section is-vertical-center">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box has-text-centered">
                        <h1 class="title is-3"><?php echo $profile->getCompleteName(); ?></h1>
                        <h2 class="subtitle is-5"><?php echo $profile->getEmail(); ?></h2>
                        <h2 class="subtitle is-5"><?php echo $profile->getAddress(); ?></h2>
                        <p class="content is-medium">
                            <?php echo $profile->getFavoriteQuote(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
