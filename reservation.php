<?php include "header.php"
?>


    <div class="form-wrapper">
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





























<?php include "footer.php"
?>