
                        
@extends('admin.master')
@section('content')
<div class="col-lg-8 offset-3 " style="margin-top:100px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Work Experenice Details</h5>

            <form action="{{ url('admin/work/insert') }}" method="post">
                @csrf
                   <input type="" name="cv_id" value="{{$cv_id}}" readonly>
        

                <!-- ////wrok// -->
                <div id="workSection">
                    

                      <div class="work-entry">
                        <div class="row">
                          <div class="col-4">
                            <label class="form-label">Job Title</label>
                            <input type="text" class="form-control" name="job_title[]"placeholder="job_title">
                          </div>
                        
                          <div class="col-4">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" name="company[]" placeholder="employer">
                          </div>
                        </div>

                        <div class="row mt-2">
                          <div class="col-6">
                            <label class="form-label">Start Date</label>
                            <input type="year" class="form-control" name="date_start[]">
                          </div>
                          <div class="col-6">
                            <label class="form-label">End Date</label>
                            <input type="year" class="form-control" name="date_end[]">
                          </div>
                        </div>
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
                    <p type="button" class="mt-2" onclick="addwork()">+ Add More Work</p>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    
function addwork() {
  let eduSkill = document.getElementById("workSection");
  let newEntry = document.querySelector(".work-entry").cloneNode(true);

  // saare input clear kar do
 
  let inputs = document.querySelectorAll("input");

    
  newEntry.querySelectorAll("input").forEach(input => input.value = "");


  eduSkill.appendChild(newEntry);
}


</script>
                           
@endsection
                

