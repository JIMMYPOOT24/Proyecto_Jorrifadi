@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Nosotros')




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

    
        <section class="bg-gray-800 pg-lib-item relative text-white"> 
            <img class="absolute h-full inset-0 object-center object-cover w-full opacity-60 " src= "{{ url('images/encabezado.png') }}" alt="fondo seccion"/>
    
            <div class="container mx-auto px-4 py-12 relative">
                <div class="flex flex-wrap -mx-4"> 
                    <div class="mx-auto px-4 text-center w-full lg:w-8/12"> 
                        
                        <h1 class="font-semibold mb-4 text-6xl">¿Quienes somos?</h1> 
                        </div>                                     
                </div>
            </div>                             
        </section>
    

    {{-- Termina Seccion Imagenes y texto quienes somos  --}}


    {{-- Inicia seccion imagen de casco --}}
    
    <section class="bg-white py-10"> 
        <div class="container mx-auto px-auto"> 
            <img class=" h-full inset-0 mx-auto" src= "{{ url('images/casco-recortado.png') }}" alt="fondo seccion casco"/>
    
        </div>     
    </section>

    {{-- Termina seccion imagen de casco --}}


    {{-- Inicia Seccion texto y descarga  --}}
    <section class="bg-white border-b py-5 text-gray-500">
  
        
      
        <div class="flex space-x-2 pl-2 mx-8 ">
      
          <div class="box-content h-50 w-50 p-8  flex-1 bg-white md:box-content  ">
                            
            <h1 class=" mb-6  text-justify text-xl text-black" >En Jorrifadi Instalaciones Y Proyectos contamos con el personal calificado y el criterio necesario que demanda cada diciplina para llevar a buen término los proyectos de nuestros clientes, contribuyendo así en la toma de decisiones que permitan al cliente obtener los mejores resultados. Nuestro fin es brindar un servicio integral que va desde la realización del proyecto ejecutivo, ingeniería de detalle, suministro e instalación, además de proporcionar la mejor calidad por medio de una residencia de obra destinados al área de revisión y control de calidad en los trabajos realizado.
            </h1> 
      
          </div>
      
          <div class="box-content h-50 w-50 p-8 flex-1 bg-white md:box-content ">
            <h1 class="mb-auto text-justify  text-xl text-black">Jorrifadi instalaciones y proyectos es una empresa que se comprometida con la investigación, desarrollo y aplicación de nuevas tecnologías que permitan la máxima optimización de los recursos de inversión, así como la plusvalía para los usuarios finales.
            </h1> 
    
            <img class="mx-auto" src="{{ url('iconos/pdf64px.png') }}">
                      
                   <div class="relative py-10 text-center"> <a href="#" class="bg-blue-700 hover:bg-blue-900  px-5 py-2 rounded text-white item-center"> Descargar Curriculum </a> 
                </div>
      
          </div>
      
        </div>
    </section>

    {{-- Termina Seccion texto y descarga  --}}
    

    {{-- Inicia Seccion mision y vision  --}}

    <section class="bg-gray-200 py-5"> 

        <div class="container mx-auto px-4 py-10"> 
            <div class="container mx-auto px-auto"> 
                <img class=" h-full inset-0 mx-auto" src= "{{ url('images/mision-vision-cableria.png') }}" alt="fondo seccion casco"/>
            </div> 
            
            <div class="flex space-x-2 pl-2 mx-8 ">
      
                <div class="box-content h-45 w-45 p-8  flex-1 md:box-content  ">
                   
                    <h4 class="mb-4 text-5xl text-yellow-500 font-semibold text-center py-5">Mision</h4>
                  <h2 class="text-justify text-2xl text-black font-normal py-5">Brindar servicios de energía eléctrica y alumbrado público, ofreciendo soluciones técnicas y económicamente más apropiadas para nuestros clientes conforme a las normativas vigentes.
                      </h2> 
            
                </div>
            
                <div class="box-content h-45 w-45 p-8 flex-1 md:box-content ">

                    <h4 class="mb-4 text-5xl text-yellow-500 font-semibold text-center py-5">Vision</h4>
                  <h2 class="text-justify text-2xl text-black font-normal py-5"> Ser una empresa referente en el suministro de energía eléctrica y alumbrado público por nuestros clientes dado a nuestra calidad, atención y profesionalismo.
                      </h2>    
            
                </div>
            
              </div>
                
        </div>     
    </section>
  

    {{-- Ternina Seccion mision y vision  --}}

   

    
    {{-- Certificaciones slader  --}}

    <h2 class="mb-6 text-4xl text-center text-blue-900 py-10">Certificados</h2> 

    <div class="border border-gray-400" data-pgc-field="Compoment">
                        <section class="bg-gray-100 pg-lib-item text-center text-gray-500">
                            <div class="container mx-auto">
                                <div class="relative z-0" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;now&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div#gt#[data-slider-elem=pgia-slide]:nth-of-type(1)&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;s&quot;:0.1,&quot;l&quot;:{&quot;pgDom&quot;:{&quot;clone&quot;:1,&quot;ins&quot;:&quot;append&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;,&quot;rstr&quot;:&quot;true&quot;,&quot;name&quot;:&quot;CloneSlidesForInfinite&quot;},{&quot;name&quot;:&quot;AutoPlay&quot;,&quot;trg&quot;:&quot;now&quot;,&quot;timer&quot;:&quot;6&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:5.98,&quot;d&quot;:0,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;GotoNext&quot;}}}]},{&quot;t&quot;:&quot;[data-slider-elem=pgia-progress-bar]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;width&quot;:0}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:5.98,&quot;l&quot;:{&quot;width&quot;:&quot;100%&quot;},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}]},&quot;rpt&quot;:&quot;-1&quot;,&quot;tcv&quot;:&quot;slider-user-active&quot;,&quot;nopg&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;UserActive&quot;,&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;pgia&quot;:{&quot;pause&quot;:&quot;AutoPlay&quot;}}}]},{&quot;t&quot;:&quot;[data-slider-elem=pgia-progress]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}]},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;UserInactive&quot;},{&quot;name&quot;:&quot;UserInactive&quot;,&quot;trg&quot;:&quot;mouseleave_notouch&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;AutoPlay&quot;}}}]},{&quot;t&quot;:&quot;[data-slider-elem=pgia-progress]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;autoAlpha&quot;:1}}]}]},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;UserActive&quot;},{&quot;name&quot;:&quot;SwipeLeftToNext&quot;,&quot;trg&quot;:&quot;swipe_left&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;GotoNext&quot;}}}]}]},&quot;tc&quot;:&quot;no-attr&quot;,&quot;tca&quot;:&quot;data-slider-direction&quot;,&quot;tcv&quot;:&quot;vertical&quot;,&quot;pdef&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;SwipeRightToPrev&quot;,&quot;trg&quot;:&quot;swipe_right&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;GotoPrev&quot;}}}]}]},&quot;tc&quot;:&quot;no-attr&quot;,&quot;tca&quot;:&quot;data-slider-direction&quot;,&quot;tcv&quot;:&quot;vertical&quot;,&quot;pdef&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;GotoNext&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;next_page_or_start&quot;}}}]}]}},{&quot;name&quot;:&quot;GotoPrev&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;prev_page&quot;}}}]}]}},{&quot;name&quot;:&quot;GotoFirst&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;first&quot;}}}]}]}},{&quot;name&quot;:&quot;GotoLast&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;last&quot;}}}]}]}},{&quot;name&quot;:&quot;SwipeDownToNext&quot;,&quot;trg&quot;:&quot;swipe_down&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;GotoNext&quot;}}}]}]},&quot;tc&quot;:&quot;attr&quot;,&quot;tca&quot;:&quot;data-slider-direction&quot;,&quot;tcv&quot;:&quot;vertical&quot;,&quot;pdef&quot;:&quot;true&quot;},{&quot;name&quot;:&quot;SwipeUpToPrev&quot;,&quot;trg&quot;:&quot;swipe_up&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;this&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;GotoPrev&quot;}}}]}]},&quot;tc&quot;:&quot;attr&quot;,&quot;tca&quot;:&quot;data-slider-direction&quot;,&quot;tcv&quot;:&quot;vertical&quot;,&quot;pdef&quot;:&quot;true&quot;}]}" data-slider-scrollbar="auto" data-slider-slides-per-page="1" data-slider-direction="horizontal" data-slider-name="pgia-slider">
                                    <div class="flex flex-row nowrap overflow-hidden" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;whole&quot;,&quot;snap&quot;:&quot;e&quot;,&quot;pag&quot;:&quot;p&quot;,&quot;pag_t&quot;:&quot;.pgia-slide&quot;,&quot;pag_clone&quot;:&quot;true&quot;,&quot;pag_pa&quot;:&quot;Current&quot;,&quot;pag_pd&quot;:&quot;-Current&quot;,&quot;pag_inf&quot;:&quot;true&quot;,&quot;pag_i&quot;:&quot;^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-pagination-item]&quot;}" data-slider-elem="pgia-slides-container" style="scroll-behavior: auto;">
                                        <div class="flex-grow-0 flex-shrink-0 overflow-hidden relative w-full" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.4,&quot;d&quot;:0.6,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}],&quot;desc&quot;:&quot;Show the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;HideContent&quot;,&quot;name&quot;:&quot;ShowContent&quot;},{&quot;name&quot;:&quot;HideContent&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}],&quot;desc&quot;:&quot;Hide the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;ShowContent&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;custom&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;end&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:9,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;ShowContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:9.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}}]}]},&quot;p&quot;:&quot;scroll&quot;,&quot;sc_dir&quot;:&quot;up_down&quot;,&quot;rep&quot;:&quot;true&quot;}]}" data-pg-ia-apply="^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slide]" data-slider-elem="pgia-slide">
                                            <div class="py-16" data-pg-ia-hide="" style="opacity: 0; visibility: hidden;">
                                                <div class="mx-auto p-4 w-full lg:w-8/12"> 
                                                    <div class="relative"> 
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-20 inline-block mb-4 text-blue-600 w-20"> 
                                                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"></path> 
                                                        </svg>                                                         
                                                        <h4 class="font-medium leading-tight mb-4 text-4xl text-gray-800">It's so easy to create a professional website at a fraction of the cost.</h4> 
                                                        <div> 
                                                            <p class="inline-block">Zig Ziglar -</p> 
                                                            <p class="font-normal inline-block text-blue-600 text-lg">ACME Gizmo LLC</p> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-0 flex-shrink-0 overflow-hidden relative w-full" data-slider-elem="pgia-slide" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.4,&quot;d&quot;:0.6,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}],&quot;desc&quot;:&quot;Show the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;HideContent&quot;,&quot;name&quot;:&quot;ShowContent&quot;},{&quot;name&quot;:&quot;HideContent&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}],&quot;desc&quot;:&quot;Hide the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;ShowContent&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;custom&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;end&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:9,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;ShowContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:9.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}}]}]},&quot;p&quot;:&quot;scroll&quot;,&quot;sc_dir&quot;:&quot;up_down&quot;,&quot;rep&quot;:&quot;true&quot;}]}">
                                            <div class="py-16" data-pg-ia-hide="" style="opacity: 0; visibility: hidden;">
                                                <div class="mx-auto p-4 w-full lg:w-8/12"> 
                                                    <div class="relative"> 
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-20 inline-block mb-4 text-blue-600 w-20"> 
                                                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"></path> 
                                                        </svg>                                                         
                                                        <h4 class="font-medium leading-tight mb-4 text-4xl text-gray-800">Good content isn’t about good storytelling. It’s about telling a true story well.</h4> 
                                                        <div> 
                                                            <p class="inline-block">I.P Freely - </p> 
                                                            <p class="font-normal inline-block text-blue-600 text-lg">ACME Gizmo LLC</p> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-0 flex-shrink-0 overflow-hidden relative w-full" data-slider-elem="pgia-slide" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.4,&quot;d&quot;:0.6,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}],&quot;desc&quot;:&quot;Show the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;HideContent&quot;,&quot;name&quot;:&quot;ShowContent&quot;},{&quot;name&quot;:&quot;HideContent&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}],&quot;desc&quot;:&quot;Hide the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;ShowContent&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;custom&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;end&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:9,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;ShowContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:9.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}}]}]},&quot;p&quot;:&quot;scroll&quot;,&quot;sc_dir&quot;:&quot;up_down&quot;,&quot;rep&quot;:&quot;true&quot;}]}">
                                            <div class="py-16" data-pg-ia-hide="" style="opacity: 0; visibility: hidden;">
                                                <div class="mx-auto p-4 w-full lg:w-8/12"> 
                                                    <div class="relative"> 
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-20 inline-block mb-4 text-blue-600 w-20"> 
                                                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"></path> 
                                                        </svg>                                                         
                                                        <h4 class="font-medium leading-tight mb-4 text-4xl text-gray-800">It's so easy to create a professional website at a fraction of the cost.</h4> 
                                                        <div> 
                                                            <p class="inline-block">Zig Ziglar -</p> 
                                                            <p class="font-normal inline-block text-blue-600 text-lg">ACME Gizmo LLC</p> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-0 flex-shrink-0 overflow-hidden relative w-full" data-slider-elem="pgia-slide" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.4,&quot;d&quot;:0.6,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}],&quot;desc&quot;:&quot;Show the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;HideContent&quot;,&quot;name&quot;:&quot;ShowContent&quot;},{&quot;name&quot;:&quot;HideContent&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}],&quot;desc&quot;:&quot;Hide the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;ShowContent&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;custom&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;end&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:9,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;ShowContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:9.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}}]}]},&quot;p&quot;:&quot;scroll&quot;,&quot;sc_dir&quot;:&quot;up_down&quot;,&quot;rep&quot;:&quot;true&quot;}]}">
                                            <div class="py-16" data-pg-ia-hide="" style="opacity: 1; visibility: inherit;">
                                                <div class="mx-auto p-4 w-full lg:w-8/12"> 
                                                    <div class="relative"> 
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-20 inline-block mb-4 text-blue-600 w-20"> 
                                                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"></path> 
                                                        </svg>                                                         
                                                        <h4 class="font-medium leading-tight mb-4 text-4xl text-gray-800">Good content isn’t about good storytelling. It’s about telling a true story well.</h4> 
                                                        <div> 
                                                            <p class="inline-block">I.P Freely - </p> 
                                                            <p class="font-normal inline-block text-blue-600 text-lg">Paper City LLC</p> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>
                                            </div>
                                        </div>
                                    <div class="flex-grow-0 flex-shrink-0 overflow-hidden relative w-full pgia-clone" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.4,&quot;d&quot;:0.6,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Linear.easeNone&quot;}]}],&quot;desc&quot;:&quot;Show the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;HideContent&quot;,&quot;name&quot;:&quot;ShowContent&quot;},{&quot;name&quot;:&quot;HideContent&quot;,&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;#gt#div&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:0}}]}],&quot;desc&quot;:&quot;Hide the content of the slide. Customize this animation to reveal the content.&quot;},&quot;rstr&quot;:&quot;true&quot;,&quot;po&quot;:&quot;true&quot;,&quot;pol&quot;:&quot;ShowContent&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s&quot;:&quot;custom&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;end&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0.5,&quot;d&quot;:9,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;ShowContent&quot;}}},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:9.5,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;HideContent&quot;}}}]}]},&quot;p&quot;:&quot;scroll&quot;,&quot;sc_dir&quot;:&quot;up_down&quot;,&quot;rep&quot;:&quot;true&quot;}]}" data-pg-ia-apply="^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slide]" data-slider-elem="pgia-slide">
                                            <div class="py-16" data-pg-ia-hide="" style="opacity: 0; visibility: hidden;">
                                                <div class="mx-auto p-4 w-full lg:w-8/12"> 
                                                    <div class="relative"> 
                                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-20 inline-block mb-4 text-blue-600 w-20"> 
                                                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"></path> 
                                                        </svg>                                                         
                                                        <h4 class="font-medium leading-tight mb-4 text-4xl text-gray-800">It's so easy to create a professional website at a fraction of the cost.</h4> 
                                                        <div> 
                                                            <p class="inline-block">Zig Ziglar -</p> 
                                                            <p class="font-normal inline-block text-blue-600 text-lg">ACME Gizmo LLC</p> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>
                                            </div>
                                        </div></div>
                                    <div data-slider-elem="pgia-controls">
                                        <a href="#" data-scroll-to="prev" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollTo&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;Goto${target.data-scroll-to}&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;}]}" data-pg-ia-apply="^[data-slider-name=pgia-slider]|[data-scroll-to]" class="absolute bg-white bottom-1/2 h-10 hover:bg-gray-200 inline-flex items-center justify-center left-0 ml-4 rounded-full shadow-lg text-gray-900 text-xl transform translate-y-1/2 w-10">‹</a>
                                        <div class="flex justify-center pb-3 space-x-1 text-center" data-slider-elem="pgia-pagination">
                                            <a href="#" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollToSlide&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;page&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;},{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;span&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.2,&quot;l&quot;:{&quot;class.add&quot;:&quot;bg-blue-600&quot;}}]}],&quot;desc&quot;:&quot;Customize the active item animation.&quot;},&quot;name&quot;:&quot;Current&quot;}]}" class="group inline-block py-3" data-slider-elem="pgia-pagination-item" data-item-idx="0"><span class="bg-gray-400 block group-hover:bg-blue-600 h-1 rounded-full w-6"></span></a>
                                        <a href="#" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollToSlide&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;page&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;},{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;span&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.2,&quot;l&quot;:{&quot;class.add&quot;:&quot;bg-blue-600&quot;}}]}],&quot;desc&quot;:&quot;Customize the active item animation.&quot;},&quot;name&quot;:&quot;Current&quot;}]}" class="group inline-block py-3 pgia-clone" data-slider-elem="pgia-pagination-item" data-item-idx="1"><span class="bg-gray-400 block group-hover:bg-blue-600 h-1 rounded-full w-6"></span></a><a href="#" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollToSlide&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;page&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;},{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;span&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.2,&quot;l&quot;:{&quot;class.add&quot;:&quot;bg-blue-600&quot;}}]}],&quot;desc&quot;:&quot;Customize the active item animation.&quot;},&quot;name&quot;:&quot;Current&quot;}]}" class="group inline-block py-3 pgia-clone" data-slider-elem="pgia-pagination-item" data-item-idx="2"><span class="bg-gray-400 block group-hover:bg-blue-600 h-1 rounded-full w-6"></span></a><a href="#" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollToSlide&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]|[data-slider-elem=pgia-slides-container]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;scrollTo&quot;:{&quot;dest&quot;:&quot;page&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;},{&quot;trg&quot;:&quot;no&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;span&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.2,&quot;l&quot;:{&quot;class.add&quot;:&quot;bg-blue-600&quot;}}]}],&quot;desc&quot;:&quot;Customize the active item animation.&quot;},&quot;name&quot;:&quot;Current&quot;}]}" class="group inline-block py-3 pgia-clone" data-slider-elem="pgia-pagination-item" data-item-idx="3"><span class="bg-gray-400 block group-hover:bg-blue-600 h-1 rounded-full w-6 bg-blue-600"></span></a></div>
                                        <a class="absolute bg-white bottom-1/2 h-10 hover:bg-gray-200 inline-flex items-center justify-center mr-4 right-0 rounded-full shadow-lg text-gray-900 text-xl transform translate-y-1/2 w-10" href="#" data-scroll-to="next" data-pg-ia="{&quot;l&quot;:[{&quot;name&quot;:&quot;ScrollTo&quot;,&quot;trg&quot;:&quot;click&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;^[data-slider-name=pgia-slider]&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.5,&quot;l&quot;:{&quot;pgia&quot;:{&quot;play&quot;:&quot;Goto${target.data-scroll-to}&quot;}}}]}]},&quot;pdef&quot;:&quot;true&quot;}]}">›</a>
                                    </div>
                                    <div class="absolute h-3 left-0 top-0 w-full" data-slider-elem="pgia-progress" style="opacity: 1; visibility: inherit;">
                                        <div class="bg-white h-full opacity-50" data-slider-elem="pgia-progress-bar" style="width: 99.4816%;"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

    {{-- Termina Certificaciones slader  --}}


</body>
</html>

@endsection