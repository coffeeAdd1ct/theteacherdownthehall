<?php
  function getVar() {
    if (isset($_GET['sub'])) {
      $x = isset($_GET['sub']);
      if ($x = 'true') {
          //echo the url variable 'hell'
        echo '<div class="section">' .
          '<div class="section_text">' .
            'Thanks for your submission! Look out for our next newsletter!' .
          '</div>' .
        '</div>';
        return true;
      }
    } else {
      echo '<div class="section" id="contact_form">' .
        '<div class="form_text">If you\'d like to enter your email for our mailing list, please do so below. We often send out free products in our newsletter and would love to be able to show you our new items.</div>' .
        '<form method="post" action="./scripts/form_submit.php">' .
          '<input id="name_input" placeholder="name" name="name" required></input><br>' .
          '<input id="email_input" placeholder="email" name="email" required></input><br>' .
          '<input id="comment_input" placeholder="comments" name="comments"></input><br>' .
          '<button class="input" id="submit_button" type="submit"><b>SUBMIT</b></button>' .
        '</form>' .
      '</div>';
      return false;
    }
  }
 ?>
 <?php getVar(); ?>
