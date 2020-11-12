<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body class="container">
        
        <p class="h2 mb-5">Hello, Laravel!</p>

        <div class="mt-5">
            <p class="h3">Whats your opinion?</p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#opinionWindow">Let Us Know!</button>


            <div class="modal fade" id="opinionWindow" tabindex="-1" area-labelledby="opinionWindow" area-hidden="true">
               <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="/" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" id="title" class="form-control" name="title">
                                    <label></label>
                                    <textarea name="content" id="content" class="form-control" name="content" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Share Opinion</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>

        </div>


        <div class="mt-5">
            <p class="h4">Previous opinions</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Opinions</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($opinions as $data)
                    <tr>
                        <th>{{ $data->title }}</th>
                        <th>{{ $data->content }}</th>
                        <th>{{ $data->created_at }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
