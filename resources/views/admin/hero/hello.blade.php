@include('admin/inc/header')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish CV with Image</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
  
    }.main{
      border: 2px solid #000;
      background: #fff;
      box-shadow: 0 0 10px 0px;
      margin-top:20px;
      width: 900px;
      margin-left:20px;
    }
  
   
  </style>
</head>
<body >
  <div class="container">
  
    <div class="main " id="cv-section" >
       <div class="row justify-content-center " style="margin-top:30px">
                  <div class="col-sm-9">
                          

                           
                        
                          <div class="row">
                            <div class="col-4 ">
                           <i class="bi bi-person-fill"></i> <strong>Name  :</strong> <br>
                                <span>{{$students->name}}</span>
                           

                            </div>
                            <div class="col-4">
                               <i class="bi bi-person-vcard"></i>  </i><strong>Cinc  :</strong> <br>
                                <span>{{$students->cinc}}</span>

                            </div>
                            <div class="col-4 ">
                               <i class="bi bi-geo-alt-fill"></i> <strong>Address  :</strong><br>
                                <span>{{$students->address}}</span>
                              
                            </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-4">
                                    <i class="bi bi-telephone-fill"></i> <strong>Phone No  :</strong><br>
                                <span>{{$students->phone}}</span>
                            </div>
                            <div class="col-6">
                                <i class="bi bi-envelope-fill"></i> <strong>Email  :</strong><br>
                                <span>{{$students->email}}</span>
                            </div>
                           
                          </div>
                           
                               
                          
                      </div>
                            <div class="col-sm-2 " >
                              <div class="image">
                                @if($students->image)
                                <img src="{{url('public/admin/image/hero/',$students->image)}}"  width="130px" class="img-fluid" alt="">
                                @else
                                 <p style="font-size:90px;font-weight:bold;background-color:#d1d1d1">CV</p>
                                 @endif
                              </div>
                            </div>
                            
                        <div class="row">
                          <div class="col-12" style="margin-top:20px;padding-left:37px;padding-right:37px">
                                  <h2 style="background-color:#d1d1d1; 
                                            padding:10px; 
                                            border-left:7px solid red; 
                                            font-size:22px; 
                                            font-weight:bold; 
                                            margin:0;">
                                    Personal
                                  </h2>
                                     


                                  <div class="row" style="margin-left:20px; margin-top:10px">
                                    <div class="col-2 ">
                                      <strong>Father’s Name</strong>     
                                      <strong>Date of Birth</strong>
                                      <strong>Gender</strong>
                                      <strong>Nationality</strong>
                                      <strong>Marital Status</strong>
                                      <strong>Religion</strong>
                                    </div>
                                   
                                    :<br>   
                                    :<br>   
                                    :<br>   
                                    :<br>   
                                    :<br>   
                                    :<br>   
                                    
                                    <div class="col-3 ">
                                       <span>{{$students->father}}</span><br>
                                       <span>{{$students->date_birth}}</span><br>
                                       <span>{{$students->gender}}</span><br>
                                       <span>{{$students->nationality}}</span><br>
                                       <span>{{$students->status}}</span><br>
                                       <span>{{$students->religation}}</span>
                                    </div>
                                  </div>

                            
                          </div>
                          <div class="col-12" style="margin-top:10px;padding-left:37px;padding-right:37px">
                              <h2 style="background-color:#d1d1d1;
                              border-left:7px solid red;
                              padding:10px;font-size:22px;
                              font-weight:bold;
                              margin:0px;">
                                Education</h2>
                                <table class="table table-bordered mt-4">
                                  <thead>
                                    <tr>
                                      <th>Degree Name</th>
                                      <th>Board Name</th>
                                      <th>Obtained Marks</th>
                                      <th>Total Marks</th>
                                      <th>Passing Year</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($education as $edu)
                                      <tr>
                                        <td>{{ $edu->degree_name }}</td>
                                        <td>{{ $edu->board_name }}</td>
                                        <td>{{ $edu->obtaind_mark }}</td>
                                        <td>{{ $edu->total_mark }}</td>
                                        <td>{{ $edu->passing_year}}</td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>

                          </div>
                          <div class="col-12" style="margin-top:10px;padding-left:37px;padding-right:37px">
                                  <h2 style="background-color:#d1d1d1; 
                                            padding:10px; 
                                            border-left:7px solid red; 
                                            font-size:22px; 
                                            font-weight:bold; 
                                            margin:0;">
                                    Skills
                                  </h2>
                                  <ul style=" padding:15px; margin-left:20px;">
                                     @foreach($skills as $skill)
                                    <li><strong> {{$skill->skill_name}}</strong></li>
                         
                                    @endforeach
                                  </ul>
                        </div>

                         <div class="col-12" style="margin-top:10px;padding-left:32px;padding-right:32px">
                                  <h2 style="background-color:#d1d1d1; 
                                            padding:10px; 
                                            border-left:7px solid red; 
                                            font-size:22px; 
                                            font-weight:bold; 
                                            margin:0;">
                                    Work Experience
                                  </h2>
                                     
                                    <div class="row">
                                      
                                      <div class="col-8 ">

                                      <ul style="padding:15px; margin-left:20px;">
                                        @foreach($work as $works)
                                              @if($works->job_title)
                                                <li><strong>Job Title</strong></li>
                                                <span style="margin-left:70px">{{ $works->job_title ?? '' }}</span>

                                                <li><strong>Company</strong></li>
                                                <span style="margin-left:70px">{{ $works->company ?? ''}}</span>

                                                <li><strong>Duration</strong></li>
                                                <span style="margin-left:70px">(  {{ $works->start_year ?? ''}} - {{ $works->end_year ?? ''}} )</span>
                                                <br><br>
                                              @else
                                                <p >Begniner</p>
                                              @endif
                                        @endforeach
                                     
                                            
                                    </ul>

                                      </div>
                              
        
                                    </div>
                                
                        </div>
                          <div class="col-12" style="margin-top:10px;padding-left:32px;padding-right:32px">
                                  <h2 style="background-color:#d1d1d1; 
                                            padding:10px; 
                                            border-left:7px solid red; 
                                            font-size:22px; 
                                            font-weight:bold; 
                                            margin:0;">
                                    Language
                                  </h2>
  <ul>
  @foreach($languages as $lang)
    <li style="margin-left:25px;">{{ $lang->language }}</li>
  @endforeach
</ul>
                        </div>
                         
                          <div class="col-12" style="margin-top:10px;padding-left:32px;padding-right:32px">
                                  <h2 style="background-color:#d1d1d1; 
                                            padding:10px; 
                                            border-left:7px solid red; 
                                            font-size:22px; 
                                            font-weight:bold; 
                                            margin:0;">
                                    Interests
                                  </h2>

                                 <ul style="padding:15px; margin-left:20px;">
                                  <li><strong>Cricket</strong></li>
                                
                              </ul>

                        </div>
                      

          </div>
     </div>
  </div>
</body>
</html>
<div class="container">
  <div class="row">
    <div class="col-3 ">
      <button onclick="window.print()" class="btn btn-outline-success d-print-none   mt-3">
    🖨️ Print
  </button>
    </div>
  </div>
</div>



