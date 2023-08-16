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
                @foreach($plants as $plant)

                <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td >
                        <span class="">{{$plant->category->category_name}}</span>
                    </td>
                    <td>
                        <a>
                            {{$plant->name}}
                        </a>
                      
                    </td>
                    <td >
                        <span class=""> {{$plant->care_details}}</span>
                    </td>
                  
                    <td >
                        <span class="">{{$plant->season}}</span>
                    </td>
                    <td >
                        <span class="">{{$plant->medical_benefit}}</span>
                    </td>
                    <td >
                        <span class="">{{$plant->short_description}}</span>
                    </td>
                    <td>
                        <span class="">{{$plant->last_update}}</span>
                    </td>
                    {{-- <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src=" {{asset('posts_Image/'.$post->small_image)}}">
                            </li>

                        </ul>
                    </td> --}}
                    
                 
                   
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('plant.show',$plant)}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('plant.edit',$plant)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       <form  method="post" action="{{route('post.destroy',$plant)}}">
                            @method('DELETE')
                            @csrf
                           <button type="submit" class="btn btn-danger btn-sm" >

                           Delete
                        </button>
                       </form>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
