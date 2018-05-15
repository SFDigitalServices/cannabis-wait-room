(function() {
  var s = (new Date()).getTime();
  $.ajax({
    url: 'time.php',
    data: {
      t: (new Date()).getTime()
    },
    success: function(resp) {
      var e = (new Date()).getTime();
      var h = JSON.parse(resp);
      var u = (new Date(h.month + ' ' + h.mday + ', ' + h.year + ' ' + h.hours + ':' + h.minutes + ':' + h.seconds)).getTime() - (e - s);
      var i = (new Date(launchDate).getTime());
      if(u > i) {
        location.href = location.pathname + '?t=' + (new Date()).getTime();
      } else {
        setInterval(function() {
          u = moment(u).add(1, 'seconds').valueOf();
          var diff = new moment.duration(i - u);
          var countdown = diff.days() + 'd ' + 
                          diff.hours() + 'h ' + 
                          diff.minutes() + 'm ' + 
                          (diff.seconds() <= 9 ? '0' + diff.seconds() : diff.seconds()) + 's';
          if(u > i) {
            location.href = location.pathname + '?t=' + (new Date()).getTime();
          } else {
            countdown += '<br/>' + moment().format('hh:mm:ss a');
            $('#countdown').html(countdown);
          }
        }, 1000);
      }
    }
  });
})();