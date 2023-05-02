<?php include "header.php"
?>

<style>
    .bg-image {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .bg-image:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/mainRooms.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(1px);
        z-index: -1;
    }

    .bg-image:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0.9;
    }



    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: black;
        text-align: center;

    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }
</style>





<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-12 bg-image">
            <div class="text-overlay">
                <h1>Luxury Hotel Rooms</h1>
                <p style="font-size: 1.5rem;">
                    <strong>You are here for business or pleasure, our rooms provide a serene and relaxing environment to help you unwind. Experience the epitome of luxury with our top-tier rooms, which feature private balconies, jacuzzis, and other exclusive amenities. From our standard rooms to our most luxurious suites, we have a wide range of options to cater to your needs. Our attentive staff is dedicated to ensuring your stay is nothing short of perfect. Book your stay with us today and experience the ultimate in luxury and comfort.</strong>
                </p>
            </div>
        </div>
    </div>
</div>


<div style="display: flex; padding: 20px;">
    <div style="flex: 1; padding:9%">
        <h1>Deluxe Room</h1>
        <p style="font-size: 1.5rem;">The way we travel and move has changed in the last few years. We no longer want the typical photo that all our contacts post on Instagram. We no longer want to elbow our way through crowded museums. We no longer want to view the city through the mobile lens.
            It's not about travelling, it's about discovering.</p>
        <button type="submit" class="btn btn-primary btn-block">CHECK AVAILABITY</button>
    </div>
    <div style="width: 50%;">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/ourRooms1.jpg" class="d-block w-100" alt="Picture Room">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/mainRooms.jpg" class="d-block w-100" alt="Picture Room">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/ourRooms2.jpg" class="d-block w-100" alt="Picture Room">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<?php include "footer.php"
?>