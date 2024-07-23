@extends('layouts.app')
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Bienvenido {{ Auth::user()->name }}!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="{{ asset('../../assets/images/banner.png') }}" alt="header"
            class="img-fluid w-100 h-100 animated-scaleX">
    </div>
</div>
@endsection
@section('content')
<div class="row">
   <div class="col-md-12 col-lg-12">
      <div class="row row-cols-1">
         <div class="d-slider1 overflow-hidden ">
            <ul  class="swiper-wrapper list-inline m-0 p-0 mb-2">
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total de Clientes</p>
                           <h4 class="counter">50</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-02" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total de Productos</p>
                           <h4 class="counter">10</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-03" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                           <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total de Ventas</p>
                           <h4 class="counter">5</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-04" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                           <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Facturas Pendientes</p>
                           <h4 class="counter">10</h4>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </div>
   </div>
   <!-- <div class="col-md-12 col-lg-12">
      <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="600">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title mb-2">Equipos en Mantenimiento</h4>
                  </div>
                  <div class="dropdown">
                     <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                     </span>
                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                        <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                        <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                     </div>
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="table-responsive mt-4">
                     <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                           <tr>
                              <th>EQUIPO</th>
                              <th>ORDEN DE SERVICIO</th>
                              <th>INGRESO</th>
                              <th>FINALIZACIÓN</th>
                              <th>ESTATUS</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                            src="{{ asset('../assets/images/shapes/01.png') }}" alt="profile">
                                        <h6>#23</h6>
                                    </div>
                                </td>
                                <td>#ORD0001</td>
                                <td>12-03-2023</td>
                                <td>-</td>
                                <td>PENDIENTE</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                            src="{{ asset('../assets/images/shapes/01.png') }}" alt="profile">
                                        <h6>#23</h6>
                                    </div>
                                </td>
                                <td>#ORD0002</td>
                                <td>12-03-2023</td>
                                <td>-</td>
                                <td>PENDIENTE</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                            src="{{ asset('../assets/images/shapes/01.png') }}" alt="profile">
                                        <h6>#23</h6>
                                    </div>
                                </td>
                                <td>#ORD0003</td>
                                <td>12-03-2023</td>
                                <td>-</td>
                                <td>PENDIENTE</td>
                            </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
</div>
@endsection
