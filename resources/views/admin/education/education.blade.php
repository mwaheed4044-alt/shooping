@include('admin/inc/header')

<style>

.cv-card{
border:0;
border-radius:10px;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
margin-top:20px;
}

.cv-entry{
background:#f8f9fa;
padding:15px;
border-radius:8px;
border:1px solid #e5e5e5;
margin-bottom:15px;
}

.add-btn{
background:#eef3ff;
border:1px dashed #4a6cf7;
color:#4a6cf7;
padding:8px;
border-radius:6px;
cursor:pointer;
font-weight:500;
text-align:center;
}

.add-btn:hover{
background:#4a6cf7;
color:white;
}

.remove-btn{
background:#ff4d4d;
border:none;
color:white;
padding:6px 10px;
border-radius:5px;
}

</style>

<div class="container">
<div class="row justify-content-center">
<div class="col-sm-10">
  <a href="{{url('admin/hero/list')}}">kk</a>

<!-- EDUCATION -->

<form action="{{ url('admin/education/insert') }}" method="post">
@csrf
<div class="card cv-card">
  <div class="card-body">
    <h5 class="pt-3">Education</h5>
    <input type="hidden" name="stu_id" value="{{$stu_id}}">
    <div id="educationSection">
      <div class="edu-entry cv-entry">
        <div class="row">
          <div class="col-md-3">
            <label>Board Name</label>
            <input type="text" class="form-control" name="board_name[]">
          </div>
          <div class="col-md-3">
            <label>Degree Name</label>
            <input type="text" class="form-control" name="degree_name[]">
          </div>
          <div class="col-md-2">
            <label>Obtained</label>
            <input type="text" class="form-control" name="obtaind_mark[]">
          </div>
          <div class="col-md-2">
            <label>Total</label>
            <input type="text" class="form-control" name="total_mark[]">
          </div>
          <div class="col-md-1">
            <label>Year</label>
            <input type="text" class="form-control" name="passing_year[]">
          </div>
          <div class="col-md-1 d-flex align-items-end">
            <button type="button" class="remove-btn remove-edu">X</button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-end mt-2">
      <button type="button" class="add-btn" onclick="addEducation()">+ Add Education</button>
      <button type="submit" class="btn btn-success btn-sm">Save Education</button>
    </div>
  </div>
</div>
</form>
<!-- SKILLS -->



<form action="{{ url('admin/skill/insert') }}" method="post">
@csrf
 <input type="hidden" name="stu_id" value="{{$stu_id}}">
<div class="card cv-card">
  <div class="card-body">
    <h5 class="pt-3">Skills</h5>
    <div id="skillSection">
      <div class="skill-entry cv-entry">
        <div class="row">
          <div class="col-md-10">
            <label>Skill Name</label>
            <input type="text" class="form-control" name="skill_name[]">
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="remove-btn remove-skill">X</button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-end mt-2">
      <button type="button" class="add-btn" onclick="addSkill()">+ Add Skill</button>
      <button type="submit" class="btn btn-success btn-sm">Save Skills</button>
    </div>
  </div>
</div>
</form>

<!-- WORK -->

<form action="{{ url('admin/work/insert') }}" method="post">
@csrf
 <input type="hidden" name="stu_id" value="{{$stu_id}}">
<div class="card cv-card">
  <div class="card-body">
    <h5 class="pt-3">Work Experience</h5>
    <div id="workSection">
      <div class="work-entry cv-entry">
        <div class="row">
          <div class="col-md-3">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title[]">
          </div>
          <div class="col-md-3">
            <label>Company</label>
            <input type="text" class="form-control" name="company[]">
          </div>
          <div class="col-md-2">
            <label>Start</label>
            <input type="number" class="form-control" name="start_year[]">
          </div>
          <div class="col-md-2">
            <label>End</label>
            <input type="number" class="form-control" name="end_year[]">
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="remove-btn remove-work">X</button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-end mt-2">
      <button type="button" class="add-btn" onclick="addWork()">+ Add Work</button>
      <button type="submit" class="btn btn-success btn-sm">Save Work</button>
    </div>
  </div>
</div>
</form>
  <!-- ////language/// -->
<form action="{{ url('admin/language/insert') }}" method="post">
@csrf
 <input type="hidden" name="stu_id" value="{{$stu_id}}">
<div class="card cv-card">
  <div class="card-body">
    <h5 class="pt-3">Languages</h5>
    <div id="languageSection">
      <div class="language-entry cv-entry">
        <div class="row">
          <div class="col-md-6">
            <label>Language</label>
            <input type="text" class="form-control" name="language[]" placeholder="English">
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="remove-btn remove-language">X</button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <button type="button" class="add-btn" onclick="addLanguage()">+ Add Language</button>
      <button type="submit" class="btn btn-success btn-sm">Save Languages</button>
    </div>
  </div>
</div>
</form>
 <!-- ////end languaage//// -->




</div>
</div>
</div>


<script>

// EDUCATION ADD
function addEducation(){

let section = document.getElementById("educationSection");

let clone = document.querySelector(".edu-entry").cloneNode(true);

clone.querySelectorAll("input").forEach(input => input.value="");

section.appendChild(clone);

}

// SKILL ADD
function addSkill(){

let section = document.getElementById("skillSection");

let clone = document.querySelector(".skill-entry").cloneNode(true);

clone.querySelectorAll("input").forEach(input => input.value="");

section.appendChild(clone);

}

// WORK ADD
function addWork(){

let section = document.getElementById("workSection");

let clone = document.querySelector(".work-entry").cloneNode(true);

clone.querySelectorAll("input").forEach(input => input.value="");

section.appendChild(clone);

}


// REMOVE BUTTON

document.addEventListener("click",function(e){

// EDUCATION
if(e.target.classList.contains("remove-edu")){

let items=document.querySelectorAll(".edu-entry");

if(items.length>1){
e.target.closest(".edu-entry").remove();
}

}

// SKILL
if(e.target.classList.contains("remove-skill")){

let items=document.querySelectorAll(".skill-entry");

if(items.length>1){
e.target.closest(".skill-entry").remove();
}

}

// WORK
if(e.target.classList.contains("remove-work")){

let items=document.querySelectorAll(".work-entry");

if(items.length>1){
e.target.closest(".work-entry").remove();
}

}

});
// LANGUAGE ADD
function addLanguage(){

let section = document.getElementById("languageSection");

let clone = document.querySelector(".language-entry").cloneNode(true);

clone.querySelectorAll("input").forEach(input => input.value="");

clone.querySelectorAll("select").forEach(select => select.value="");

section.appendChild(clone);

}

// LANGUAGE REMOVE

// LANGUAGE REMOVE
document.addEventListener("click", function(e){

if(e.target.classList.contains("remove-language")){

let entries = document.querySelectorAll(".language-entry");

if(entries.length > 1){
e.target.closest(".language-entry").remove();
}

}

});

</script>

@include('admin/inc/footer')