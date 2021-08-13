<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <title>Document</title>
      <style type="text/css">
         button{
         position: relative;
         left: 472px;
         top: -38px;
         }
      </style>
   </head>
   <body>
      <div class="container table-responsive py-5" style="margin-top: 20px;">
         <div class="row justify-content-center">
            <form class="col-md-6" action="{{url('/search')}}" method="GET" role="search">
               <input class="form-control" name="term" id="term" type="text"
                  placeholder="Enter your search key ..." value="{{request()->input('query')}}">
               <a href="{{ url('/search') }}">
               <button class="btn btn-danger" type="submit">Search</button>
               </a>
            </form>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-10 text-center">
               <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Task Type</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($data as $list)
                     <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->user_name}}</td>
                        <td>{{$list->task_name}}</td>
                        <td>{{$list->task_type}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <a class="btn btn-warning mb-2" href="{{ url('export') }}">Export User Data</a>
               {!! $data->links() !!}
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>
