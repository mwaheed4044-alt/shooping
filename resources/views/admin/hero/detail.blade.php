@include('admin/inc/header')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modern CV</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>


body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    margin: 0;
    padding: 0;
    color: #333;
}

.cv-wrapper {
    display: flex;
    max-width: 950px;
    margin: 40px auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    overflow: hidden;
}

/* Sidebar */
.cv-sidebar {
    background: linear-gradient(180deg, #6a11cb 0%, #2575fc 100%);
    color: #fff;
    padding: 30px 25px;
    width: 280px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.cv-sidebar:hover {
    background: linear-gradient(180deg, #2575fc 0%, #6a11cb 100%);
}
.cv-sidebar .photo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 0 auto 20px auto;
    overflow: hidden;
    border: 4px solid #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}
.cv-sidebar .photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.cv-sidebar h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 6px;
}
.cv-sidebar p {
    font-size: 14px;
    margin: 4px 0;
}
.cv-sidebar h3 {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 10px;
    border-bottom: 1px solid rgba(255,255,255,0.4);
    padding-bottom: 4px;
    letter-spacing: 0.5px;
}
.cv-sidebar ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}
.cv-sidebar ul li {
    margin-bottom: 8px;
    font-size: 14px;
}

/* Skills with gradient animated bars */
.skill-bar {
    background: rgba(255,255,255,0.25);
    border-radius: 20px;
    height: 14px;
    margin-bottom: 12px;
    overflow: hidden;
    box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
}
.skill-bar .progress {
    height: 100%;
    border-radius: 20px;
    width: 0%;
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    animation: fillSkill 1.2s forwards;
}
@keyframes fillSkill {
    0% { width: 0%; }
    100% { width: 80%; } /* Dynamically replace width using Blade if needed */
}

/* Main Content */
.cv-main {
    flex: 1;
    padding: 40px 30px;
    background: #f8f9fc;
}
.cv-section {
    margin-bottom: 30px;
}
.cv-section h2 {
    font-size: 22px;
    font-weight: 700;
    color: #6a11cb;
    margin-bottom: 18px;
    border-bottom: 2px solid #eee;
    padding-bottom: 6px;
}

/* Education & Work */
.cv-edu, .cv-work {
    list-style: none;
    padding-left: 0;
    margin: 0;
}
.cv-edu li, .cv-work li {
    margin-bottom: 20px;
}
.cv-edu li span, .cv-work li span {
    font-size: 14px;
    color: #555;
}

/* Timeline style for work */
.timeline {
    position: relative;
    padding-left: 25px;
    border-left: 3px solid #6a11cb;
    margin-top: 15px;
}
.timeline-item {
    position: relative;
    margin-bottom: 25px;
}
.timeline-item::before {
    content: '';
    position: absolute;
    left: -14px;
    top: 0;
    width: 16px;
    height: 16px;
    background: #6a11cb;
    border-radius: 50%;
    border: 3px solid #fff;
}
.timeline-item h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}
.timeline-item span {
    font-size: 13px;
    color: #555;
}

/* Print button */
.print-btn {
    margin-top: 20px;
    border-radius: 25px;
    padding: 8px 20px;
    font-weight: 600;
}
@media print {
    .print-btn { display: none; }
}
</style>
  


</head>
<body>
<!-- Color Picker (outside the CV wrapper) -->
<div style="max-width: 950px; margin: 20px auto; text-align: center;" class="no-print">
    <label for="sidebarColor" style="font-weight: bold; margin-right: 10px;">Select Sidebar Color: </label>
    <input type="color" id="sidebarColor" value="#6a11cb" style="width: 50px; height: 30px; border: none; cursor: pointer;">
</div>

<style>
/* Hide elements with the 'no-print' class when printing */
@media print {
    .no-print {
        display: none !important;
    }
}
</style>  

<!-- CV -->
<div class="cv-wrapper">
    <!-- Sidebar -->
    <div class="cv-sidebar" id="cvSidebar">
        <div class="photo">
            @if($students->image)
                <img src="{{ url('public/admin/image/hero/' . $students->image) }}" alt="Profile">
            @else
                <div style="width:120px;height:120px;background:#fff;color:#1e90ff;display:flex;align-items:center;justify-content:center;font-weight:bold;">CV</div>
            @endif
        </div>
        <h2>{{ $students->name }}</h2>
        <p><i class="bi bi-card-text"></i> CINC: {{ $students->cinc }}</p>
        <p><i class="bi bi-geo-alt"></i> {{ $students->address }}</p>
        <p><i class="bi bi-telephone"></i> {{ $students->phone }}</p>
        <p><i class="bi bi-envelope"></i> {{ $students->email }}</p>

        <h3>Skills</h3>
        @foreach($skill as $row)
        <p>{{ $row->skill_name }}</p>
        <div class="skill-bar"><div class="progress" style="width:80%;"></div></div>
        @endforeach

        <h3>Languages</h3>
        <ul>
            @foreach($languages as $lang)
            <li>{{ $lang->language }}</li>
            @endforeach
        </ul>

        <h3>Interests</h3>
        <ul>
            <li>Cricket</li>
            <li>Volleyball</li>
            <li>Football</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="cv-main">
        <!-- Education -->
        <div class="cv-section">
            <h2>Education</h2>
            <ul class="cv-edu">
                @foreach($edu as $education)
                <li>
                    <h4>{{ $education->degree_name }}</h4>
                    <span>{{ $education->board_name }} | {{ $education->obtaind_mark }}/{{ $education->total_mark }} | {{ $education->passing_year }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Work Experience -->
        <div class="cv-section">
            <h2>Work Experience</h2>
            <div class="timeline">
                @if($work->where('job_title','!=',null)->count() > 0)
                @foreach($work as $data)
                    @if($data->job_title)
                    <div class="timeline-item">
                        <h4>{{ $data->job_title }} @ {{ $data->company }}</h4>
                        <span>{{ $data->start_year }} - {{ $data->end_year }}</span>
                    </div>
                    @endif
                @endforeach
                @else
                    <p>Beginner</p>
                @endif
            </div>
        </div>

        <button onclick="window.print()" class="btn btn-outline-primary print-btn">🖨️ Print</button>
    </div>
</div>

<script>
// Change sidebar color live
const colorPicker = document.getElementById('sidebarColor');
const sidebar = document.getElementById('cvSidebar');

colorPicker.addEventListener('input', function() {
    sidebar.style.background = colorPicker.value;
});
</script>

    <!-- Main Content -->
    

        <!-- Work Experience -->
    


    </div>
</div>

</body>
</html>