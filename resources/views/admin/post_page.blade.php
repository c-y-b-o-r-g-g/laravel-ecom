<!DOCTYPE html>
<html>

<head>
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
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        {{-- @include('admin.body') --}}
        <div class="page-content">

            @if (Session::has('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden = "true">x</button>

                    {{ Session::get('message') }}

                </div>
            @endif

            <h1 class = "post_title">Add Post</h1>

            <div>

                <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div class="div_center">

                        <label>Post Title</label>
                        <input type="text" name="title" id="">

                    </div>


                    <div class="div_center">

                        <label>Post Description</label>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>

                    </div>

                    <div class="div_center">

                        <label>Add Image</label>
                        <input type="file" name="image">

                    </div>

                    <div class="div_center">

                        <input type="submit" class = "btn btn-primary">

                    </div>
                </form>

            </div>

        </div>
        @include('admin.footer')
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"></script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
</body>

</html>
