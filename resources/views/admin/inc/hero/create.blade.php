   
     @include('admin/inc/header')
<div class="col-lg-8 offset-3" style="margin-top:100px">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Personal Details</h5>

            <!-- Buttons -->
         

            <!-- Personal Form -->
            <form id="personalForm"  action="{{url('admin/hero/insert')}}" method="post" enctype="multipart/form-data" >
                @csrf
                   <div class="row mt-3">
                     <div class="col-md-3 text-center">
                  <!-- Profile Image -->
                  <img id="profilePreview" src="" width="150px" alt="Profile" style="border-radius: 10px; border:1px solid #ccc;">

                  <!-- Upload & Remove Buttons -->
                  <div class="pt-2">
                    <label for="profileImage" name="image" class="btn btn-primary btn-sm" title="Upload new profile image">
                      <i class="bi bi-upload"></i>
                    </label>
                    <input type="file" id="profileImage" name="image" accept="image/*" style="display:none;">

                    <button type="button" class="btn btn-danger btn-sm" id="removeImage" title="Remove my profile image">
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>

                  <div class="col-sm-9">
                    <div class="row">
                              <div class="col-6">
                        <label for="inputPassword4" class="form-label">First Name</label>
                        <input type="text" name="first_name"class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-6">
                        <label for="inputPassword4"  class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="inputPassword4">
                      </div>
                    </div>
                     <div class="row mt-2">
                      <div class="col-6">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="col-6">
                        <label for="inputAddress" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                  </div>
                  </div>
                </div>
                 
                   
                  <div class="row">
                      <div class="col-4">
                      <label for="inputAddress" class="form-label">date of brith</label>
                      <input type="date" class="form-control" name="date_birth" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress" class="form-label">City/Town</label>
                      <input type="text" class="form-control" name="city" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-4">
                      <label for="inputAddress" class="form-label">Gender</label>
                      <input type="" class="form-control" id="inputAddress" name="gender" placeholder="1234 Main St">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                      <label for="inputAddress" class="form-label">Adress</label>
                      <input type="" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                    </div>
                  </div>

                  <!-- ////resume objective/// -->
                 <h5 class="card-title">Resume Objective</h5>
                    <textarea name="address" rows="3" class="form-control" placeholder="Enter your full address..."></textarea>
                   
                     <!-- ////wrok// -->
                    <div id="workSection">
                      <h5 class="card-title">Work</h5>

                      <div class="work-entry">
                        <div class="row">
                          <div class="col-4">
                            <label class="form-label">Job Title</label>
                            <input type="text" class="form-control" name="job_title"placeholder="job_title">
                          </div>
                          <div class="col-4">
                            <label class="form-label">City/Town</label>
                            <input type="text" class="form-control" name="job_city" placeholder="job_city">
                          </div>
                          <div class="col-4">
                            <label class="form-label">Employer</label>
                            <input type="text" class="form-control" name="employer" placeholder="employer">
                          </div>
                        </div>

                        <div class="row mt-2">
                          <div class="col-6">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="job_date_start">
                          </div>
                          <div class="col-6">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="job_date_end">
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="addWork()">+ Add More Work</button>

                    <!-- eductio -->

                    <div id="educationSection">
                    <h5 class="card-title">Education</h5>

                    <div class="edu-entry">
                      <div class="row">
                        <div class="col-4">
                          <label class="form-label">School/College/University</label>
                          <input type="text" class="form-control" placeholder="Enter Institute Name" name="s_c_u[]">
                        </div>
                        <div class="col-4">
                          <label class="form-label">City/Town</label>
                          <input type="text" class="form-control" placeholder="Enter City" name="s_c_u_city[]">
                        </div>
                        <div class="col-4">
                          <label class="form-label">Degree/Qualification</label>
                          <input type="text" class="form-control" placeholder="Enter Degree" name="degree[]">
                        </div>
                      </div>

                      <div class="row mt-2">
                        <div class="col-6">
                          <label class="form-label">Start Date</label>
                          <input type="date" class="form-control"name="start_date[]">
                        </div>
                        <div class="col-6">
                          <label class="form-label">End Date</label>
                          <input type="date" class="form-control" name="end_date[]">
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>

                  <!-- Add Button -->
                  <button type="button" class="btn btn-success mt-3" onclick="addEducation()">+ Add More Education</button>


                  <!-- ////skill/// -->

                          <h5 class="card-title">Skills</h5>
                               <div id="skillsWrapper">
                                     <div class="row skill-item mb-3">
                                       <div class="col-4">
                                      <label class="form-label">Skill Name</label>
                                      <input type="text" class="form-control" name="skill_name[]" placeholder="e.g. Web Development">
                                    </div>
                                    <div class="col-4">
                                      <label class="form-label">Skill Level</label>
                                      <select class="form-select" name="skill_level[]">
                                        <option selected disabled>Choose...</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                      </select>
                                    </div>
                                    <div class="col-3">
                                      <label class="form-label">Experience (Years)</label>
                                      <input type="number" class="form-control" name="skill_experience[]" placeholder="e.g. 2">
                                    </div>
                                    <div class="col-1 d-flex align-items-end">
                                      <button type="button" class="btn btn-danger remove-skill">X</button>
                                    </div>
                                  </div>
                                </div>

                                <button type="button" class="btn btn-primary mt-2" id="addSkill">+ Add More</button>
                                   

                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>

            <!-- Office Form -->
          

        </div>
    </div>
</div>
<script>
function addWork() {
  // jis div me append karna h
  let workSection = document.getElementById("workSection");

  // pehle wali work-entry clone karenge
  let newEntry = document.querySelector(".work-entry").cloneNode(true);

  // saare inputs empty kar denge
  newEntry.querySelectorAll("input").forEach(input => input.value = "");

  // clone ko append karenge
  workSection.appendChild(newEntry);
}

function addEducation() {
  let eduSection = document.getElementById("educationSection");
  let newEntry = document.querySelector(".edu-entry").cloneNode(true);

  // saare input clear kar do
  newEntry.querySelectorAll("input").forEach(input => input.value = "");

  eduSection.appendChild(newEntry);
}

 document.getElementById('addSkill').addEventListener('click', function () {
    let wrapper = document.getElementById('skillsWrapper');
    let newSkill = document.querySelector('.skill-item').cloneNode(true);
    newSkill.querySelectorAll('input, select').forEach(el => el.value = '');
    wrapper.appendChild(newSkill);

    // remove button functionality
    newSkill.querySelector('.remove-skill').addEventListener('click', function () {
      newSkill.remove();
    });
  });

  // pehle wale skill me bhi remove kaam kare
  document.querySelectorAll('.remove-skill').forEach(btn => {
    btn.addEventListener('click', function () {
      btn.closest('.skill-item').remove();
    });
  });

   // Preview Selected Image
  document.getElementById('profileImage').addEventListener('change', function (event) {
    let reader = new FileReader();
    reader.onload = function () {
      document.getElementById('profilePreview').src = reader.result;
    }
    if (event.target.files[0]) {
      reader.readAsDataURL(event.target.files[0]);
    }
  });

  // Remove Image and Reset to Default
  document.getElementById('removeImage').addEventListener('click', function () {
    document.getElementById('profilePreview').src = "{{url('public/admin/assets/img/profile-img.jpg')}}";
    document.getElementById('profileImage').value = ""; // reset file input
  });
</script>


<button onclick="window.print()" class="btn btn-outline-success">