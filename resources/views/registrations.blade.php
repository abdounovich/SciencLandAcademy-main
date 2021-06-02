<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Science Land Academy</title>

    <style>:root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
      }
      
      body {
        background:url(https://images.pexels.com/photos/3740217/pexels-photo-3740217.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) ;background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
       
        font-family: 'Changa', sans-serif;

      }
      select { text-align-last: right; }
     </style>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@700&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body >
    
  
<div class="container">
    <div class="row">

        
        @foreach ( $registrations as $registration)

        <table dir="rtl" style="opacity: 0.8" class="mt-5 m-2 table table-hover table-borderless  shadow shadow-lg bg-white  table-striped text-dark text-right " style="opacity: 0.9">
           
            <tbody>

            
                      
              
            
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                الإسم                                                 
                            </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->nom}}     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                اللقب                                                 
                            </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->prenom}}     
                        </td>
                    </tr>
    
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                               الإيميل                                               
                            </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->email}}     
                        </td>
                    </tr>
    
    
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
 الهاتف                            </strong>
                        </td>
                        <td class="text-danger">
                            <a class="text-danger" href="tel:{{$registration->telephone}}">{{$registration->telephone}}  </a>   
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                العمر                                                 
                            </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->age}} سنة      
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
المستوى                             </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->niveau}}     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
الدورة                              </strong>
                        </td>
                        <td class="text-danger">
                            {{$registration->formation}}     
                        </td>
                    </tr>                                    
                </tbody>
          </table>

          @endforeach

     
    </div>
</div>  



<div class="container">
    <div class="row">
        <table class="table table-user-information">
           
        </table>
    </div>
</div>


<div class=" container">
    <div  class="row d-flex justify-content-center">
    <div  >{{$registrations->links('vendor.pagination.bootstrap-4')}}
   </div>
  </div> 
 </div>
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




