<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Eloquent Model</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('post_updated')}}
                        </div>
                        @endif
                        <form method="post" action="{{route('post.update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}" />
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="body">Post Description</label>
                                <textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>