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
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@700&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</head>
  <body >
    
  
<div class="container">
    <div class="row">

        







        <div class="container">
      
            @if (\Session::has('success'))
                  <div class="alert  alert-success  text-right text-secondary  m-2 p-2">
                    
                      <div  style="width: 99%; height:100px" class="p-2 text-right"> {!! \Session::get('success') !!}</div>
                
              </div>
              @endif
                  <div class="row">
                    <div class=" mx-auto col col-12">
                      <div class="card card-signin my-5   " style="opacity: 0.8"  >
                        <div class="card-body  " >
           
          
                        <h5 class="card-title text-center  text-danger"> لوحة التحكم    </h5>
                          <form class="form-signin" method="POST" action="/formations">
          @csrf
                              <div class="form-label-group my-2 text-right">
                                  <label for="inputNom" class=" text-secondary" >أضف دورة جديدة</label>
                                  <input type="text" id="inputNom" name="nom" dir="rtl" style=" font-size:15px" class="  form-control form-control-lg bg-white" 
                                  required placeholder="إسم الدورة">
                                </div>
                               
                                
                        @php
                            $order=$formations->count()+1;
                        @endphp
                                <input type="hidden" id="order" name="order"  value="{{$order}}" >
                                <input type="hidden" id="type" name="type" value="1"  >

          
                               
                        
              
                               
                          
          
          
                         
                            <div class=" mt-1 ">
                                <button class="btn  btn-primary col col-12  text-center" type="submit">
                                     أضف الدورة 
                                  </button>
                                  </div>
                          </form>
                        </div>
                      </div>
                    </div>
          
                
                  </div>
              </div>
          
              



<div class="container">
                <h5 class=" text-center  text-danger"> قائمة الدورات</h5>

</div>

        @foreach ( $formations as $formation)


       
        
        <table dir="rtl" style="opacity: 0.8" class=" m-4 table  shadow shadow-lg bg-dark  text-white text-right " style="opacity: 0.9">
                   <form action="/formations/edit/{{$formation->id}}" method="post">
 @csrf
            <tbody>

            
                      
              
            
                    <tr>    
                        <td  width="30%">
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                إسم الدورة                                                 
                            </strong>
                        </td>
                        <td class="text-danger"  width="70%">
                          <input type="text"  class="form-control" value=" {{$formation->nom}}  " name="nom" id=""> 
                            
                        </td>
                    </tr>
                    <tr>        
                        <td  width="30%">
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
ترتيب الدورة                             </strong>
                        </td>
                        <td class="text-danger" width="70%">
                          <input type="hidden" value="{{$formation->type}}" name="type">


    <div class="form-group">
      <select id="my-select" class=" custom-select" name="order">
        @for ($i = 1; $i < $formation->count()+1; $i++)
        <option @if ($formation->order==$i) selected 
       @endif >{{$i}}</option>
        @endfor

      </select>
    </div>

                        </td>


                                  
                    </tr>
    
                   
    
    
                   <tr>

                    <td width="30%"> حالة الدورة</td>
                    <td   > 
  
                  


                      <div class="form-check">
                        <input class="form-check-input " type="radio" name="type" value="1" id="flexRadioDefault1"  @if ($formation->type==1)
                        checked
                        @endif>
                      <span class="mx-4"> مفعلة </span>
                  

                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="0" @if ($formation->type==0)
                            checked
                        @endif>
                        <span class="mx-4"> ملغاة </span>
                    
                      </div>
                    
                      </td> 
                     
                   </tr>
                 <tr> <td colspan="2" class="text-center">                          <button class="btn btn-primary col col-12" type="submit">حفظ التعديلات </button>                            
                 </td></tr>
                     
                       
                </tbody>        </form>

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



       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
      function myFunction($fid,$cbid) {
        var checkBox=document.getElementById($cbid);
    
       
    /*     window.location = "/actif/"+$fid;
     */  
        
    
     if (checkBox.checked == true){
      window.location = "/actif/"+$fid+"/0";
      } else {
        window.location = "/actif/"+$fid+"/1";
    
     }
    
    }
    
    ;</script>
  </body>
</html>




