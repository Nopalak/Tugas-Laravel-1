<!doctype HTML>
<form action="http://127.0.0.1:8000/wellcome" method="get">


  <h1>Buat Account Baru!</h1>
  <h3>Sign Up Form</h3>
  <label for="first_name">First Name:</label>
  <br>
  <input type="text" name="first_name" value="" id="first_name" required>

  <br><br>

  <label for="last_name">Last Name:</label>
  <br>
  <input type="text" name="last_name" value="" id="last_name" required>

  <br><br>
  <p>Gender:</p>
  <input type="radio" name="gender" value="Laki-laki">Male
  <br>
  <input type="radio" name="gender2" value="Perempuan">Female
  <br>
  <input type="radio" name="gender2" value="Other">Other

  <br><br>
  <p>Nationality</p>
  <select class="" name="Nationality">
    <option value="Indonesian">Indonesian</option>
    <option value="Malaysian">Malaysian</option>
    <option value="American">American</option>
  </select>

  <br><br>
  <p>Language Spoken:</p>
  <input type="checkbox" name="language" value="Indonesia">Bahasa Indonesia
  <br>
  <input type="checkbox" name="language" value="English">English
  <br>
  <input type="checkbox" name="language" value="Other">Other

  <br><br>
<label for="bio">Bio</label>
<br>
<textarea name="Bio" id="bio" rows="15" cols="40" required></textarea>

<br><br>

<input type="Submit" name="submit" value="Sign Up">
</form>
</HTML>