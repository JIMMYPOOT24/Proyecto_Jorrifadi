@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Inicio')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- Seccion Imagenes y texto quienes somos  --}}

<section class="bg-gray-800 relative text-white  "> 
  <a class="class " href="/"  >
    <img class="absolute h-full inset-0 object-center object-cover w-full opacity-70 " src= "images/{{$datos1->url_img1}}" alt="fondo seccion"/>
     </a> 
     
 <div class="container mx-auto px-8 py-10 relative"> 
   <h1 class=" text-center font-bold mb-5 text-5xl">@foreach ($datos as $dato){{$dato->slogan}} @endforeach</p> </h1> 
      
   <div class="flex flex-wrap  -mx-1"> 

          <div class="py-20 px-7 w-full md:w-10/12 lg:w-7/12"> 

              <h4 class="mb-1 text-3xl font-semibold uppercase">¿QUIENES SOMOS?</h4> 
              <h4 class="mb-4  text-5xl text-yellow-600 uppercase">________</h4>
              <p class="mb-6 text-xl font-semibold">@foreach ($datos as $dato){{$dato->descripcion}}@endforeach</p> 
              
              <!--Inicia  Boton -->

     <div class="container justify-center ">
      <div class="relative h-32 w-90">
        <div class="absolute bottom-15 right-0 h-16 w-90">
          <button class="font-bold border-2 border-white uppercase px-8 py-3 rounded bg-yellow-500 hover:bg-blue-900 hover:text-white max-w-max shadow-sm hover:shadow-lg">CURRICULUM</button>
          <button class="font-bold border-2 border-white uppercase px-8 py-3 rounded hover:bg-blue-900 hover:text-white max-w-max shadow-sm hover:shadow-lg">CONÓCENOS</button>
        </div>
      </div>
    </div>

    
              <!-- Termina Boton -->
</div>
          </div>             
      </div>         
  </div>     
</section>

{{-- Termina Seccion Imagenes y texto quienes somos  --}}

{{-- Seccion principales servicios--}}
<section>

  <div class="py-2  p-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          
          <p class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl">PRINCIPALES SERVICIOS</p>
        </div>
    
        <div class="mt-10">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
            <div class="relative">
              <dt>
  <!-- Inicia icono -->
                  <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/globe-alt -->
                  
                  <img src= "iconos/{{$iconservicios1->url_icon}}" alt="">

                </div>
  <!-- Termina icono -->
  
  <!-- Inicia texto -->
                <p class="ml-20 text-lg leading-10 font-bold text-black">{{$iconservicios1->nombre_servicio}}</p>
              </dt>
              
            </div>
  <!-- Termina texto -->


  
<!-- Inicia icono construccion y remodelaciones -->

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/scale -->
                  <img src= "iconos/{{$iconservicios2->url_icon}}" alt="">
                </div>

                 <!-- Inicia texto -->

  <p class="ml-20 text-lg leading-13 font-bold text-black">{{$iconservicios2->nombre_servicio}}</p>
              </dt>
            </div>

                 <!-- Termina Texto -->
  
    <!-- Termina icono -->
  
                
<!-- Inicia icono venta e instalacion -->
    
            <!-- Inicia icono -->
  
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->
                  
                  <img src= "iconos/{{$iconservicios3->url_icon}}" alt="">
  
                </div>
                <!-- Termina icono -->

                 <!-- inicia Texto -->

                <p class="ml-20 text-lg leading-10 font-bold text-black">{{$iconservicios3->nombre_servicio}}</p>
              </dt>
            </div>

             <!-- Termina Texto -->
     <!-- Termina icono -->
  
            
  
<!-- Inicia icono  ejecucion y supervicion -->
    
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/annotation -->

                  <img src= "iconos/{{$iconservicios4->url_icon}}" alt="">

                </div>
                <!-- Termina icono  -->


                <!-- inicia Texto -->

                <p class="ml-20 text-lg leading-13 font-bold text-black">{{$iconservicios4->nombre_servicio}}</p>
              </dt>
            </div>
  
            <!-- Termina texto -->

  
