<?php include "header.php"
?>
<div class="container my-5" style="background-color: rgb(149, 149, 149);padding:4%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Look for your Paradise</h3>
                </div>
                <div class="card-body">
                    <form id="reservation-form">
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
                        <div class="form-group mt-4 mb-0">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"
?>