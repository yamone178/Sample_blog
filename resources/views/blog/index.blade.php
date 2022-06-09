@extends("template.master")
@section('title') Blog Create @endsection

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
           <div class="col-lg-8">
               @if(session('status'))
                   <div class="alert alert-success">{{session('status')}}</div>
               @endif

               <table class="table table-bordered align-middle">
                   <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Controls</th>
                        <th>Created</th>
                    </tr>
                   </thead>

                   <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{Str::words($blog->title,10)}}</td>
                            <td>{{Str::words($blog->description,10)}}</td>
                            <td>
                                <form action="{{route('blog.destroy',$blog->id)}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-outline-danger btn-sm">Del</button>

                                </form>

                            </td>
                            <td>{{$blog->created_at}}</td>
                        </tr>
                    @endforeach
                   </tbody>
               </table>

               <div class="">
                   {{$blogs->links()}}
               </div>
           </div>
        </div>
    </div>

@endsection

