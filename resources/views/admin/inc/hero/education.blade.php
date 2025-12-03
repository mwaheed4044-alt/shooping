```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish CV with Image</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f2f5;
      color: #333;
    }
    .cv-container {
      width: 900px;
      margin: 30px auto;
      background: #fff;
      box-shadow: 0 0 15px rgba(0,0,0,0.15);
      display: grid;
      grid-template-columns: 1fr 2fr; /* sidebar + main */
    }
    .sidebar {
      background: #2c3e50;
      color: #fff;
      padding: 30px;
      text-align: center;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 3px solid #16a085;
    }
    .sidebar h2 {
      border-bottom: 2px solid #16a085;
      padding-bottom: 8px;
      margin-bottom: 15px;
      font-size: 20px;
      text-align: left;
    }
    .sidebar p, .sidebar li {
      font-size: 14px;
      margin: 5px 0;
      text-align: left;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .main {
      padding: 30px;
    }
    header {
      border-bottom: 3px solid #16a085;
      margin-bottom: 20px;
      padding-bottom: 10px;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
      color: #2c3e50;
    }
    header p {
      margin: 5px 0;
      font-size: 14px;
      color: #555;
    }
    section {
      margin-bottom: 20px;
    }
    section h2 {
      font-size: 18px;
      color: #16a085;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
      margin-bottom: 10px;
    }
    section ul {
      list-style: none;
      padding: 0;
    }
    section ul li {
      margin-bottom: 8px;
    }
    .skills span {
      display: inline-block;
      background: #16a085;
      color: #fff;
      padding: 5px 10px;
      margin: 4px;
      border-radius: 5px;
      font-size: 13px;
    }
  </style>
</head>
<body>
  <div class="cv-container">
    <!-- Left Sidebar -->
    <div class="sidebar">
      <!-- Profile Image -->
      <img src="profile.jpg" alt="Profile Picture" class="profile-pic">

      <h2>Contact</h2>
      <p>Email: youremail@example.com</p>
      <p>Phone: +92-300-1234567</p>
      <p>Address: City, Country</p>

      <h2>Languages</h2>
      <ul>
        <li>English - Fluent</li>
        <li>Urdu - Native</li>
        <li>Pashto - Intermediate</li>
      </ul>

      <h2>Skills</h2>
      <ul>
        <li>HTML / CSS</li>
        <li>JavaScript</li>
        <li>PHP / Laravel</li>
        <li>MySQL</li>
      </ul>
    </div>

    <!-- Right Main Section -->
    <div class="main">
      <header>
        <h1>YOUR NAME</h1>
        <p>Full Stack Developer | Web Designer | Freelancer</p>
      </header>

      <section>
        <h2>Career Objective</h2>
        <p>
          Highly motivated and detail-oriented developer with a passion for creating modern, 
          responsive web applications. Seeking to contribute technical expertise and 
          problem-solving skills in a challenging role.
        </p>
      </section>

      <section>
        <h2>Education</h2>
        <ul>
          <li><strong>BS Computer Science</strong> - University Name (2018 - 2022)</li>
          <li><strong>Intermediate (FSc)</strong> - College Name (2016 - 2018)</li>
          <li><strong>Matriculation</strong> - School Name (2014 - 2016)</li>
        </ul>
      </section>

      <section>
        <h2>Work Experience</h2>
        <ul>
          <li>
            <strong>Software Engineer</strong> - Company Name (2022 - Present)  
            <p>Developing full-stack applications, leading small projects, and optimizing performance.</p>
          </li>
          <li>
            <strong>Internship</strong> - Company Name (2021)  
            <p>Assisted in web development tasks, bug fixing, and UI improvements.</p>
          </li>
        </ul>
      </section>

      <section>
        <h2>Projects</h2>
        <ul>
          <li><strong>Portfolio Website:</strong> Designed a personal portfolio using HTML, CSS, JS.</li>
          <li><strong>E-commerce Store:</strong> Built online store with Laravel & MySQL.</li>
        </ul>
      </section>

      <section>
        <h2>References</h2>
        <p>Available on request.</p>
      </section>
    </div>
  </div>
</body>
</html>
```













<div class="sidebar">
      <!-- Profile Image -->
      <img src="{{url('public/admin/image/hero',$cv->image)}}" alt="Profile Picture" class="profile-pic">

      <h2>Contact</h2>
      <p>Email: {{$cv->email}}</p>
      <p>Cinc: {{$cv->cinc}}</p>
      <p>Phone: {{$cv->phone}}</p>
      <p>Address: {{$cv->address}}</p>

      <h2>Languages</h2>
      <ul>
        @foreach($langu as $lang)
        <li>{{$lang->language}}</li>
         @endforeach
      </ul>

      <h2>Skills</h2>
      <ul>
        @foreach($skills as $skill)
        <li>{{$skill->skill_name}}</li>
        <li>{{$skill->skill_level}}</li>
        <li>{{$skill->skill_experience}}</li>
     
        @endforeach
      </ul>
    </div>
