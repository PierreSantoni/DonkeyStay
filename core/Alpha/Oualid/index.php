<?php include '../core/UI/header.php'; ?>



<div class="home-page my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="search-bar">
                    <form>
                        <div class="form-group">
                            <label for="hotel">Hotel Name or Location</label>
                            <input type="text" class="form-control" id="hotel" placeholder="Enter hotel name or location">
                        </div>
                        <div class="form-group">
                            <label for="arrivee">Arrival Date</label>
                            <input type="date" class="form-control" id="arrivee" placeholder="Enter arrival date" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="depart">Departure Date</label>
                            <input type="date" class="form-control" id="depart" placeholder="Enter departure date" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="personnes">Number of Guests</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="adultes">Adults</label>
                                    <input type="number" class="form-control" id="adultes" placeholder="Enter number of adults" min="0">
                                </div>
                                <div class="col-md-6">
                                    <label for="enfants">Children under 3 years old</label>
                                    <input type="number" class="form-control" id="enfants" placeholder="Enter number of children" min="0">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bg-image p-0" style="background-color: rgb(136 136 136); max-width: 800px; border-radius: 20px;">
    <div class="row">
        <div id="About" class="col-md-12 text-center text-md-left">
            <br><br>
            <h2 class="my-5";">About Us</h2>

            <p class="mx-md-auto my-5 text-center" style="font-size: 1.2em;">
                The way we travel and move has changed in the last few years. We no longer want the typical photo that
                all our contacts post on Instagram. <br><br>

                We no longer want to elbow our way through crowded museums. We no longer want to view the city
                through the mobile lens. <br><br>

                It's not about travelling, it's about discovering. Travellers are the 21st century pilgrims who seek the
                basic, long-lasting and human essence. The city is a canvas of emotions and experiences and culture is the
                invisible architecture that frames it. <br><br>

                Only YOU designs a new way of travelling inspired by the local and human connection where each hotel
                turns into a reflection of its environment. Dear travellers: you've reached your destination.
                <br>
            </p>
        </div>
    </div>
</div>





<div class="container-fluid bg-image p-0 about-rooms">
    <div class="row">
        <div id="Rooms" class="col-md-12">
            <h2 class="my-5 text-center">Our Rooms</h2>
        </div>
    </div>
<div class="rooms">
<div class="row">
<div class="col-md-6">
    <img src="/core/Alpha/Oualid/img/deluxeRoom.jpg" class="img-fluid rounded border-3" alt="photo de chambre">
</div>
<div class="col-md-6">
                <div class="text-center">
                    <h3>Piece of Mind</h3>
                </div>
                <p class="mx-5 my-5 text-center" style="font-size: 1.2em;">The way we travel and move has changed in the last few years. We no longer want the typical photo that all our contacts
                    post on Instagram. We no longer want to elbow our way through crowded museums. We no longer want to view the city
                    through the mobile lens.
                    It's not about travelling, it's about discovering.</p>
                <div class="text-center">
                    <a href="rooms.php" class="btn btn-primary btn-lg">EXPLORE OUR ROOMS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../core/UI/footer.php'; ?>