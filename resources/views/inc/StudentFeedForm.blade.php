<form method="POST" action="{{route('student.feed.submit')}}">
  {{csrf_field()}}
  <div class="form-row align-items-center">
    <div class="form-col">
          <div class="col-auto">
            <label class="mr-sm-2" for="inlineFormCustomSelect">LIBRARY</label>
            <select name="library" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="Good">Good</option>
              <option value="Better">Better</option>
              <option value="Best">Best</option>
              <option value="Bad">Bad</option>
              <option value="Not-Applicable">Not-Applicable</option>
            </select>
          </div>

          <div class="col-auto">
              <label class="mr-sm-2" for="inlineFormCustomSelect">CANTEEN</label>
              <select name="canteen" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="Good">Good</option>
                <option value="Better">Better</option>
                <option value="Best">Best</option>
                <option value="Bad">Bad</option>
                <option value="Not-Applicable">Not-Applicable</option>
              </select>
            </div>

            <div class="col-auto">
                <label class="mr-sm-2" for="inlineFormCustomSelect">HOSTEL</label>
                <select name="hostel" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="Good">Good</option>
                  <option value="Better">Better</option>
                  <option value="Best">Best</option>
                  <option value="Bad">Bad</option>
                  <option value="Not-Applicable">Not-Applicable</option>
                </select>
              </div>
    </div>
    <div class="form-col">
        <div class="col-auto">
            <label class="mr-sm-2" for="inlineFormCustomSelect">UNIVERSITY RELATION</label>
            <select name="relation" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="Good">Good</option>
              <option value="Better">Better</option>
              <option value="Best">Best</option>
              <option value="Bad">Bad</option>
              <option value="Not-Applicable">Not-Applicable</option>
            </select>
        </div>

        <div class="col-auto">
            <label class="mr-sm-2" for="inlineFormCustomSelect">INTERNET</label>
            <select name="internet" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="Good">Good</option>
              <option value="Better">Better</option>
              <option value="Best">Best</option>
              <option value="Bad">Bad</option>
              <option value="Not-Applicable">Not-Applicable</option>
            </select>
        </div>

        <div class="col-auto">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Mentor Name</label>
            <select name="mentor" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
              <option selected>Choose...</option>

              @foreach($mentors as $mentor)
                  <option value="{{$mentor->id}}">{{$mentor->name}}</option>
              @endforeach

            </select>
        </div>
  </div>
  <div class="form-col">
        <div class="col-auto">
            <label class=" mr-sm-2" for="formGroupExampleInput">COMMENTS ON CLASS & LAB ROOM</label>
            <textarea class="form-control" name="comment" id="comment" rows="8.5" placeholder="Enter your message here"></textarea>
        </div>
  </div>
  <div class="form-col">  
          <div class="col-auto">
              <label class="mr-sm-2" for="formGroupExampleInput">Others</label>
              <textarea class="form-control" name="others" id="others" rows="8.5" placeholder="Enter your message here"></textarea>
          </div>
  </div>
  <div class="form-col"> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary btn-raised">Submit</button>
    </div>
  </div>
  </div>
</form>