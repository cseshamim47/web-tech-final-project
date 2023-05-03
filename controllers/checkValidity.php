<?php 
    function validatePassword($password) {
        // Define the minimum and maximum length for the password
        $min_length = 5;
        $max_length = 20;
        
        // Check if the password meets the minimum and maximum length requirements
        $length = strlen($password);
        if ($length < $min_length || $length > $max_length) {
          return false;
        }
        
        // Check if the password contains at least one lowercase letter, one uppercase letter, and one digit
        $has_lowercase = false;
        $has_uppercase = false;
        $has_digit = false;
        for ($i = 0; $i < $length; $i++) {
          $char = $password[$i];
          if (ctype_lower($char)) {
            $has_lowercase = true;
          } elseif (ctype_upper($char)) {
            $has_uppercase = true;
          } elseif (ctype_digit($char)) {
            $has_digit = true;
          }
        }
        if (!$has_lowercase || !$has_uppercase || !$has_digit) {
          return false;
        }
        
        // Check if the password contains any special characters
        $special_chars = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', ';', ':', ',', '.', '<', '>', '/', '?', '|');
        foreach ($special_chars as $char) {
          if (strpos($password, $char) !== false) {
            return true;
          }
        }
        
        // If none of the checks failed, then the password is valid
        return false;
      }
      
      function isEmailValid($email) {
        return true;
        // Check if the email contains the @ symbol
        if (strpos($email, '@') === false) {
          return false;
        }
        
        // Split the email into the username and domain parts
        list($username, $domain) = explode('@', $email, 2);
        
        // Check if the domain is valid
        if (!checkdnsrr($domain, 'MX')) {
          return false;
        }
        
        // Check if the username and domain parts are valid
        if (!ctype_alnum(str_replace(array('.', '_', '-'), '', $username)) || !ctype_alnum(str_replace('.', '', $domain))) {
          return false;
        }
        
        return true;
      }
?>