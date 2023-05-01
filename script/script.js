
    
    var arrivee = document.getElementById('arrivee');
    var depart = document.getElementById('depart');
     
    arrivee.setAttribute('min', new Date().toISOString().split('T')[0]);
    depart.setAttribute('min', new Date().toISOString().split('T')[0]);
    
arrivee.addEventListener('change', function () {
  depart.setAttribute('min', arrivee.value);

    });



    $(document).ready(function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    selectable: true,
    select: function(info) {
      var dateArrivee = document.getElementById('date-arrivee').value;
      var dateDepart = document.getElementById('date-depart').value;
      if (dateArrivee == '' || dateDepart == '') {
        alert('Veuillez sélectionner une date d\'arrivée et une date de départ.');
        return;
      }
      var nbPersonnes = document.getElementById('nb-personnes').value;
      var nbChambres = document.getElementById('nb-chambres').value;
      var start = info.startStr;
      var end = info.endStr;
      var overlap = calendar.getEvents().filter(function(existingEvent) {
        return (existingEvent.start < end && existingEvent.end > start);
      }).length;
      if (overlap) {
        alert('La période sélectionnée est déjà réservée.');
      } else {
        calendar.addEvent({
          title: nbPersonnes + ' personne(s) - ' + nbChambres + ' chambre(s)',
          start: start,
          end: end
        });
        document.getElementById('date-arrivee').value = '';
        document.getElementById('date-depart').value = '';
        document.getElementById('nb-personnes').value = '1';
        document.getElementById('nb-chambres').value = '1';
      }
    },
    events: [],
    eventBackgroundColor: '#17a2b8',
    eventBorderColor: '#17a2b8'
  });
});
