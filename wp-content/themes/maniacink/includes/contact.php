<label for="name" class="p-2 inputLabels">Full Name: <br>
  <input type="text" class="textFields" id="name" name="name">
</label>
<br>
<label class="p-2 inputLabels" for=""> Email &amp; Phone Number: <br>
  <input type="text" class="textFields" id="pNumber" placeholder="Phone Number" name="pNumber">
</label>
<label  class ="inputLabels" for="">
  <input type="text" class="textFields" id="email" placeholder="Email" name="email" >
  <input type="text" class="textFields" id="confirmEmail" placeholder="Confirm - Email" name="confirmEmail" >
</label>
<br>
<div class="row">
  <div class="col-6">
    <label for="explanation" class="p-2 inputLabels">A brief explanation of your tattoo <br>
    <textarea name="explanation" class="descBox" id="explanation" id="" ></textarea>
    </label>
  </div>
  <div class="col-6">
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
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
</label>
<br>
<button id="submit" class="btn btn-md btn-danger my-3">Submit</button>