
  @include('admin/inc/header')
  @include('admin/inc/alert')

<div class="col-lg-8 offset-2 " style="margin-top:100px">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Personal Details</h5>

      <form id="personal" >
        @csrf
        <div class="row mt-3">
          
         

          <div class="col-sm-9">
            <div class="row">
              <div class="col-6">
                <label class="form-label">First Name</label>
                <input type="text" id="name" name="name" class="form-control" value="">
              </div>
              <div class="col-6">
                <label class="form-label">CNIC</label>
                <input type="text" name="cinc" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-6">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="col-6">
              <label class="form-label">Father Name</label>
              <input type="text" name="father" class="form-control">
            </div>
            </div>
          </div>
        </div>

      
        <div class="row">
                    <div class="col-sm-2 offset-10 mt-3">
                        <button id="submit" type="submit" class="btn btn-outline-info btn-md w-75">Save</button>
                    </div>
                </div>
       
      </form>
      <div id="msg"></div>
    </div>
  </div>
</div>
@include('admin/inc/footer')
<script>
$(ducument).ready(function(){
 
   $('#submit').click(function(){
      alert('jekoritj');
   });
   });



</script>
