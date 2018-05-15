(function() {
  console.log('patience is a virtue');
  $.ajax({
    url: 'time.php',
    data: {
      t: (new Date()).getTime()
    },
    success: function(resp) {
      console.log(resp);
      var h = JSON.parse(resp);
      var u = (new Date(h.month + ' ' + h.mday + ', ' + h.year + ' ' + h.hours + ':' + h.minutes + ':' + h.seconds)).getTime();
      var i = (new Date(launchDate).getTime());
      if(u > i) {
        location = location;
      }
      setInterval(function() {
        u = moment(u).add(1, 'seconds').valueOf();
        if(u > i) {
          location = location;
        }
        var diff = new moment.duration(i - u);
        var countdown = diff.days() + 'd ' + 
                        diff.hours() + 'h ' + 
                        diff.minutes() + 'm ' + 
                        (diff.seconds() <= 9 ? '0' + diff.seconds() : diff.seconds()) + 's';
        $('#countdown').html(countdown);
      }, 1000);
    }
  });
})();