<!-- Inicia icono  tramites ante entidades -->
  
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->
                  
                  <img src= "iconos/{{$iconservicios5->url_icon}}" alt="">

                </div>

                 <!-- Termina icono -->
                
                <!-- inicia Texto -->

                <p class="ml-20 text-lg leading-10 font-bold text-black">{{$iconservicios5->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- termina Texto -->
  
<!-- Termina icono tramites ante entidades -->



<!-- Inicia icono servicios y asesorias -->
  
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->

                  <img src= "iconos/{{$iconservicios6->url_icon}}" alt="">
  
                </div>

                <!-- Termina icono -->

                <!-- Inicia  texto -->

                <p class="ml-20 text-lg leading-10 font-bold text-black">{{$iconservicios6->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- Termina texto -->
  
          </dl>
        </div>
      </div>

      <!-- Boton -->

      

    <div class="relative py-10 text-center">
      <a href="#" class="uppercase bg-yellow-500 inline-block px-9 py-3 rounded text-blue-50 max-w-max shadow-sm hover:shadow-lg">Ver más</a>
  </div>
    
          
  </div>
  
  </section>


  {{-- Nuestros clientes --}}
  <section class="bg-white">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">

    <div class="lg:text-center">
        
        <p class="mt-5 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl">Nuestros clientes</p>
        <h4 class="mb-4  text-5xl text-yellow-600 uppercase">______</h4>
      </div>

     
  <div class="flex ">
   

   
    <div class="contents">
      
      <div class="flex-3"> <img src= "images/{{$datoscliente1->url_imagen}}"alt="hotel-maroma"></div>
      <div class="flex-3"> <img src= "images/{{$datoscliente2->url_imagen}}" alt="hotel-kaua"></div>
      <div class="flex-3"> <img src= "images/{{$datoscliente3->url_imagen}}" alt="hotel-akumal"></div>
      <div class="flex-3"> <img src= "images/{{$datoscliente4->url_imagen}}" alt="hotel-came"></div>
      <div class="flex-3"> <img src= "images/{{$datoscliente5->url_imagen}}" alt="hotel-grupo-gw"></div>
    </div>
   
  </div>
  

</div>
<br>

</section>
{{-- termina Nuestros clientes --}}

{{-- Seccion Imagenes y texto  quienes somos --}}

{{-- terminaSeccion Imagenes y texto  quienes somos --}}



    
        
        
        
<section class="bg-yellow-500 py-auto text-white">
  <div class="container mx-auto px-4 py-auto relative">
    <div class="flex flex-wrap"> 

      {{-- Inicia texto e imagen quienes somos --}}

      <div class="px-4 w-full py-4">
        <h1 class="font-bold text-5xl text-center">¿Quienes somos?</h1>
    </div>

      <div class="object-left	 w-full h-full lg:w-6/12">
        <img class="p-10" src= "images/{{$datos1->url_img2}}" alt="fondo seccion"/>                                           
      </div>  

      {{-- Termina texto e imagen quienes somos --}}

      {{-- Inicia div vision, mision y botom --}}

      <div class="p-6 py-auto w-full lg:w-6/12"> 
        <div class="py-4"> 
          <h5 class="font-bold mb-1 text-white text-3xl text-center">  MISIÓN </h5> 
          <p class="text-black text-xl text-justify font-semibold">@foreach ($datos as $dato){{$dato->mision}}@endforeach</p> 
      </div>  

      <div class="py-4"> 
        <h5 class="font-bold mb-1 text-white text-3xl text-center"> VISIÓN </h5> 
        <p class="text-black text-xl text-justify font-semibold ">@foreach ($datos as $dato){{$dato->vision}}@endforeach</p> 
    </div> 
      </div>
      
      {{-- Termina div vision, mision y botom --}}

    </div>
    
    <div class="relative py-4 text-center">
      <a href="#" class="uppercase bg-blue-700 inline-block px-9 py-3 rounded text-blue-50 max-w-max shadow-sm hover:shadow-lg">Ver más</a>
  </div>

  </div>                                         
</section>






{{-- Porque elegirnos  --}}
<section class="bg-white pg-lib-item py-20 text-center text-black"> 
<div data-pg-class-style="container" class="container mx-auto px-4 relative pg-lib-item" data-pg-class-style-inline=""> 
    <div class="flex flex-wrap -mx-4  items-center mb-4" data-pg-class-style="column_parent" data-pg-class-style-inline=" items-center mb-4"> 
        <div class="mx-auto px-2 w-full lg:w-8/12"> 
            <h2 class="font-bold mb-1 text-2xl text-yellow-600"> JORRIFADI </h2> 
            <h2 class="font-bold mb-1 text-3xl text-blue-600"> ¿PORQUE ELEGIRNOS? </h2> 
            <h2 class="font-bold mb-1 text-4xl text-yellow-600"> _______  </h2> 
        </div>                                     
    </div>
    <div class="flex flex-wrap -mx-4" data-pg-class-style="column_parent">
       
      
{{-- Corazon  --}}

      <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
            <div class="py-4"> 
              <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-red-600">
               
                <img src= "iconos/{{$cualidades1->url_img}}" alt="">
              
              </span>
                <h5 class="font-bold mb-2 text-blue-800 text-xl"> PASIÓN </h5> 
                <p class="mb-4"> {{$cualidades1->descripcion}} </p>
            </div>
        </div>

{{-- Medalla  --}}

        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
            <div class="py-4"> 
              <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-white">
              
                <img src= "iconos/{{$cualidades2->url_img}}" alt="">
              
              </span>
                <h5 class="font-bold mb-2 text-blue-800 text-xl"> EXCELENCIA </h5> 
                <p class="mb-4">{{$cualidades2->descripcion}}</p> 
            </div>
        </div>

{{-- Relacion  --}}



        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
            <div class="py-4"> 
              <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-blue-600">

                <img src= "iconos/{{$cualidades3->url_img}}" alt="">

              </span>
                <h5 class="font-bold mb-2 text-blue-800 text-xl"> COMPROMISO </h5> 
                <p class="mb-4">{{$cualidades3->descripcion}}</p> 
            </div>
        </div>

{{-- Manos  --}}

        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
            <div class="py-4"> 
              <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-blue-600">

                <img src= "iconos/{{$cualidades4->url_img}}" alt="">

              </span>
                <h5 class="font-bold mb-2 text-blue-800 text-xl"> VALORES </h5> 
                <p class="mb-4">{{$cualidades3->descripcion}}</p> 
            </div>
        </div>
    </div>                                 
</div>                             
</section>

{{-- Termina Porque elegirnos  --}}

</body>
</html>

@endsection



