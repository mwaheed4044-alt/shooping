 @include('admin/inc/header')

  
     <div class="row  justify-content-center ">
        <div class="col-sm-3 text-center " style="border:2px solid blue;padding:20px;">
            <a href="{{url('admin/hero/list')}}" class="btn btn-warning">Home</a>
            <a href="{{url('admin/hero/create')}}" class="btn btn-info">Back</a>
            
            
        </div>

        
     <div class="col-lg-10 " style="margin-top:10px">
          <form action="{{ url('admin/education/update') }}" method="post">
                @csrf
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Education Details</h5>

          

                <!-- hidden CV ID (ek hi jagah rakhna hai) -->
                     <input type="hidden" name="stu_id" value="{{$stu_id}}">
                  
                            
                      
       <div id="educationSection">
    @foreach ($edu as $row)
     <input type="hidden" name="id[]" value ="{{$row->id}}">
    <div class="edu-entry cv-entry">
        <div class="row">
            <div class="col-6">
                <label>Board Name</label>
                <input type="text" class="form-control" name="board_name[]" value="{{$row->board_name}}">
            </div>
            <div class="col-6">
                <label>Degree Name</label>
                <input type="text" class="form-control" name="degree_name[]" value="{{$row->degree_name}}">
            </div>
            <div class="col-4">
                <label>Obtained</label>
                <input type="text" class="form-control" name="obtaind_mark[]" value="{{$row->obtaind_mark}}">
            </div>
            <div class="col-4">
                <label>Total</label>
                <input type="text" class="form-control" name="total_mark[]" value="{{$row->total_mark}}">
            </div>
            <div class="col-4">
                <label>Year</label>
                <input type="text" class="form-control" name="passing_year[]" value="{{$row->passing_year}}">
            </div>
        </div>
      </div>
        <hr>
      @endforeach
      <div class="mt-2 text-end">
          <button type="button" class="add-btn" onclick="addEducation(this)">+ Add</button>
          <button type="button" class="remove-btn" onclick="removeEducation(this)">X</button>
      </div>
    
</div>


                         
                                  <div class="row">
                                    <div class="col-sm-2 offset-10">
                                        <button type="submit" class="btn btn-success btn-md w-75 mt-3">Save</button>
                                    </div>
                                </div>
                <!-- Add more button -->
               
            
         
         </div>
    </div>
     </form>
                    
    
               <form action="{{ url('admin/skill/update') }}" method="post">
                @csrf
               <input type="hidden" name="stu_id" value="{{$stu_id}}">
             <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Skill Details</h5>
                      
                              

                               <div id="skill_Section">
                              @foreach($skill as $data)
                                  <input type="hidden" name="id[]" value ="{{$data->id}}">
                              <div class="skill cv-entry">
                                <div class="row mt-3">
                                  <div class="col-8">
                                    <label class="form-label">Skill Name</label>
                                    <input type="text" value="{{$data->skill_name}}" class="form-control" name="skill_name[]">
                                  </div>
                                </div>
                             
                                <hr>
                              </div>
                              @endforeach
                            </div>
                               <div class="mt-2 text-end">
                                  <button type="button" class="add-btn" onclick="addSkill(this)">+ Add</button>
                                  <button type="button" class="remove-btn" onclick="removeSkill(this)">X</button>
                                </div>
                             
                                  <div class="row">
                                    <div class="col-sm-2 offset-10">
                                        <button type="submit" class="btn btn-success btn-md w-75 mt-3">Save</button>
                                    </div>
                                </div>
                           
                             
                     </div>
            </div>
            
         </form>
             <!-- work//// -->
               <form action="{{ url('admin/work/update') }}" method="post">
                @csrf
                <input type="hidden" name="stu_id" value="{{$stu_id}}">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Work Details</h5>
      
                               
                
               <div id="workSection">
  @foreach($work as $wor)
     <input type="hidden" name="id[]" value ="{{$wor->id}}"> 
  <div class="work-entry cv-entry">
    <div class="row">
      <div class="col-3">
        <label class="form-label">Job Title</label>
        <input type="text" value="{{$wor->job_title}}" class="form-control" name="job_title[]">
      </div>
      <div class="col-3">
        <label class="form-label">Company</label>
        <input type="text" value="{{$wor->company}}" class="form-control" name="company[]">
      </div>
      <div class="col-3">
        <label class="form-label">Start Year</label>
        <input type="year" value="{{$wor->start_year}}" class="form-control" name="start_year[]">
      </div>
      <div class="col-3">
        <label class="form-label">End Year</label>
        <input type="year" value="{{$wor->end_year}}" class="form-control" name="end_year[]">
      </div>
    </div>
  
    <hr>
  </div>
  @endforeach
    <div class="mt-2 text-end">
      <button type="button" class="add-btn" onclick="addWork(this)">+ Add</button>
      <button type="button" class="remove-btn" onclick="removeWork(this)">X</button>
    </div>
