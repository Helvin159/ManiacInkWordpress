<div class="container px-5" id="contactForm">
<label for="name" class="p-2 inputLabels">Full Name: <br>
  <input type="text" class="textFields" id="name" name="name" required>
</label>
<br>
<label class="p-2 inputLabels" for="">Phone Number: <br>
  <input type="text" class="textFields" id="pNumber" placeholder="Phone Number" name="pNumber">
</label>
<br>
<label  class ="inputLabels p-2" for="">Email: <br>
  <input type="email" class="textFields mr-2" id="address" placeholder="Email" name="email" required>
  <input type="email" class="textFields ml-2" id="confirmEmail" placeholder="Confirm - Email" name="confirmEmail" required>
  <p style="color:red" class="d-none text-right" id="reConfirm">Email does not match!</p>
</label>
<br>
<div class="row">
  <div class="col-md-6">
    <label for="explanation" class="p-2 inputLabels">A brief explanation of your tattoo <br>
    <textarea name="explanation" class="descBox" id="explanation" id="" ></textarea>
    </label>
  </div>
  <div class="col-md-6">
    <label for="concept" class="p-2 inputLabels">Your tattoo idea/concept <br>
      <textarea name="concept" class="descBox" id="concept"></textarea>
    </label>
  </div>
</div>
<label for="" class="p-2 inputLabels">A picture of where you'd like the tattoo placed. (Please positition straight towards the camera). 
  <br>
  <input type="file" id="image">
</label>
<br>
<label for="" class="inputLabels">For safety reasons, have you been exposed to someone with COVID-19, or been tested? 
  <br>
  <select name="covid"  id="covid">
    <option value="--">--</option>
    <option value="I Don't Know, I haven't been tested.">I Don't Know, I haven't been tested.</option>
    <option value="I have been tested, and I am negative.">I have been tested, and I am negative.</option>
    <option value="I have been tested, and I have Covid-19">I have been tested, and I have Covid-19</option>
  </select>
</label>
<br>
<button id="submit" class="btn btn-md btn-danger my-3">Submit</button>
</div>

<div class="container text-center p-5 d-none" id="thankYou">
  <h1 class="sedgewick">Thank you for your message, we'll be in touch as soon as possible!</h1>
</div>

<div class="container text-center p-5 d-none" id="sorry">
  <h1 class="sedgewick">No Good, Try Again!</h1>
</div>