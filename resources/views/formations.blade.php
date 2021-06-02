

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


     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</head>
  <body style="background-color: black" >

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ScienceLandAcademy') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل حساب جديد') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center h4 text-danger">{{ __('لوحة التحكم') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

        <div  class=" d-flex justify-content-between">
                                                <a href="#">إعدادات</a>
        <a href="/registrations" class="text-right">قائمة المسجلين </a>
                            <a href="/formations">التحكم في الدورات </a>

        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">








        <div class="container">

            @if (\Session::has('success'))
                  <div class="alert  alert-success  text-right text-secondary  m-2 p-2">

                      <div  style="width: 99%; height:100px" class="p-2 text-right"> {!! \Session::get('success') !!}</div>

              </div>
              @endif
                  <div class="row">
                    <div class=" mx-auto col col-12">
                      <div class="card card-signin my-5   "   >
                        <div class="card-body  " >


                        <h5 class="card-title text-center  text-danger"> أضف دورة جديدة </h5>
                          <form class="form-signin" method="POST" action="/formations">
          @csrf
                              <div class="form-label-group my-2 text-right">
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



                </div></div>









        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card p-2">                    <div class="card-header text-center h4 text-danger">{{ __('قائمة الدورات') }}</div>

  @foreach ( $formations as $formation)
        <table dir="rtl"  class=" table table-borderless  mt-4 shadow shadow-lg bg-dark  text-white text-right " >
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

                    <td width="30%">
                        <strong>  حالة الدورة</strong>                      </td>
                    <td>




                      <div class="form-check">
                        <input class="form-check-input " type="radio" name="type" value="1" id="flexRadioDefault1"  @if ($formation->type==1)
                        checked
                        @endif>
                      <span class="mx-4"> <strong>مفعلة</strong> </span>


                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="0" @if ($formation->type==0)
                            checked
                        @endif>
                        <span class="mx-4 "> <strong>ملغاة</strong> </span>

                      </div>

                      </td>

                   </tr>
                 <tr> <td colspan="2" class="text-center">
                     <button class="btn btn-primary col col-5 " type="submit"><strong>حفظ التعديلات</strong> </button>
                     <a class="btn btn-danger col col-5" href="/formations/delete/{{$formation->id}}" ><strong>حذف الدورة </strong> </a>
                    </td></tr>



                </tbody>        </form>
    @endforeach
          </table>
                    </div></div></div></div>



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



