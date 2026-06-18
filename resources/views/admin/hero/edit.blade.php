

  @include('admin/inc/header')

<div class="col-lg-8 offset-2 " style="margin-top:100px">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Personal Edit</h5>

      <form id="personalForm" action="{{url('admin/hero/update',$edit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
          <div class="col-md-3 text-center">
            <!-- Profile Image -->
            <img id="profilePreview" src="" width="150px" alt="Profile" style="border-radius: 10px; border:1px solid #ccc;">
            <div class="pt-2">
              <label for="profileImage" class="btn btn-primary btn-sm" title="Upload new profile image">
                <i class="bi bi-upload"></i>
              </label>
              <input type="file" id="profileImage" name="image" accept="image/*" style="display:none;">
              <input type="file" id="profileImage" name="old_img" value="{{$edit->image}}"accept="image/*" style="display:none;">
              <button type="button" class="btn btn-danger btn-sm" id="removeImage" title="Remove my profile image">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>

          <div class="col-sm-9">
            <div class="row">
              <div class="col-6">
                <label class="form-label">First Name</label>
                <input type="text" name="name" class="form-control" value="{{$edit->name}}">
              </div>
              <div class="col-6">
                <label class="form-label">CNIC</label>
                <input type="text" name="cinc" class="form-control" value="{{$edit->cinc}}">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-6">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{$edit->email}}">
              </div>
              <div class="col-6">
              <label class="form-label">Father Name</label>
              <input type="text" name="father" class="form-control" value="{{$edit->father}}">
            </div>
            </div>
          </div>
        </div>

        <!-- Hidden fields (baaki form) -->
        <div id="moreFields" style="display:none; margin-top:20px;">
          <div class="row">
            <div class="col-6">
              <label class="form-label">Address</label>
              <input type="text" name="address" class="form-control" value="{{$edit->address}}">
            </div>
            <div class="col-6">
              <label class="form-label">Date of Birth</label>
              <input type="" name="date_birth" class="form-control" value="{{$edit->date_birth}}">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-6">
              <label class="form-label">Gender</label>
              <select class="form-select" name="gender" value="{{$edit->gender}}">
                <option selected disabled>Choose...</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div class="col-6">
              <label class="form-label">Religion</label>
              <input type="text" name="religation" class="form-control" value="{{$edit->religation}}">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-6">
              <label class="form-label">Nationality</label>
              <input type="text" name="nationality" class="form-control" value="{{$edit->nationality}}">
            </div>
            <div class="col-6">
              <label class="form-label">Marital Status</label>
              <input type="text" name="status" class="form-control" value="{{$edit->status}}">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control" value="{{$edit->phone}}">
            </div>
      
          </div>
          
        </div>

        <div class="row">
                    <div class="col-sm-2 offset-10 mt-3">
                        <button type="submit" class="btn btn-outline-info btn-md w-75">Save</button>
                    </div>
                </div>
        <div class="col-12 mt-3 text-center border p-0" style="height:40px; background-color:#99939359;">
                    <p type="button" class="mt-2" id="showMoreBtn">+ Personal Information</p>
                </div>
      </form>
    </div>
  </div>
</div>

<script>
// Image Preview
document.getElementById("profileImage").addEventListener("change", function(event) {
  let reader = new FileReader();
  reader.onload = function(e) {
    document.getElementById("profilePreview").src = e.target.result;
  };
  reader.readAsDataURL(event.target.files[0]);
});

// Remove image
document.getElementById("removeImage").addEventListener("click", function() {
  document.getElementById("profilePreview").src = "";
  document.getElementById("profileImage").value = "";
});


  let isVisible = false;

document.getElementById("showMoreBtn").addEventListener("click", function() {
  let moreFields = document.getElementById("moreFields");

  if (!isVisible) {
    moreFields.style.display = "block";   // show fields
    this.innerText = "Hide More";        // button text change
    isVisible = true;
  } else {
    moreFields.style.display = "none";    // hide fields
    this.innerText = "Show More";        // button text wapis
    isVisible = false;
  }
});

</script>
@include('admin/inc/footer')