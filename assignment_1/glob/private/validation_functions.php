<?php

  // is_blank('abcd')
  function is_blank($value='') {
    // TODO
    return empty($value);
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    // TODO
    $length=strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // TODO
    $string=$value;
    if(preg_match('/(.*?)@(.*?)\.com/', $string)){
      return true;
    }
    else{
      return false;
    }
  }

?>
