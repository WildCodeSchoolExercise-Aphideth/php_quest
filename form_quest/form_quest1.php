  <form action="thanks.php" method="post">
    <div>
      <label for="lastname">Lastname :</label>
      <input type="text" id="lastname" name="user_lastname" placeholder="lastname">
    </div>
    <div>
      <label for="firstname">Firstname :</label>
      <input type="text" id="firstname" name="user_firstname" placeholder="firstname">
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email" placeholder="xxx@email.com">
    </div>
    <div>
      <label for="phone">Phone number :</label>
      <input type="tel" id="phone" name="user_phone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="06 11 22 33 44">
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message" placeholder="Your message"></textarea>
    </div>
    <div>
      <label for="object">Object :</label>
      <select id="object" name="user_object">
        <option value="">Please select an object</option>
        <option value="enquirements">Enquirements</option>
        <option value="refunds">Refunds</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>