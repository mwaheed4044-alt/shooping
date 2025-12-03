
@extends('admin.master')
@section('content')
<div class="col-lg-8 offset-3 " style="margin-top:100px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Skill Details</h5>

            <form action="{{ url('admin/skill/insert') }}" method="post">
                @csrf

                   <input type="" name="cv_id" value="{{$cv_id}}" readonly>

                <div id="skill_Section">
                    <div class="edu-entry">
                        <div class="row mt-5">
                            <div class="col-4">
                                <label class="form-label">Skill Name</label>
                                <input type="text" class="form-control" placeholder="Enter Institute Name" name="skill_name[]">
                            </div>
                            <!-- <div class="col-4">
                                <label class="form-label">Skill level</label>
                                <select class="form-select" name="skill_level[]">
                                        <option selected disabled>Choose...</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                      </select>
                            </div> -->
                            <!-- <div class="col-3">
                                      <label class="form-label">Experience (Years)</label>
                                      <input type="number" class="form-control" name="skill_experience[]" placeholder="e.g. 2">
                                    </div>
                            </div> -->
                        <hr>
                    </div>
                </div>
                <!-- Save button -->
                <div class="row">
                    <div class="col-sm-2 offset-10">
                        <button type="submit" class="btn btn-outline-info btn-md w-75">Save</button>
                    </div>
                </div>

         

                <!-- Add more button -->
                <div class="col-12 mt-3 text-center border p-0" style="height:40px; background-color:#99939359;">
                    <p type="button" class="mt-2" onclick="addSkill()">+ Add More Skill</p>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    
function addSkill() {
  let eduSkill = document.getElementById("skill_Section");
  let newEntry = document.querySelector(".edu-entry").cloneNode(true);

  // saare input clear kar do
 
  let inputs = document.querySelectorAll("input");

    
  newEntry.querySelectorAll("input").forEach(input => input.value = "");


  eduSkill.appendChild(newEntry);
}


</script>
                           
@endsection