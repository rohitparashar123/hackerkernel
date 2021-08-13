<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
      <title>Document</title>
      <style type="text/css">
         .error{
         color:#FF0000;
         font-size: 14px;
         margin-top: 5px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6 mt-3">
               <div class="card">
                  <div class="card-body">
                     <form  action="{{url('/save-task')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="name" class="form-label">User name</label>
                           <select class="form-control" name="user_name" required>
                              <option value="" selected disabled>Select the User</option>
                              @foreach($users as $list)
                              <option value="{{$list->name}}">{{$list->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Task Name</label>
                           <input type="text" class="form-control" id="email" name="task_name" placeholder="Enter the task" required>   
                        </div>
                        <div class="mb-3">
                           <label for="mobile" class="form-label">Task Type</label>
                           <select class="form-control" name="task_type" required>
                              <option value="" selected disabled>--Select Task--</option>
                              <option value="pending">Pending</option>
                              <option value="done">Done</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script>
      </body>
      </html>
