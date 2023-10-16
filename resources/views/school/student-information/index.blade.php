@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="{{ route('SCHOOL.Student.Details') }}" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" id="className" class="form-control neha-text" required >
                        <option value="">Select</option>
                        @foreach ($data as $value) 
                        <option>{{ $value->class }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" id="sectionName" class="form-control neha-text" required>
                        {{-- <option value="">Select</option>
                        @foreach ($sec as $value) 
                        <option>{{ $value->section }}</option>
                        @endforeach --}}
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search</h6>
                    <div class="">
                      <div class="">
                        <button type="submit" dissabled class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    {{-- <th>Category</th> --}}
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($show as $value)   
                    
                  <tr id="task-1" class="task-list-row test-font text-capitalize" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>
                    <span class="text-bold">Name:</span><span> {{ $value->first_name }} {{ $value->last_name }}</span><br>
                    <span class="text-bold">F.Name:</span><span> {{ $value->father_name }}</span><br>
                    </td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->section }}</td>
                   
                    <td>{{ date('d-m-Y', strtotime($value->dob)) }}</td>
                    <td>{{ $value->gender }}</td>
                    {{-- <td>{{ $value->category }}</td> --}}
                    <td>{{ $value->mobile_no }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.student-details-show',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                        <a href="{{ route('SCHOOL.student-details-edit',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('SCHOOL.student-details-delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
  <script type = "text/javascript">
    jQuery(document).ready(function(){
        jQuery('#className').change(function(){
          let cid=jQuery(this).val();
          jQuery.ajax({
            url:'{{ route('getSection') }}',
            type:'post',
            data:'cid='+cid+'&_token={{csrf_token()}}',
            success:function(result){
              jQuery('#sectionName').html(result)
            }
          });
        });
      });
  
  </script>
@endsection