<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
{{-- Favicon --}}
{{-- Estilos --}}
<link rel="stylesheet" href="css/style.css">
<body>
    {{-- Header --}}
    {{-- nav --}}

        
        <nav class="flex items-center justify-between flex-wrap bg-white p-8 fixed w-full z-10 top-0 shadow-xl">
            <div class="flex items-center flex-shrink-0 text-white mr-6" >
                
                <a href="/" class="class">
                    <img class="h-35 w-60 ml-8 self-center" src="{{url('images/JORRIFADI_LOGO.png')}}"/>
                </a>
            </div>
    
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-black border-black-600 hover:text-black hover:border-black">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
    
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 mr-10  items-center text-xl">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-gray-800 no-underline hover:text-gray-800" href="{{route('index')}}">Inicio</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-yellow-500 no-underline hover:text-black hover:text-underline py-2 px-4" href="{{route('nosotros')}}">Nosotros</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-yellow-500 no-underline hover:text-black hover:text-underline py-2 px-4" href="{{route('servicios')}}">Servicios</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-yellow-500 no-underline hover:text-black hover:text-underline py-2 px-4" href="{{route('proyectos')}}">Proyectos</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-yellow-500 no-underline hover:text-black hover:text-underline py-2 px-4" href="{{route('contactanos')}}">Contáctanos</a>
                    </li>
                    
                
                
                </ul>
            </div>
        </nav>

{{-- Termina header --}}

<br>
<br>
<br>
<br>
<br> 
<br>   


{{-- Icono watsap --}}
    @yield('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=529831129756&text=Hola,%20Buen%20dia!.%20Me%20interesa%20contratar%20alguno%20de%20tus%20servicios" class="float" target="_blank" >
        <i class="fa fa-whatsapp my-float"></i>
        </a>
{{-- termina Icono watsap --}}
    

    {{-- Script --}}

    <script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>
    
</body>

     {{-- Footer --}}

     <footer class="footer bg-gray-300 relative pt-6 ">
        <div class="container mx-auto px-2">
    
            <div class="sm:flex sm:mt-auto">
                <div class=" mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between"> 
                    <img class="h-35 w-60 self-center text-black" src= "{{ url('images/logo-jorrifadi.png') }}" alt="Logotipo Empresa">
                
                    <div class="flex flex-col">
                        <span class="font-bold text-blue-800 uppercase  mb-2">Nuestra Empresa</span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500"  >Inicio</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >¿Quienes somos?</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Servicios</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Proyectos</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Contactos</a></span>
                    </div>
                    
                    <div class="flex flex-col">
                        <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Servicios</span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Proyectos ejecutivos</b></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Contrucción y/o remodelaciones en general</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md  hover:text-yellow-500" >Ejecucion y supervisión de obras </a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Trámites ante entidades municipales, estatales y federales<a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Unidad de verificación de instalaciones eléctrica<a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Servicio de asesoría</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Venta e instalación de material eléctrico</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Contactanos</span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >044 (998) 1022645</a></span>
                        <span class="my-1"><a href="#" class="text-Black-700  text-md hover:text-yellow-500" >Direccion@jorrifadi.com</a></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=" bg-yellow-500 mx-auto px-5">
            <div class="mt-5  flex flex-col items-center">
                <div class="sm:w-2/4 text-center py-5">
                    <h1 class="text-sm text-black-700 font-bold mb-2">
                        © 2021 Jodifarri Instalación y Proyectos  S.A. de C.V. ​Todos los Derechos Reservados.
                    </h1>
                </div>
            </div>
        </div>
       


        
    </footer>

{{-- Termina Footer --}}
</html>