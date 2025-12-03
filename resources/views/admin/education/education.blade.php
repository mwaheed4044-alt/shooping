@extends('admin.master')
@section('content')
<div class="col-lg-8 offset-3 " style="margin-top:100px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Education Details</h5>

            <form action="{{ url('admin/education/insert') }}" method="post">
                @csrf

                <!-- hidden CV ID (ek hi jagah rakhna hai) -->
                <input type="hidden" name="cv_id" value="{{ $cv_id }}" readonly>

                <div id="educationSection">
                    <div class="edu-entry">
                        <div class="row mt-5">
                            <div class="col-4">
                                <label class="form-label">School/College/University</label>
                                <input type="text" class="form-control" placeholder="Enter Institute Name" name="school_collage_university[]">
                            </div>
                            <div class="col-4">
                                <label class="form-label">City/Town</label>
                                <input type="text" class="form-control" placeholder="Enter City" name="city[]">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Degree/Qualification</label>
                                <input type="text" class="form-control" placeholder="Enter Degree" name="degree[]">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <label class="form-label">Start Year</label>
                                <input type="year" class="form-control" name="start_date[]">
                            </div>
                            <div class="col-6">
                                <label class="form-label">End Year</label>
                                <input type="year" class="form-control" name="end_date[]">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label class="form-label">Obtaind Marks</label>
                                <input type="text" class="form-control" name="obtaind_mark[]">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Total Marks</label>
                                <input type="text" class="form-control" name="total[]">
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
                    <p type="button" class="mt-2" onclick="addEducation()">+ Add More Education</p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function addEducation() {
    let eduSection = document.getElementById("educationSection");
    let newEntry = document.querySelector(".edu-entry").cloneNode(true);

    // saare input clear karo except hidden cv_id
    newEntry.querySelectorAll("input").forEach(input => {
        if (input.type !== "hidden") {
            input.value = "";
        }
    });

    eduSection.appendChild(newEntry);
}
</script>
@endsection