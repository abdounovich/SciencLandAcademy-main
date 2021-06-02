@extends('layouts.app')

@section('content')
<div class="container ">
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







<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header text-center h4 text-white">{{ __('لائحة المسجلين ') }}</div>

                <div class="card-body">


                    @foreach ( $registrations as $registration)

                    <table dir="rtl" style="opacity: 0.8" class="mb-5  table table-hover table-borderless  shadow shadow-lg bg-white  table-striped text-dark text-center " style="opacity: 0.9">

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
        </div>
    </div>
</div>





<div class=" container mt-2">
    <div  class="row d-flex justify-content-center">
    <div  >{{$registrations->links('vendor.pagination.bootstrap-4')}}
   </div>
  </div>
 </div>
















@endsection











