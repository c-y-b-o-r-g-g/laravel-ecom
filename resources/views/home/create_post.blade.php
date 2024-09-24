<!DOCTYPE html>
<html lang="en">

<head>

    <style type = "text/css" >
        .div_deg {
            text-align: center
            /* display: flex; */
            /* justify-content: center; */
            /* padding: 20px; */
        }

        /* label {
            display: inline-block;
            width: 200px;
        } */

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: white;

            padding: 30px
            /* pad: 30px;
            text-align: center; */
        } 

        label {
            display: inline-block;
            width: 200px;
            color: white;
            font-size: 18px;   
            font-weight: bold
        }

        .field_deg {
            padding: 25px;
        }   



    </style>

    @include('home.homecss');
</head>

<body>

    <div class="header_section">
        @include('home.header');

    


    <div class="div_deg" >

        <h3  class = "title_deg" >Add post</h3>

        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data" >
            @csrf


            <div class="field_deg" >
                <label>Post Title</label>
                <input type="text" name="title">
            </div>

            <div class="field_deg" >
                <label class="field_deg" >Description</label>
                <textarea  name="description"></textarea>
            </div>

            <div class="field_deg" >
                <label>Add image</label>
                <input type="file" name="image">
            </div>

            <div class="field_deg" >
                <input type="submit" value="Add Post" class = "btn btn-outline-secondry" >
            </div>

        </form>

    </div>

    @include('home.footer');

    

</body>

</html>
