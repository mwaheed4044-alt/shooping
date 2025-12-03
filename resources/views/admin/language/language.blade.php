@extends('admin.master')
@section('content')
<div class="col-lg-8 offset-3 " style="margin-top:100px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Skill Details</h5>

            <form action="{{ url('admin/language/insert') }}" method="post">
                @csrf

                <input type="" name="cv_id" value="{{$cv_id}}" readonly>

                <div id="lang_Section">
                    <div class="edu-entry">
                        <div class="row mt-3">
                            <div class="col-4">
                                <label class="form-label">Language</label>
                                <select class="form-select" name="language[]">
                                    <option selected disabled>Choose...</option>
                                    <option>English</option>
                                    <option>Urdu</option>
                                    <option>Pashto</option>
                                    <option>Saraiki</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <!-- Add more button -->
                <div class="col-12 mt-3 text-center border p-0" style="height:40px; background-color:#99939359;">
                    <p type="button" class="mt-2" onclick="addLang()">+ Add More Language</p>
                </div>

                <!-- Save button (yahan shift kar diya) -->
                <div class="row mt-4">
                    <div class="col-sm-2 offset-10">
                        <button type="submit" class="btn btn-outline-info btn-md w-75">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function addLang() {
  let eduSkill = document.getElementById("lang_Section");
  let newEntry = document.querySelector(".edu-entry").cloneNode(true);

  // inputs clear karna zaroori nahi kyonki aap select use kar rahe ho
  newEntry.querySelectorAll("select").forEach(select => select.selectedIndex = 0);

  eduSkill.appendChild(newEntry);
}
</script>
@endsection
