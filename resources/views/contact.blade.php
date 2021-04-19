@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Contacto')

@section('content')


{{--  Inicia seccion de formulario --}}

<section class="bg-gray-800 relative text-white">
    <img src="https://images.unsplash.com/photo-1523381294911-8d3cead13475?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDI0fHxmYXNoaW9uJTIwc2hvb3R8ZW58MHx8fA&ixlib=rb-1.2.1&q=80&w=1080" class="absolute h-full inset-0 object-center object-cover w-full"/>
    <div class="container mx-auto px-4 py-40 relative">
      <div class="flex flex-wrap -mx-4">
        <div class="px-4 w-full md:w-10/12 lg:w-full">
          <h4 class="mb-16 text-4xl uppercase font-normal text-center">Si desea más información, complete este formulario. Nos pondremos en contacto con usted a la brevedad posible</h4>
        </div>
      </div>
      
  {{--  Inicia formulario --}} 
  
      <form> 
          <div class="mb-6 flex px-4 w-full md:w-6/12 lg:w-6/12"> 
              <div class="px-4 w-full md:w-6/12 lg:w-6/12"> 
                  <div class="mb-6"> 
                      <label class="block font-bold mb-2 text-white" for="inputName">Correo</label>                                                     
                      <input class="appearance-none border-2 border-white focus:shadow-lg outline-none px-5 py-3 w-full" placeholder="Escribe tu correo" type="text" id="inputEmail"> 
                  </div>                                                 
              </div>                                             
              <div class="px-4 w-full md:w-6/12 lg:w-6/12">
                  <div class="mb-6"> 
                      <label class="block font-bold mb-2 text-white" for="inputEmail">Nombre</label>                                                     
                      <input class="appearance-none border-2 border-white focus:shadow-lg outline-none px-5 py-3 w-full" placeholder="Escribe tu nombre" type="email" id="inputName"> 
                  </div>                                                 
              </div>                                             
          </div> 
          <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12"> 
              <label class="block font-bold mb-2 text-white" for="inputSubject">Número de telefono</label>                                             
              <input class="appearance-none border-2 border-white focus:shadow-lg outline-none px-5 py-3 w-full" placeholder="Escribe tu numero de telefono" type="text" id="inputNumber"> 
          </div>
          <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12"> 
              <label class="block font-bold mb-2 text-white" for="inputMessage">Mensaje</label>                                             
              <textarea rows="6" class="appearance-none border-2 border-white focus:shadow-lg outline-none px-5 py-3 w-full" placeholder="Escribe tu mensaje" id="inputMessage"></textarea> 
          </div>
          <div class="text-left mb-6 px-8 w-full md:w-1/4 lg:w-1/4">
              <button type="submit" class="bg-blue-600 font-medium hover:bg-blue-700 inline-block px-6 py-2 text-center text-white uppercase">Enviar</button>
          </div>
      </form>
    </div>
  </section>


@endsection
