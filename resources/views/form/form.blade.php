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
                   @if($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                  </div>
                  @endif
                  <div class="card-body">
                     <form id="contact_form" action="{{url('/save-form')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="name" class="form-control" id="name" aria-describedby="emailHelp" name="name" spellcheck="true" required>
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                           @error('email')
                           <span class="error" role="alert">
                           {{ $message }}
                           </span>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="mobile" class="form-label">Phone</label>
                           <input type="number" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required>
                           @error('mobile')
                           <span class="error" role="alert">
                           {{ $message }}
                           </span>
                           @enderror
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
         $(document).ready(function(){
         
          if($("#contact_form").length > 0)
           {
             $('#contact_form').validate({
               rules:{
                 name : {
                   required : true,
                   maxlength : 50
                 },
                 email : {
                   required : true,
                   maxlength : 50, 
                   email : true
                 },
                 mobile : {
                   required : true,
                   minlength : 10,
                   maxlength : 10
                 }
               },
               messages : {
                 name : {
                   required : 'Enter Name Detail',
                   maxlength : 'Name should not be more than 50 character'
                 },
                 email : {
                   required : 'Enter Email Detail',
                   email : 'Enter Valid Email Detail',
                   maxlength : 'Email should not be more than 50 character'
                 },
                 message : {
                   required : 'Enter Phone Detail',
                   minlength : 'Message Details must be minimum 10 character long',
                   maxlength : 'Message Details must be maximum 10 character long'
                 }
               }
             });
           }       
         });
      </script>
   </body>
</html>