</div>
                 

                <!-- Add more button -->
           
                   <!-- Save button -->
                      <div class="row">
                                    <div class="col-sm-2 offset-10">
                                        <button type="submit" class="btn btn-success btn-md w-75 mt-3">Save</button>
                                    </div>
                         </div>
             
                </div>
              
                </div>
              </div>


         </form>
             </div>
</div>
               <div class="row justify-content-center">
                <div class="col-sm-10">
                  <form action="{{ url('admin/language/update') }}" method="post">
                @csrf
                <input type="hidden" name="stu_id" value="{{$stu_id}}">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title">Work Details</h5>
                <div id="languageSection">
                  @foreach($languages as $lang)
                  <div class="language-entry cv-entry">
                    <div class="row mt-3">
                      <div class="col-8">
                        <label class="form-label">Language</label>
                        <input type="text" value="{{$lang->language}}" class="form-control" name="language[]" placeholder="English">
                      </div>
                    </div>
                  
                    <hr>
                  </div>
                  </div>
                  </div>
                  </div>
            @endforeach
              <div class="mt-2 text-end">
                      <button type="button" class="add-btn" onclick="addLanguage(this)">+ Add</button>
                      <button type="button" class="remove-btn" onclick="removeLanguage(this)">X</button>
                    </div>
                     <div class="row">
                                    <div class="col-sm-2 offset-10">
                                        <button type="submit" class="btn btn-success btn-md w-75 mt-3">Save</button>
                                    </div>
                         </div>
             </form>

                </div>
               </div>
           



<script>
  // EDUCATION ADD
function addEducation() {
    let section = document.getElementById("educationSection");
    let clone = section.querySelector(".edu-entry").cloneNode(true);
    clone.querySelectorAll("input").forEach(input => input.value = "");
    section.appendChild(clone);
}

// SKILL ADD
function addSkill() {
    let section = document.getElementById("skill_Section");
    let clone = section.querySelector(".skill").cloneNode(true);
    clone.querySelectorAll("input").forEach(input => input.value = "");
    section.appendChild(clone);
}

// WORK ADD
function addWork() {
    let section = document.getElementById("workSection");
    let clone = section.querySelector(".work-entry").cloneNode(true);
    clone.querySelectorAll("input").forEach(input => input.value = "");
    section.appendChild(clone);
}

// LANGUAGE ADD
function addLanguage() {
    let section = document.getElementById("languageSection");
    let clone = section.querySelector(".language-entry").cloneNode(true);
    clone.querySelectorAll("input").forEach(input => input.value = "");
    section.appendChild(clone);
}

// REMOVE BUTTONS
document.addEventListener("click", function(e){
    if(e.target.classList.contains("remove-edu")){
        let entries = document.querySelectorAll(".edu-entry");
        if(entries.length > 1) e.target.closest(".edu-entry").remove();
    }
    if(e.target.classList.contains("remove-skill")){
        let entries = document.querySelectorAll(".skill");
        if(entries.length > 1) e.target.closest(".skill").remove();
    }
    if(e.target.classList.contains("remove-work")){
        let entries = document.querySelectorAll(".work-entry");
        if(entries.length > 1) e.target.closest(".work-entry").remove();
    }
    if(e.target.classList.contains("remove-language")){
        let entries = document.querySelectorAll(".language-entry");
        if(entries.length > 1) e.target.closest(".language-entry").remove();
    }
});
</script>
 @include('admin/inc/footer')