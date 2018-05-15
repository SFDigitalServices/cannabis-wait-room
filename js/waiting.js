console.log('patience is a virtue');
(function() {
  var s = (new Date()).getTime();
  var tmp = new moment.duration(moment(new Date(launchDate).getTime())-s);
  var countdownStr = function(tms) {
    return tms.days() + 'd ' + tms.hours() + 'h ' + tms.minutes() + 'm ' + (tms.seconds() <= 9 ? '0' + tms.seconds() : tms.seconds()) + 's';
  };
  $('#countdown').html(countdownStr(tmp));
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
          if(u > i) {
            location.href = location.pathname + '?t=' + (new Date()).getTime();
          } else {
            // countdown += '<br/>' + moment().format('hh:mm:ss a');
            $('#countdown').html(countdownStr(diff));
          }
        }, 1000);
      }
    }
  });
})();
