<section id="contact">
  <h3>CONTACT</h3>
  <hr>

  <form>
    <input name="email" class="email" type="email" tabindex="1" placeholder="E-Mail"><br>
    <input name="subject" class="subject" type="text" tabindex="2" placeholder="Subject"><br>
    <textarea name="message" class="input_area" class="input_text" tabindex="3" placeholder="Message"></textarea>
    <button name="submit"type="submit" class="submit">Send Mail</button>
  </form>
</section>

<?php
  if (isset($_POST['submit'])) {
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jakkswords@protonmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$mailFrom.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }
 ?>
