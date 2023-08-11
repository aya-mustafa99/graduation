@extends('admin.layout.master')
@section('title')
    post page
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

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
                        <th style="width: 10%">
                            title
                        </th>
                        <th style="width: 30%">
                            description
                        </th>
                        <th  style="width: 3%">
                           likes_number
                        </th>
                        <th style="width: 5%">
                            User_id
                        </th>
                      
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)

                    <tr>
                        <td>
                          {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$post->title}}
                            </a>
                            <br/>
                            <small>
                              created  {{$post->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src=" {{asset('posts_Image/'.$post->small_image)}}">
                                </li>

                            </ul>
                        </td>
                        <td class="project_progress">
                            <small>
                                {{$post->shares}}
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="">{{$post->category->title ?? "null"}}</span>
                        </td>
                        <td class="project-state">
                            <span class="">{{$post->views}}</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('post.show',$post)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('post.edit',$post)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                           <form  method="post" action="{{route('post.destroy',$post)}}">
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
