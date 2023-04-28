
    
    var arrivee = document.getElementById('arrivee');
    var depart = document.getElementById('depart');
     
    arrivee.setAttribute('min', new Date().toISOString().split('T')[0]);
    depart.setAttribute('min', new Date().toISOString().split('T')[0]);
    
    arrivee.addEventListener('change', function() {
        depart.setAttribute('min', arrivee.value);
    });

    $(document).ready(function(){
  $('.carousel').carousel({
    interval: 4000
  })
});


