<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Carousel with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
    <?php
    // Array of slide data
    $slides = [
        [
            "image" => "https://via.placeholder.com/1920x500",
            "title" => "First Slide Title",
            "description" => "Some representative placeholder content for the first slide."
        ],
        [
            "image" => "https://via.placeholder.com/1920x500",
            "title" => "Second Slide Title",
            "description" => "Some representative placeholder content for the second slide."
        ],
        [
            "image" => "https://via.placeholder.com/1920x500",
            "title" => "Third Slide Title",
            "description" => "Some representative placeholder content for the third slide."
        ]
    ];
    ?>

    <div id="dynamicCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php foreach ($slides as $index => $slide): ?>
                <button type="button" data-bs-target="#dynamicCarousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= $slide['image'] ?>" class="d-block w-100" alt="Slide <?= $index + 1 ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $slide['title'] ?></h5>
                        <p><?= $slide['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#dynamicCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#dynamicCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
