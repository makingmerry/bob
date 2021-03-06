<?php
  require_once('scoped_include/index.php');

  // Include snippet with scoped data
  function snippet($name, $data = [], $return = false) {
    return tpl::load_file(__ROOT__ . '/snippets/' . $name . '.php', $data, $return);
  };

  // Including assets
  function asset($pathname, $file = false) {
    return ($file ? __ROOT__ : '') . '/assets/' . $pathname;
  }

  function favicons($name, $file = false) {
    return asset('favicons/build/' . $name . '.html', $file);
  }

  function css($name, $file = false) {
    return asset('css/build/' . $name . '.css', $file);
  }

  function js($name, $file = false) {
    return asset('js/build/' . $name . '.js', $file);
  }
?>