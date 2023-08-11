@extends('admin.layout.master')
@section('title')
plant 
@endsection
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">plant</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        id
                    </th>
                    <th style="width: 20%">
                        category_id
                    </th>
                    <th style="width: 10%">
                        name
                    </th>
                    <th>
                        care_details
                    </th>
                    <th>
                        season
                    </th>
                    <th>
                        medical_benefit
                    </th>
                
                    <th style="width: 30%">
                        short-description
                    </th>
                    <th>
                        last_update
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <a>
                           
                        </a>
                        <br/>
                      
                    </td>
                    <td>
                       
                        </ul>
                    </td>
                    <td>
                       
                        </div>
                       
                    </td>
                    <td >
                      
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
             
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection