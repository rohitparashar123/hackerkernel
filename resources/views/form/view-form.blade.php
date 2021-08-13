<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <title>Document</title>
   </head>
   <body>
      <div class="container table-responsive py-5" style="margin-top: 20px;">
         <div class="row justify-content-center">
            <div class="col-md-10 text-center">
               <a href="{{url('/task')}}" class="btn btn-warning mb-3" style="float: right;">Assign task</a>
               <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Email</th>
                        <th scope="col">Mobile</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($data as $list)
                     <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->mobile}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               {!! $data->links() !!}
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>
