<?php
// define variables and set to empty values
$lastnameErr = $firstnameErr = $emailErr = $phoneErr = $objectErr = $messageErr = "";
$lastname = $firstname = $email = $phone = $object = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["object"])) {
    $objectErr = "Object is required";
  } else {
    $object = test_input($_POST["object"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div>
    <label for="lastname">Lastname :</label>
    <input type="text" id="lastname" name="lastname" placeholder="lastname">
    <span><?php echo $lastnameErr; ?></span>
  </div>
  <div>
    <label for="firstname">Firstname :</label>
    <input type="text" id="firstname" name="firstname" placeholder="firstname">
    <span><?php echo $firstnameErr; ?></span>
  </div>
  <div>
    <label for="courriel">Courriel :</label>
    <input type="email" id="email" name="email" placeholder="xxx@email.com">
    <span><?php echo $emailErr; ?></span>
  </div>
  <div>
    <label for="phone">Phone number :</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="06 11 22 33 44">
    <span><?php echo $phoneErr; ?></span>
  </div>
  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="message" placeholder="Your message"></textarea>
    <span><?php echo $messageErr; ?></span>
  </div>
  <div>
    <label for="object">Object :</label>
    <select id="object" name="object">
      <option value="">Please select an object</option>
      <option value="enquirements">Enquirements</option>
      <option value="refunds">Refunds</option>
      <option value="other">Other</option>
    </select>
    <span><?php echo $objectErr; ?></span>
  </div>
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>
</form>