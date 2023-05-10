<?php include "../core/UI/header.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-container" style="background-color:#969696;">

                <form id="contact-form" method="post" action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100">Send</button>
                </form>
            </div>
            <div class="col-md-6 map-container" style="padding: 0 50px;">
                <h1 class="text-center">Our Location</h1>
                <p class="text-center" style="font-size: 18px;">175 Rue des Pyrénées, 75020 Paris</p>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.539143397389!2d2.392200215702789!3d48.87112257928768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1a907c62d7%3A0x479bc870e1b4111c!2s197%20Rue%20des%20Pyr%C3%A9n%C3%A9es%2C%2075020%20Paris!5e0!3m2!1sfr!2sfr!4v1650265562775!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    </div>

    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- JS personnalisé -->
    <script src="script.js"></script>







<?php include "../core/UI/footer.php" ?>