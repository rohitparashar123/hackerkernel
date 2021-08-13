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
               @if(count($taskList) == 0)
               <h4 class="text-center mb-30 pb-30" style="font-family: prague;">Oops!! Sorry No result found for your search</h4>
               @else
               <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Task</th>
                        <th scope="col">Task type</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($taskList as $list)
                     <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->user_name}}</td>
                        <td>{{$list->task_name}}</td>
                        <td>{{$list->task_type}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               {!! $taskList->links() !!}
               @endif
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>
