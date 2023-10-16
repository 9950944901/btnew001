@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Phone Call Log</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <form action="{{ route('Phone.Call.Data') }}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Phone Call Log </h5>
                <hr>
                <div class="activity">
                  <div class="row">
                   
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control neha-text" name="name" required>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Phone</label>
                        <input type="text" class="form-control neha-text" pattern="[0-9]*" minlength="10" maxlength="10" required name="phone">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Date</label>
                        <input type="date" class="form-control neha-text" name="date">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Description</label>
                        <textarea name="desc" class="form-control neha-text" rows="2"
                          placeholder="Enter here..."></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Next Follow Up Date</label>
                        <input type="date" class="form-control neha-text" name="follow_date">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Calling time</label>
                        <input type="time" class="form-control neha-text" name="call_duration">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Note</label>
                        <textarea name="note" class="form-control neha-text" rows="2"
                          placeholder="Enter here..."></textarea>
                      </div>
                    </div>

                    
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-4">
                        <label for="Profile Image1">Call Type</label>
                        <div class="row">
                          <div class="col-md-6">                          
                              <div class="checkbox">
                               <input type="radio" name="call_type" value="Incoming"  checked>
                               <label for="op1">Incoming</label>
                              </div>
                             </div>
                          
                          <div class="col-md-6">
                            <div class="checkbox">
                              <input type="radio" name="call_type" value="Outgoing" >
                              <label for="op2">Outgoing</label>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Phone Call Log List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Mobile No.</th>
                      <th>Date</th>
                      <th>Next Follow Up Date</th>
                      <th>Call Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    @foreach ($show  as $value)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->phone }}</td>
                      <td>{{ $value->date }}</td>
                      <td>{{ $value->follow_date }}</td>
                      <td>{{ $value->call_duration }}
                          {{ $value->call_type }}</td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editvisit{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-eye"></i></a>
                          <a href="{{ route('Phone.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editvisit{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Phone Call Log</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Update.Subject',['id'=>$value->id]) }}">
                              @csrf
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Description</label>
                                   <textarea class="form-control" rows="3" disabled>{{ $value->desc }}</textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Note</label>
                                   <textarea class="form-control" rows="3" disabled>{{ $value->note }}</textarea>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection