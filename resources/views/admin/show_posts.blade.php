<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: white;
            pad: 30px;
            text-align: center;
        }


        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg {
            background-color: #00d9ff;
            color: white;
        }

        .img_deg {
            height: 100px;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->


        <div class="page-content">

            <h1 class="title_deg">All Posts</h1>


            <table class="table_deg">


                <tr class="th_deg">
                    <th>Post Title</th>

                    <th>Description</th>

                    <th>Posted By</th>

                    <th>Post Status</th>

                    <th>User Type</th>

                    <th>Image</th>

                </tr>


                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->post_status }}</td>
                        <td>{{ $post->user_type }}</td>

                        <td>
                            <img class="img_deg" src="postimage/{{ $post->image }}" alt="">
                        </td>
                        {{-- <td>{{ $post->pos }}</td> --}}
                    </tr>
                @endforeach



            </table>
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
