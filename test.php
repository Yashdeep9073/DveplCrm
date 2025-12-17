<form onsubmit="return validateForm();">
  <label for="select">Choose a service:</label>
  <select name="service" id="select" required>
    <option value="" selected disabled>Select Services</option>
    <option value="Personal Care">Personal Care</option>
    <option value="Domestic Help">Domestic Help</option>
    <option value="Transportation">Transportation</option>
    <option value="Meal Preparation">Meal Preparation</option>
    <option value="Community Participation">Community Participation</option>
    <option value="Community Nursing Care">Community Nursing Care</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<script>
  const select = document.getElementById("select");

  // Set custom message when invalid
  select.addEventListener("invalid", function () {
    this.setCustomValidity("Please select a service from the list.");
  });

  // Reset the message when the user changes the value
  select.addEventListener("change", function () {
    this.setCustomValidity("");
  });

  function validateForm() {
    // Optional: extra manual validation if needed
    return true;
  }
</script>
