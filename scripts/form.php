<?php
  function setForm() {
    //declare form sections
    $thanks = '<div class="section">' .
      '<div class="section_text">' .
        'Thanks for your submission! Look out for our next newsletter!' .
      '</div>' .
    '</div>';
    $form_open = '<div class="form_text">If you\'d like to enter your email for our mailing list, please do so here. We often send out free products in our newsletter and would love to be able to show you our new items.</div>' .
    '<form method="post" action="./scripts/form_submit.php">';
    $form_close = '<button class="input" id="submit_button" type="submit"><b>SUBMIT</b></button>' .
        '<div class="form_text" style="font-size:12px;">We will NEVER share your data or send you spam.<br>Unsubscribe at anytime.</div>' .
      '</form>' .
    '</div>';
    //declare form variable sections
    $form_email = '<input id="email_input" placeholder="email" name="email" required></input><br>';
    $form_name = '<input id="name_input" placeholder="name" name="name"></input><br>';
    $form_comments = '<input id="comment_input" placeholder="comments" name="comments"></input><br>';

    //find the page/url we are on
    if ($_SERVER['REQUEST_URI'] === '/subscribe.php') {
      if (isset($_GET['sub'])) {
        $x = isset($_GET['sub']);
        if ($x = 'true') {
          //if on subscribe.php and form has been submitted
          echo $thanks;
          return true;
        }
      } else {
        //if not submitted, display form
        echo '<div class="section id="subscribe_form">' .
          $form_open . $form_email . $form_close;
        return false;
      }
    } else {
      //if on a page that is not subscribe.php
      if (isset($_GET['sub'])) {
        $x = isset($_GET['sub']);
        if ($x = 'true') {
          echo $thanks;
          return true;
        }
      } else {
        echo '<div class="section" id="contact_form">' .
          $form_open . $form_email . $form_close;
        return false;
      }
    }
  }
 ?>
 <?php setForm(); ?>
