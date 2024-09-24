<!DOCTYPE html>
<html>
<head>

    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center {
            display: flex;
            justify-content: center;
            padding: 20px;
        }


        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    <div class = "d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('message') }}
                </div>



            @endif

            <h1 class = "post_title">Edit Post</h1>

            <form action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data" >

                @csrf

                <div class="div_center">

                    <label>Post Title</label>
                    <input type="text" name="title" value = "{{$post->title}}">

                </div>


                <div class="div_center">

                    <label>Post Description</label>
                    <textarea name="description">{{$post->description}}</textarea>

                </div>

                <div class="div_center" style="flex-direction: column; align-items: center;">
                    <label>Old Image</label>
                    <img style="margin-top: 10px;" height="300px" width="300px" src="/postimage/{{$post->image}}">
                </div>

                <div class="div_center">

                    <label>Edit Image</label>
                    <input type="file" name="image">

                </div>

                <div class="div_center">

                    <input type="submit" value = "Update"class = "btn btn-primary">

                </div>


            </form>

        </div>

        @include ('admin.footer')
</body>
</html>