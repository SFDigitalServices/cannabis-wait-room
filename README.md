A waiting room for the purposes of waiting for things

# config.php #
the waiting room reads the launch date and redirect url (when launch date reached) from config.php.  This file does not exist and needs to be created.

It should look like this:

```
<?php
  
  return array(
    'launchDate' => 'May 22, 2018 10:00:00',
    'redirect' => 'http://digitalservices.sfgov.org',
  );

?>
```

`launchDate` is in the format `Month Day, Year Hours:Minutes:Seconds`.  `Hours:Minutes:Seconds` is in the 24 hour time format.  So that something that starts at 7:53pm on May 22, 2018, the appropriate string would be `May 22, 2018 19:53:00`