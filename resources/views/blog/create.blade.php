@extends("template.master")
@section('title') Blog Create @endsection

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>

                            @endforeach
                        </ul>
                    </div>

                @endif

                <form action="{{route('blog.store')}}" method="post">

                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label ">title</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control form-control-lg @error('title') is-invalid @enderror">
                        @error('title')
                                <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-lg @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary ">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
