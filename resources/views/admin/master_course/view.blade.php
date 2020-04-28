@extends('admin/layouts/app')
@section('main-content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                  <div class="card-header">
                    <h4>All Master Course</h4>
                    <div class="card-header-action">
                        <div class="input-group">
                          <a href="{{ route('admin.master_course.create') }}" class="btn btn-primary float-right">Import Mater Course</a>
                        </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title</th>
                            <th>SCED Course ID</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <!-- <th>Created At</th>
                            <th>Updated At</th> -->
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if($allData)
                          @foreach($allData as $raw)
                          
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $raw->title }}</td>
                            <td>{{ $raw->SCED_course_id }}</td>
                            <td>{{ App\User::find($raw->created_by)->name }}</td>
                            <td>{{ App\User::find($raw->updated_by)->name }}</td>
                            <!-- <td>{{ $raw->created_at }}</td>
                            <td>{{ $raw->updated_at }}</td> -->
                            <td> <a href="">@if($raw->status == 1) <div class="badge badge-success badge-shadow">{{ __('Active') }}</div> @else <div class="badge badge-danger badge-shadow">{{ __('Inactive') }}</div> @endif </a></td>
                            <td>
                                <a href="{{ route('admin.master_course.edit', ['id'=>$raw->id]) }}" class="badge badge-warning badge-shadow" title="edit"> <i class="far fa-edit"></i> </a>
                                <!-- <a href="" class="badge badge-success badge-shadow" title="view"><i class="far fa-eye "></i></a> -->
                                <!-- <a href="#" class="badge badge-danger badge-shadow" title="delete"><i class="fas fa-trash"></i></a> -->
                            </td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
    </section>
@endsection