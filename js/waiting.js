console.log('patience is a virtue');
(function() {
  var reqStart = (new Date()).getTime();
  var tmpTimeDiff = new moment.duration(moment(new Date(launchDate).getTime())-reqStart);
  var countdownStr = function(tms) {
    return tms.days() + 'd ' + tms.hours() + 'h ' + tms.minutes() + 'm ' + (tms.seconds() <= 9 ? '0' + tms.seconds() : tms.seconds()) + 's';
  };
  $('#countdown').html(countdownStr(tmpTimeDiff));
  $.ajax({
    url: 'time.php',
    data: {
      t: (new Date()).getTime()
    },
    success: function(resp) {
      var reqEnd = (new Date()).getTime();
      var serverDate = JSON.parse(resp);
      var serverTimeMs = (new Date(serverDate.month + ' ' + serverDate.mday + ', ' + serverDate.year + ' ' + serverDate.hours + ':' + serverDate.minutes + ':' + serverDate.seconds)).getTime() - (reqEnd - reqStart);
      var launchTimeMs = (new Date(launchDate).getTime());
      if(serverTimeMs > launchTimeMs) {
        location.href = location.pathname + '?t=' + (new Date()).getTime();
      } else {
        setInterval(function() {
          serverTimeMs = moment(serverTimeMs).add(1, 'seconds').valueOf();
          var timeDiff = new moment.duration(launchTimeMs - serverTimeMs);
          if(serverTimeMs > launchTimeMs) {
            location.href = location.pathname + '?t=' + (new Date()).getTime();
          } else {
            var countdown = countdownStr(timeDiff);
            // countdown += '<br/>' + moment().format('hh:mm:ss a');
            $('#countdown').html(countdown);
          }
        }, 1000);
      }
    },
    error: function() {
      $('#countdown').html('Please refresh the page');
    }
  });
})();
