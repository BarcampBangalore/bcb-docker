UPDATE wp_options
set option_value = 'http://localhost'
where option_name = 'siteurl'
and option_value != 'http://localhost';

UPDATE wp_options
set option_value = 'http://localhost'
where option_name = 'home'
and option_value != 'http://localhost';

