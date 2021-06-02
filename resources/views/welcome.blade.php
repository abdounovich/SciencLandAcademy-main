<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      
  @if (\Session::has('success'))
        <div class="alert  alert-success  text-right text-secondary  m-2 p-2">
          
            <div  style="width: 99%; height:100px" class="p-2 text-right"> {!! \Session::get('success') !!}</div>
      
    </div>
    @endif
        <div class="row">
          <div class=" mx-auto col col-12">
            <div class="card card-signin my-5   " style="opacity: 0.8"  >
              <div class="card-body  " >
                <div class=" d-flex  justify-content-center align-content-center  p-2 text-right " style="opacity: 0.9 ;" >    
         
                   <img src="{{asset('images/logo_full.png')}}" class="p-2 mt-2" width="300" height="120px" alt="">

                </div>

              <h5 class="card-title text-center  text-danger">  التسجيل في الأكاديمية </h5>
                <form class="form-signin" method="POST" action="/registration">
@csrf
                    <div class="form-label-group p-2 m-2 text-right">
                        <label for="inputNom" class=" text-secondary" >: الإسم</label>
                        <input type="text" id="inputNom" name="nom" class=" form-control form-control-lg bg-white" 
                        required>
                      </div>
                     
                      <div class="form-label-group p-2 m-2 text-right">
                        <label for="inputNom" class=" text-secondary" >: اللقب</label>
                        <input type="text" id="inputNom" name="prenom" class=" form-control form-control-lg" 
                        required>
                      </div>
                      <div class="form-label-group p-2 m-2 text-right">
                        <label for="inputNom" class=" text-secondary" >:  البريد الإلكتروني</label>
                        <input type="email" id="inputNom" name="email" class=" form-control form-control-lg" 
                        required>
                      </div>
                      <div class="form-label-group p-2 m-2 text-right">
                        <label for="inputNom"class=" text-secondary" >: رقم الهاتف</label>
                        <input type="tel" name="phone" id="inputNom" class=" form-control form-control-lg" 
                        required>
                      </div>

                     
                  <div class="form-label-group p-2 m-2 text-right">
                    <label for="inputEmail" class=" text-secondary"> : العمر </label>

                      <select name="age" id="inputEmail" class=" text-danger form-control form-control-lg text-right" >
                          
                        <option value="" disabled selected>  إختر عنصر من القائمة </option>
                        @for ($i = 10; $i < 91; $i++)
                              <option value="{{$i}}"> {{$i}}  </option>
                          @endfor
                      </select>
                  </div>
    
                     
                  <div class="form-label-group p-2 m-2 text-right">
                    <label for="inputEmail" class=" text-secondary"> : المستوى الدراسي </label>

                      <select name="niveau" id="inputEmail"   class="  text-warning form-control form-control-lg text-right" style="font-size: 18px" >
                        <option  disabled selected> إختر عنصر من القائمة</option>

                        <optgroup label="__________________">

                              <option value="السنة أولى إبتدائي">السنة أولى إبتدائي</option>
                              <option value="السنة الثانية إبتدائي">السنة الثانية إبتدائي</option>
                              <option value="السنة الثالثة إبتدائي">السنة الثالثة إبتدائي</option>
                              <option value="السنة الرابعة إبتدائي">السنة الرابعة إبتدائي</option>
                              <option value="السنة الخامسة إبتدائي">السنة الخامسة إبتدائي</option>
                              <option value="السنة السادسة إبتدائي">السنة السادسة إبتدائي</option>
                        </optgroup>
    <optgroup label="__________________">

                              <option value="السنة أولى متوسط">السنة أولى متوسط</option>
                              <option value="السنة الثانية متوسط">السنة الثانية متوسط</option>
                              <option value="السنة الثالثة متوسط">السنة الثالثة متوسط</option>
                              <option value="السنة الرابعة متوسط">السنة الرابعة متوسط</option>
    </optgroup>
                                <optgroup label="__________________">

                              <option value="السنة أولى ثانوي">السنة أولى ثانوي</option>
                              <option value="السنة الثانية ثانوي">السنة الثانية ثانوي</option>
                              <option value="السنة الثالثة ثانوي">السنة الثالثة ثانوي</option>
                                </optgroup> <optgroup label="__________________">
                              <option value="متحصل على شهادة البكالوريا">متحصل على شهادة البكالوريا  </option>
                              <option value="متحصل على  شهادة الليسونس ">متحصل على  شهادة الليسونس  </option>
                              <option value="متحصل على  شهادة الماستر  ">متحصل على  شهادة الماستر   </option>
                              <option value="متحصل على  شهادة الماجستر  ">متحصل على  شهادة الماجستر   </option>
                              <option value="متحصل على  شهادة مهندس دولة ">متحصل على  شهادة مهندس دولة    </option>
                              <option value="متحصل على  شهادة الدكتوراه ">متحصل على  شهادة الدكتوراه    </option>
                             </optgroup>


                      </select>
                  </div>



                  <div class="form-label-group p-2 m-2 text-right">
                    <label for="inputEmail" class=" text-secondary">   :   التسجيل في دورة   </label>

                      <select name="formation" id="inputEmail"   class="  text-info form-control form-control-lg text-right" style="font-size: 18px" >
                       
                        <option value=""  disabled selected> إختر عنصر من القائمة </option>
         

                        @foreach ($formations as $formation)
                        <option
                            
                         value="{{$formation->nom}}">{{$formation->nom}} </option>
         @endforeach

                             


                      </select>
                  </div>
                  <div class=" mt-5 p-2">
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">
                           تسجيل 
                        </button>
                        </div>
                </form>
              </div>
            </div>
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