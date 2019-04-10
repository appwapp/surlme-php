<?php

/**
* This file is part of surlme-php
*
* https://github.com/appwapp/surlme-php
*
* surlme-php is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function assert_equals($is, $should) {
  if($is != $should) {
    exit(1);
  } else {
    println('Passed!');
  }
}

function assert_url($is) {
  if(!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $is)) {
    exit(1);
  } else {
    println('Passed!');
  }
}

function println($text) {
  echo $text . "\n";
}

require 'Surlme.class.php';

#
# IMPORTANT: Please add your API key to make the tests work
#
$surlme = new Surlme('YOUR_API_KEY');

println('#1 - Assert that shortening http://www.google.ca results in an URL');
assert_url($surlme->shorten('http://www.google.ca'));

println('#2 - Assert that shortening https://www.appwapp.com results in an URL');
assert_url($surlme->shorten('https://www.appwapp.com'));

println('#3 - Assert that shortening https://www.google.ca/search?q=test results in an URL');
assert_url($surlme->shorten('https://www.google.ca/search?q=test'));

println('#3 - Assert that shortening ABC results in an Error');
assert_equals($surlme->shorten('ABC'), 'Error');

# If this point is reached, all tests have passed
println('All tests have successfully passed!');
