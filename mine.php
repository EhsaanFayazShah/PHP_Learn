<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Picture Carousel</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the picture carousel */
        .carousel-item img {
            width: 100%;
            height: 400px;
            /* Adjust the height of the carousel images */
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Picture Carousel Section -->
    <div id="pictureCarousel" class="carousel slide" data-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image2.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/food.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/image4.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/image4.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/image4.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/image4.jpg" alt="Image 3">
            </div>
            <!-- Add more slides as needed -->
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#pictureCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#pictureCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for automatic carousel -->
    <script>
        // Function to move to the next slide every 3 seconds
        function autoCarousel() {
            $('#pictureCarousel').carousel('next');
        }

        // Call the function every 3 seconds
        setInterval(autoCarousel, 3000);
    </script>
</body>

</html>