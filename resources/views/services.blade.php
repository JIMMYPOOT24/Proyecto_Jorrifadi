@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Servicios')




@section('content')

<section class="bg-gray-800 relative text-white">
    <div class="container mx-auto px-4 py-14 relative">
        <div class="flex flex-wrap">
            <div class="px-4 w-full">
                <h1 class="font-bold text-5xl text-center">Nuestros Servicios</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-white pg-lib-item py-20 text-center text-black">
    <div class="container mx-auto mt-5 text-center">
        <div class="flex justify-between">         
            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">PROYECTOS EJECUTIVOS</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m504.5 49.692h-233.736v-42.192c0-4.142-3.357-7.5-7.5-7.5h-46.793c-4.142 0-7.5 3.358-7.5 7.5v42.192h-91.782c-4.142 0-7.5 3.358-7.5 7.5v64.482c-4.95 2.638-9.641 6.106-13.591 10.098v-22.043c0-13.597-13.527-24.762-33.647-28.469v-16.281c0-4.142-3.358-7.5-7.5-7.5-13.278 0-26.778 5.105-37.039 14.006-11.55 10.02-17.912 23.928-17.912 39.161v31.423c0 9.697 15 9.697 15 0v-31.423c0-16.417 12.217-33.998 32.451-37.529v287.704c-11.77 1.471-23.79 6.179-32.421 14.474-.016-10.213-.03-193.372-.03-193.372 0-9.697-15-9.697-15 0v232.965c0 .421.043.831.11 1.233.737 21.999 21.09 38.439 47.939 38.439 12.999 0 24.629-3.7 33.196-9.797l.004 27.573c.004 25.344 25.351 39.664 48.056 39.664 24.1-.004 48.042-13.577 48.042-39.68l-.017-106.038h213.59l-155.632 132.508c-5.203 4.429-1.971 13.21 4.862 13.21h225.868c4.143 0 7.5-3.358 7.5-7.5v-36.382c0-9.697-15-9.697-15 0v28.882h-197.989l197.989-168.569v98.311c0 9.697 15 9.697 15 0v-60.458h30.982c4.143 0 7.5-3.358 7.5-7.5v-104.684-196.908c0-4.142-3.357-7.5-7.5-7.5zm-7.5 15v181.908h-175.652v-181.908zm-241.236-49.692v191.945h-31.793v-19.167h5.446c9.697 0 9.697-15 0-15h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.653h5.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.652h5.446c9.697 0 9.697-15 0-15h-5.446v-19.167zm-137.304 118.78c3.238-1.532 6.634-2.606 10.187-3.223l.046 287.704c-8.355 1.046-21.861 4.328-32.419 14.479-.017-10.073-.033-17.87-.033-18.082l-.04-246.567c-.002-13.439 8.188-27.655 22.259-34.311zm43.884 316.655c-.253-.145-.508-.288-.767-.43-8.602-4.722-19.833-7.356-31.686-7.44l-.001-9.324c3.594-.495 6.008-.458 6.066-.458 4.696-.314 7.275-2.813 7.737-7.497l-.043-271.201c9.942 2.46 18.648 7.5 18.649 13.079zm-81.246-340.706v247.486 35.684c-8.357-4.799-19.65-7.687-32.451-7.773v-9.326c3.596-.495 6.01-.457 6.066-.456 4.696-.314 7.275-2.813 7.738-7.496v-271.249c11.424 2.735 18.647 8.407 18.647 13.13zm0 308.711c0 11.448-15.135 21.12-33.049 21.12-18.798 0-32.974-10.606-32.974-24.672 0-14.244 5.163-27.735 18.572-34.548v12.61c.534 4.906 3.269 7.395 8.204 7.467 10.422-.981 21.943.185 31.261 5.301 5.377 2.953 8.424 6.703 7.986 12.722zm48.205 78.56c-.003 0-.004 0-.008 0-18.793 0-32.969-10.604-32.971-24.666-.002-14.243 5.158-27.737 18.567-34.552l.002 12.611c.535 4.905 3.27 7.394 8.204 7.465 12.723-1.196 39.861.846 39.251 18.016.002 11.449-15.131 21.124-33.045 21.126zm47.996-329.84c-.002-13.502-13.574-24.733-33.652-28.456l-.003-16.288c-.43-4.571-2.93-7.071-7.501-7.499-3.828.001-7.672.439-11.454 1.257v-51.482h84.282v149.752c0 4.142 3.358 7.5 7.5 7.5h46.793c4.143 0 7.5-3.358 7.5-7.5v-149.752h35.584v189.408 97.183h-129.019zm291.864 138.226c-2.656-1.227-5.781-.799-8.008 1.098l-52.617 44.799h-87.19v-89.683h175.652v89.683h-23.482v-39.088c0-2.924-1.7-5.582-4.355-6.809z"></path>
                        <path d="m357.34 214.917h69.105c1.974 0 3.918-.808 5.311-2.205l34.552-34.525c1.408-1.407 2.199-3.316 2.199-5.306l-.01-69.007c0-4.058-3.443-7.499-7.501-7.499l-69.114.008c-1.987 0-3.895.79-5.3 2.195l-34.538 34.511c-1.394 1.39-2.205 3.344-2.205 5.311v69.017c.001 4.143 3.359 7.5 7.501 7.5zm7.5-69.017h54.105v54.017h-54.105zm69.106 43.421v-47.812l19.556-19.54.007 47.806zm-38.956-77.938 47.89-.006-19.539 19.523h-47.885z"></path>
                        <path d="m392.813 314.087h-24.851c-9.697 0-9.697 15 0 15h24.851c9.697 0 9.697-15 0-15z"></path>
                        <path d="m431.639 284.242h-63.677c-9.697 0-9.697 15 0 15h63.677c9.697 0 9.697-15 0-15z"></path>
                        <path d="m424.727 385.308-90.555 77.1c-5.201 4.429-1.97 13.21 4.862 13.21h90.555c4.143 0 7.5-3.358 7.5-7.5v-77.1c0-5.702-7.202-10.105-12.362-5.71zm-2.638 75.31h-62.677l62.677-53.364z"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div> 
            
            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">CONSTRUCCIÓN Y/O REMODELACIÓN EN GENERAL</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m136 272h16v16h-16zm0 0"></path><path d="m168 272h16v16h-16zm0 0"></path><path d="m200 272h16v16h-16zm0 0"></path><path d="m136 304h16v16h-16zm0 0"></path><path d="m168 304h16v16h-16zm0 0"></path><path d="m200 304h16v16h-16zm0 0"></path><path d="m232 304h16v16h-16zm0 0"></path><path d="m264 304h16v16h-16zm0 0"></path><path d="m136 336h16v16h-16zm0 0"></path><path d="m168 336h16v16h-16zm0 0"></path><path d="m200 336h16v16h-16zm0 0"></path><path d="m232 336h16v16h-16zm0 0"></path><path d="m264 336h16v16h-16zm0 0"></path><path d="m136 368h16v16h-16zm0 0"></path><path d="m168 368h16v16h-16zm0 0"></path><path d="m200 368h16v16h-16zm0 0"></path><path d="m232 368h16v16h-16zm0 0"></path><path d="m264 368h16v16h-16zm0 0"></path><path d="m136 400h16v16h-16zm0 0"></path><path d="m168 400h16v16h-16zm0 0"></path><path d="m200 400h16v16h-16zm0 0"></path><path d="m232 400h16v16h-16zm0 0"></path><path d="m264 400h16v16h-16zm0 0"></path><path d="m136 432h16v16h-16zm0 0"></path><path d="m168 432h16v16h-16zm0 0"></path><path d="m200 432h16v16h-16zm0 0"></path><path d="m232 432h16v16h-16zm0 0"></path><path d="m264 432h16v16h-16zm0 0"></path><path d="m472 24h-56v-16c0-4.417969-3.582031-8-8-8h-80c-4.417969 0-8 3.582031-8 8v16h-312c-4.417969 0-8 3.582031-8 8v32c0 4.421875 3.582031 8 8 8h24v152c0 4.421875 3.582031 8 8 8s8 3.582031 8 8c0 4.421875-3.582031 8-8 8s-8-3.578125-8-8h-16c.023438 5.855469 2.199219 11.5 6.121094 15.851562l-20.519532 27.351563.101563.078125c-1.070313 1.34375-1.6679688 3.003906-1.703125 4.71875v32c0 2.125.84375 4.15625 2.34375 5.65625l16 16c1.5 1.5 3.535156 2.34375 5.65625 2.34375h32c2.121094 0 4.15625-.84375 5.65625-2.34375l16-16c1.5-1.5 2.34375-3.53125 2.34375-5.65625v-32c-.035156-1.714844-.632812-3.375-1.703125-4.71875l.101563-.078125-20.519532-27.351563c5.34375-5.9375 7.359375-14.15625 5.371094-21.890624-1.984375-7.734376-7.710938-13.960938-15.25-16.589844v-145.371094h272v8c0 4.421875 3.582031 8 8 8h16v376h-32v-320h-16v32h-48v-16h-16v16h-48v-8h-16v8h-48v-24h104v-16h-104v-32h-16v360h-12.6875l-37.65625-37.652344c-3.125-3.125-8.1875-3.125-11.3125 0l-37.65625 37.652344h-4.6875v16h480v-16h-6.238281c5.628906-6.144531 7.628906-14.792969 5.269531-22.789062-2.355469-7.992188-8.726562-14.171876-16.792969-16.28125 4.066407-10.027344.925781-21.53125-7.675781-28.097657-8.597656-6.566406-20.527344-6.566406-29.125 0-8.601562 6.566407-11.742188 18.070313-7.675781 28.097657-8.066407 2.109374-14.4375 8.289062-16.792969 16.28125-2.359375 7.996093-.359375 16.644531 5.269531 22.789062h-14.238281v-376h16c4.417969 0 8-3.578125 8-8v-8h56c4.417969 0 8-3.578125 8-8v-32c0-4.417969-3.582031-8-8-8zm-428 240 12 16h-32l12-16zm20 52.691406-11.3125 11.308594h-25.375l-11.3125-11.308594v-20.691406h48zm373.601562-276.691406-21.601562 14.402344v-14.402344zm-101.601562-24h32v32h-32zm-216 25.601562 21.601562 14.398438h-43.203124zm-48 12.800782-21.601562-14.402344h43.203124zm74.398438-14.402344h43.203124l-21.601562 14.402344zm69.601562 1.601562 21.601562 14.398438h-43.203124zm26.398438-1.601562h43.203124l-21.601562 14.402344zm-226.398438 0h5.601562l24 16h-29.601562zm274.398438 16 24-16h5.601562v16zm85.601562 381.601562-14.398438-21.601562 14.398438-21.597656zm0-192-14.398438-21.601562 14.398438-21.597656zm-16 4.800782 14.398438 21.597656-14.398438 21.601562zm0-52.800782v-43.199218l14.398438 21.597656zm0 148.800782 14.398438 21.597656-14.398438 21.601562zm16-4.847656-14.398438-21.554688 14.398438-21.597656zm-14.398438-213.554688 14.398438-21.597656v43.199218zm-1.601562-26.398438v-13.601562h9.054688zm-64 90.398438v80h-48v-80zm-64 0v68.800781l-18.398438-18.183593c-1.492187-1.472657-3.503906-2.304688-5.601562-2.3125h-24v-48.304688zm-64 0v13.335938h-48v-13.335938zm-120 251.3125 20.6875 20.6875h-41.375zm72 20.6875v-242.664062h48v27c0 4.421874 3.582031 8 8 8h28.710938l29.6875 29.355468c1.492187 1.472656 3.503906 2.304688 5.601562 2.308594h56v176zm240-21.597656 14.398438 21.597656h-14.398438zm96 13.597656c-4.417969 0-8-3.578125-8-8 0-4.417969 3.582031-8 8-8s8 3.582031 8 8c0 4.421875-3.582031 8-8 8zm-16-48c4.417969 0 8 3.582031 8 8 0 4.421875-3.582031 8-8 8s-8-3.578125-8-8c0-4.417969 3.582031-8 8-8zm-16 32c4.417969 0 8 3.582031 8 8 0 4.421875-3.582031 8-8 8s-8-3.578125-8-8c0-4.417969 3.582031-8 8-8zm-24-368h-64v-8h40c4.417969 0 8-3.578125 8-8v-40h16zm42.398438-16 21.601562-14.398438v14.398438zm0 0"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div>

            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">EJECUCIÓN Y SUPERVISIÓN DE  OBRAS</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m504.5 49.692h-233.736v-42.192c0-4.142-3.357-7.5-7.5-7.5h-46.793c-4.142 0-7.5 3.358-7.5 7.5v42.192h-91.782c-4.142 0-7.5 3.358-7.5 7.5v64.482c-4.95 2.638-9.641 6.106-13.591 10.098v-22.043c0-13.597-13.527-24.762-33.647-28.469v-16.281c0-4.142-3.358-7.5-7.5-7.5-13.278 0-26.778 5.105-37.039 14.006-11.55 10.02-17.912 23.928-17.912 39.161v31.423c0 9.697 15 9.697 15 0v-31.423c0-16.417 12.217-33.998 32.451-37.529v287.704c-11.77 1.471-23.79 6.179-32.421 14.474-.016-10.213-.03-193.372-.03-193.372 0-9.697-15-9.697-15 0v232.965c0 .421.043.831.11 1.233.737 21.999 21.09 38.439 47.939 38.439 12.999 0 24.629-3.7 33.196-9.797l.004 27.573c.004 25.344 25.351 39.664 48.056 39.664 24.1-.004 48.042-13.577 48.042-39.68l-.017-106.038h213.59l-155.632 132.508c-5.203 4.429-1.971 13.21 4.862 13.21h225.868c4.143 0 7.5-3.358 7.5-7.5v-36.382c0-9.697-15-9.697-15 0v28.882h-197.989l197.989-168.569v98.311c0 9.697 15 9.697 15 0v-60.458h30.982c4.143 0 7.5-3.358 7.5-7.5v-104.684-196.908c0-4.142-3.357-7.5-7.5-7.5zm-7.5 15v181.908h-175.652v-181.908zm-241.236-49.692v191.945h-31.793v-19.167h5.446c9.697 0 9.697-15 0-15h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.653h5.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.652h5.446c9.697 0 9.697-15 0-15h-5.446v-19.167zm-137.304 118.78c3.238-1.532 6.634-2.606 10.187-3.223l.046 287.704c-8.355 1.046-21.861 4.328-32.419 14.479-.017-10.073-.033-17.87-.033-18.082l-.04-246.567c-.002-13.439 8.188-27.655 22.259-34.311zm43.884 316.655c-.253-.145-.508-.288-.767-.43-8.602-4.722-19.833-7.356-31.686-7.44l-.001-9.324c3.594-.495 6.008-.458 6.066-.458 4.696-.314 7.275-2.813 7.737-7.497l-.043-271.201c9.942 2.46 18.648 7.5 18.649 13.079zm-81.246-340.706v247.486 35.684c-8.357-4.799-19.65-7.687-32.451-7.773v-9.326c3.596-.495 6.01-.457 6.066-.456 4.696-.314 7.275-2.813 7.738-7.496v-271.249c11.424 2.735 18.647 8.407 18.647 13.13zm0 308.711c0 11.448-15.135 21.12-33.049 21.12-18.798 0-32.974-10.606-32.974-24.672 0-14.244 5.163-27.735 18.572-34.548v12.61c.534 4.906 3.269 7.395 8.204 7.467 10.422-.981 21.943.185 31.261 5.301 5.377 2.953 8.424 6.703 7.986 12.722zm48.205 78.56c-.003 0-.004 0-.008 0-18.793 0-32.969-10.604-32.971-24.666-.002-14.243 5.158-27.737 18.567-34.552l.002 12.611c.535 4.905 3.27 7.394 8.204 7.465 12.723-1.196 39.861.846 39.251 18.016.002 11.449-15.131 21.124-33.045 21.126zm47.996-329.84c-.002-13.502-13.574-24.733-33.652-28.456l-.003-16.288c-.43-4.571-2.93-7.071-7.501-7.499-3.828.001-7.672.439-11.454 1.257v-51.482h84.282v149.752c0 4.142 3.358 7.5 7.5 7.5h46.793c4.143 0 7.5-3.358 7.5-7.5v-149.752h35.584v189.408 97.183h-129.019zm291.864 138.226c-2.656-1.227-5.781-.799-8.008 1.098l-52.617 44.799h-87.19v-89.683h175.652v89.683h-23.482v-39.088c0-2.924-1.7-5.582-4.355-6.809z"></path>
                        <path d="m357.34 214.917h69.105c1.974 0 3.918-.808 5.311-2.205l34.552-34.525c1.408-1.407 2.199-3.316 2.199-5.306l-.01-69.007c0-4.058-3.443-7.499-7.501-7.499l-69.114.008c-1.987 0-3.895.79-5.3 2.195l-34.538 34.511c-1.394 1.39-2.205 3.344-2.205 5.311v69.017c.001 4.143 3.359 7.5 7.501 7.5zm7.5-69.017h54.105v54.017h-54.105zm69.106 43.421v-47.812l19.556-19.54.007 47.806zm-38.956-77.938 47.89-.006-19.539 19.523h-47.885z"></path>
                        <path d="m392.813 314.087h-24.851c-9.697 0-9.697 15 0 15h24.851c9.697 0 9.697-15 0-15z"></path>
                        <path d="m431.639 284.242h-63.677c-9.697 0-9.697 15 0 15h63.677c9.697 0 9.697-15 0-15z"></path>
                        <path d="m424.727 385.308-90.555 77.1c-5.201 4.429-1.97 13.21 4.862 13.21h90.555c4.143 0 7.5-3.358 7.5-7.5v-77.1c0-5.702-7.202-10.105-12.362-5.71zm-2.638 75.31h-62.677l62.677-53.364z"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div>
 
        </div> 
        
        
        <div class="flex justify-between">         
            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">TRÁMITES ANTE ENTIDADES MUNICIPALES, ESTATALES Y FEDERALES</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m504.5 49.692h-233.736v-42.192c0-4.142-3.357-7.5-7.5-7.5h-46.793c-4.142 0-7.5 3.358-7.5 7.5v42.192h-91.782c-4.142 0-7.5 3.358-7.5 7.5v64.482c-4.95 2.638-9.641 6.106-13.591 10.098v-22.043c0-13.597-13.527-24.762-33.647-28.469v-16.281c0-4.142-3.358-7.5-7.5-7.5-13.278 0-26.778 5.105-37.039 14.006-11.55 10.02-17.912 23.928-17.912 39.161v31.423c0 9.697 15 9.697 15 0v-31.423c0-16.417 12.217-33.998 32.451-37.529v287.704c-11.77 1.471-23.79 6.179-32.421 14.474-.016-10.213-.03-193.372-.03-193.372 0-9.697-15-9.697-15 0v232.965c0 .421.043.831.11 1.233.737 21.999 21.09 38.439 47.939 38.439 12.999 0 24.629-3.7 33.196-9.797l.004 27.573c.004 25.344 25.351 39.664 48.056 39.664 24.1-.004 48.042-13.577 48.042-39.68l-.017-106.038h213.59l-155.632 132.508c-5.203 4.429-1.971 13.21 4.862 13.21h225.868c4.143 0 7.5-3.358 7.5-7.5v-36.382c0-9.697-15-9.697-15 0v28.882h-197.989l197.989-168.569v98.311c0 9.697 15 9.697 15 0v-60.458h30.982c4.143 0 7.5-3.358 7.5-7.5v-104.684-196.908c0-4.142-3.357-7.5-7.5-7.5zm-7.5 15v181.908h-175.652v-181.908zm-241.236-49.692v191.945h-31.793v-19.167h5.446c9.697 0 9.697-15 0-15h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.653h5.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.652h5.446c9.697 0 9.697-15 0-15h-5.446v-19.167zm-137.304 118.78c3.238-1.532 6.634-2.606 10.187-3.223l.046 287.704c-8.355 1.046-21.861 4.328-32.419 14.479-.017-10.073-.033-17.87-.033-18.082l-.04-246.567c-.002-13.439 8.188-27.655 22.259-34.311zm43.884 316.655c-.253-.145-.508-.288-.767-.43-8.602-4.722-19.833-7.356-31.686-7.44l-.001-9.324c3.594-.495 6.008-.458 6.066-.458 4.696-.314 7.275-2.813 7.737-7.497l-.043-271.201c9.942 2.46 18.648 7.5 18.649 13.079zm-81.246-340.706v247.486 35.684c-8.357-4.799-19.65-7.687-32.451-7.773v-9.326c3.596-.495 6.01-.457 6.066-.456 4.696-.314 7.275-2.813 7.738-7.496v-271.249c11.424 2.735 18.647 8.407 18.647 13.13zm0 308.711c0 11.448-15.135 21.12-33.049 21.12-18.798 0-32.974-10.606-32.974-24.672 0-14.244 5.163-27.735 18.572-34.548v12.61c.534 4.906 3.269 7.395 8.204 7.467 10.422-.981 21.943.185 31.261 5.301 5.377 2.953 8.424 6.703 7.986 12.722zm48.205 78.56c-.003 0-.004 0-.008 0-18.793 0-32.969-10.604-32.971-24.666-.002-14.243 5.158-27.737 18.567-34.552l.002 12.611c.535 4.905 3.27 7.394 8.204 7.465 12.723-1.196 39.861.846 39.251 18.016.002 11.449-15.131 21.124-33.045 21.126zm47.996-329.84c-.002-13.502-13.574-24.733-33.652-28.456l-.003-16.288c-.43-4.571-2.93-7.071-7.501-7.499-3.828.001-7.672.439-11.454 1.257v-51.482h84.282v149.752c0 4.142 3.358 7.5 7.5 7.5h46.793c4.143 0 7.5-3.358 7.5-7.5v-149.752h35.584v189.408 97.183h-129.019zm291.864 138.226c-2.656-1.227-5.781-.799-8.008 1.098l-52.617 44.799h-87.19v-89.683h175.652v89.683h-23.482v-39.088c0-2.924-1.7-5.582-4.355-6.809z"></path>
                        <path d="m357.34 214.917h69.105c1.974 0 3.918-.808 5.311-2.205l34.552-34.525c1.408-1.407 2.199-3.316 2.199-5.306l-.01-69.007c0-4.058-3.443-7.499-7.501-7.499l-69.114.008c-1.987 0-3.895.79-5.3 2.195l-34.538 34.511c-1.394 1.39-2.205 3.344-2.205 5.311v69.017c.001 4.143 3.359 7.5 7.501 7.5zm7.5-69.017h54.105v54.017h-54.105zm69.106 43.421v-47.812l19.556-19.54.007 47.806zm-38.956-77.938 47.89-.006-19.539 19.523h-47.885z"></path>
                        <path d="m392.813 314.087h-24.851c-9.697 0-9.697 15 0 15h24.851c9.697 0 9.697-15 0-15z"></path>
                        <path d="m431.639 284.242h-63.677c-9.697 0-9.697 15 0 15h63.677c9.697 0 9.697-15 0-15z"></path>
                        <path d="m424.727 385.308-90.555 77.1c-5.201 4.429-1.97 13.21 4.862 13.21h90.555c4.143 0 7.5-3.358 7.5-7.5v-77.1c0-5.702-7.202-10.105-12.362-5.71zm-2.638 75.31h-62.677l62.677-53.364z"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div> 
            
            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">UNIDAD DE VERIFICACIÓN DE INSTALACIONES ELÉCTRICA</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m136 272h16v16h-16zm0 0"></path><path d="m168 272h16v16h-16zm0 0"></path><path d="m200 272h16v16h-16zm0 0"></path><path d="m136 304h16v16h-16zm0 0"></path><path d="m168 304h16v16h-16zm0 0"></path><path d="m200 304h16v16h-16zm0 0"></path><path d="m232 304h16v16h-16zm0 0"></path><path d="m264 304h16v16h-16zm0 0"></path><path d="m136 336h16v16h-16zm0 0"></path><path d="m168 336h16v16h-16zm0 0"></path><path d="m200 336h16v16h-16zm0 0"></path><path d="m232 336h16v16h-16zm0 0"></path><path d="m264 336h16v16h-16zm0 0"></path><path d="m136 368h16v16h-16zm0 0"></path><path d="m168 368h16v16h-16zm0 0"></path><path d="m200 368h16v16h-16zm0 0"></path><path d="m232 368h16v16h-16zm0 0"></path><path d="m264 368h16v16h-16zm0 0"></path><path d="m136 400h16v16h-16zm0 0"></path><path d="m168 400h16v16h-16zm0 0"></path><path d="m200 400h16v16h-16zm0 0"></path><path d="m232 400h16v16h-16zm0 0"></path><path d="m264 400h16v16h-16zm0 0"></path><path d="m136 432h16v16h-16zm0 0"></path><path d="m168 432h16v16h-16zm0 0"></path><path d="m200 432h16v16h-16zm0 0"></path><path d="m232 432h16v16h-16zm0 0"></path><path d="m264 432h16v16h-16zm0 0"></path><path d="m472 24h-56v-16c0-4.417969-3.582031-8-8-8h-80c-4.417969 0-8 3.582031-8 8v16h-312c-4.417969 0-8 3.582031-8 8v32c0 4.421875 3.582031 8 8 8h24v152c0 4.421875 3.582031 8 8 8s8 3.582031 8 8c0 4.421875-3.582031 8-8 8s-8-3.578125-8-8h-16c.023438 5.855469 2.199219 11.5 6.121094 15.851562l-20.519532 27.351563.101563.078125c-1.070313 1.34375-1.6679688 3.003906-1.703125 4.71875v32c0 2.125.84375 4.15625 2.34375 5.65625l16 16c1.5 1.5 3.535156 2.34375 5.65625 2.34375h32c2.121094 0 4.15625-.84375 5.65625-2.34375l16-16c1.5-1.5 2.34375-3.53125 2.34375-5.65625v-32c-.035156-1.714844-.632812-3.375-1.703125-4.71875l.101563-.078125-20.519532-27.351563c5.34375-5.9375 7.359375-14.15625 5.371094-21.890624-1.984375-7.734376-7.710938-13.960938-15.25-16.589844v-145.371094h272v8c0 4.421875 3.582031 8 8 8h16v376h-32v-320h-16v32h-48v-16h-16v16h-48v-8h-16v8h-48v-24h104v-16h-104v-32h-16v360h-12.6875l-37.65625-37.652344c-3.125-3.125-8.1875-3.125-11.3125 0l-37.65625 37.652344h-4.6875v16h480v-16h-6.238281c5.628906-6.144531 7.628906-14.792969 5.269531-22.789062-2.355469-7.992188-8.726562-14.171876-16.792969-16.28125 4.066407-10.027344.925781-21.53125-7.675781-28.097657-8.597656-6.566406-20.527344-6.566406-29.125 0-8.601562 6.566407-11.742188 18.070313-7.675781 28.097657-8.066407 2.109374-14.4375 8.289062-16.792969 16.28125-2.359375 7.996093-.359375 16.644531 5.269531 22.789062h-14.238281v-376h16c4.417969 0 8-3.578125 8-8v-8h56c4.417969 0 8-3.578125 8-8v-32c0-4.417969-3.582031-8-8-8zm-428 240 12 16h-32l12-16zm20 52.691406-11.3125 11.308594h-25.375l-11.3125-11.308594v-20.691406h48zm373.601562-276.691406-21.601562 14.402344v-14.402344zm-101.601562-24h32v32h-32zm-216 25.601562 21.601562 14.398438h-43.203124zm-48 12.800782-21.601562-14.402344h43.203124zm74.398438-14.402344h43.203124l-21.601562 14.402344zm69.601562 1.601562 21.601562 14.398438h-43.203124zm26.398438-1.601562h43.203124l-21.601562 14.402344zm-226.398438 0h5.601562l24 16h-29.601562zm274.398438 16 24-16h5.601562v16zm85.601562 381.601562-14.398438-21.601562 14.398438-21.597656zm0-192-14.398438-21.601562 14.398438-21.597656zm-16 4.800782 14.398438 21.597656-14.398438 21.601562zm0-52.800782v-43.199218l14.398438 21.597656zm0 148.800782 14.398438 21.597656-14.398438 21.601562zm16-4.847656-14.398438-21.554688 14.398438-21.597656zm-14.398438-213.554688 14.398438-21.597656v43.199218zm-1.601562-26.398438v-13.601562h9.054688zm-64 90.398438v80h-48v-80zm-64 0v68.800781l-18.398438-18.183593c-1.492187-1.472657-3.503906-2.304688-5.601562-2.3125h-24v-48.304688zm-64 0v13.335938h-48v-13.335938zm-120 251.3125 20.6875 20.6875h-41.375zm72 20.6875v-242.664062h48v27c0 4.421874 3.582031 8 8 8h28.710938l29.6875 29.355468c1.492187 1.472656 3.503906 2.304688 5.601562 2.308594h56v176zm240-21.597656 14.398438 21.597656h-14.398438zm96 13.597656c-4.417969 0-8-3.578125-8-8 0-4.417969 3.582031-8 8-8s8 3.582031 8 8c0 4.421875-3.582031 8-8 8zm-16-48c4.417969 0 8 3.582031 8 8 0 4.421875-3.582031 8-8 8s-8-3.578125-8-8c0-4.417969 3.582031-8 8-8zm-16 32c4.417969 0 8 3.582031 8 8 0 4.421875-3.582031 8-8 8s-8-3.578125-8-8c0-4.417969 3.582031-8 8-8zm-24-368h-64v-8h40c4.417969 0 8-3.578125 8-8v-40h16zm42.398438-16 21.601562-14.398438v14.398438zm0 0"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div>

            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">SERVICIO DE ASESORIA</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m504.5 49.692h-233.736v-42.192c0-4.142-3.357-7.5-7.5-7.5h-46.793c-4.142 0-7.5 3.358-7.5 7.5v42.192h-91.782c-4.142 0-7.5 3.358-7.5 7.5v64.482c-4.95 2.638-9.641 6.106-13.591 10.098v-22.043c0-13.597-13.527-24.762-33.647-28.469v-16.281c0-4.142-3.358-7.5-7.5-7.5-13.278 0-26.778 5.105-37.039 14.006-11.55 10.02-17.912 23.928-17.912 39.161v31.423c0 9.697 15 9.697 15 0v-31.423c0-16.417 12.217-33.998 32.451-37.529v287.704c-11.77 1.471-23.79 6.179-32.421 14.474-.016-10.213-.03-193.372-.03-193.372 0-9.697-15-9.697-15 0v232.965c0 .421.043.831.11 1.233.737 21.999 21.09 38.439 47.939 38.439 12.999 0 24.629-3.7 33.196-9.797l.004 27.573c.004 25.344 25.351 39.664 48.056 39.664 24.1-.004 48.042-13.577 48.042-39.68l-.017-106.038h213.59l-155.632 132.508c-5.203 4.429-1.971 13.21 4.862 13.21h225.868c4.143 0 7.5-3.358 7.5-7.5v-36.382c0-9.697-15-9.697-15 0v28.882h-197.989l197.989-168.569v98.311c0 9.697 15 9.697 15 0v-60.458h30.982c4.143 0 7.5-3.358 7.5-7.5v-104.684-196.908c0-4.142-3.357-7.5-7.5-7.5zm-7.5 15v181.908h-175.652v-181.908zm-241.236-49.692v191.945h-31.793v-19.167h5.446c9.697 0 9.697-15 0-15h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.653h5.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.652h5.446c9.697 0 9.697-15 0-15h-5.446v-19.167zm-137.304 118.78c3.238-1.532 6.634-2.606 10.187-3.223l.046 287.704c-8.355 1.046-21.861 4.328-32.419 14.479-.017-10.073-.033-17.87-.033-18.082l-.04-246.567c-.002-13.439 8.188-27.655 22.259-34.311zm43.884 316.655c-.253-.145-.508-.288-.767-.43-8.602-4.722-19.833-7.356-31.686-7.44l-.001-9.324c3.594-.495 6.008-.458 6.066-.458 4.696-.314 7.275-2.813 7.737-7.497l-.043-271.201c9.942 2.46 18.648 7.5 18.649 13.079zm-81.246-340.706v247.486 35.684c-8.357-4.799-19.65-7.687-32.451-7.773v-9.326c3.596-.495 6.01-.457 6.066-.456 4.696-.314 7.275-2.813 7.738-7.496v-271.249c11.424 2.735 18.647 8.407 18.647 13.13zm0 308.711c0 11.448-15.135 21.12-33.049 21.12-18.798 0-32.974-10.606-32.974-24.672 0-14.244 5.163-27.735 18.572-34.548v12.61c.534 4.906 3.269 7.395 8.204 7.467 10.422-.981 21.943.185 31.261 5.301 5.377 2.953 8.424 6.703 7.986 12.722zm48.205 78.56c-.003 0-.004 0-.008 0-18.793 0-32.969-10.604-32.971-24.666-.002-14.243 5.158-27.737 18.567-34.552l.002 12.611c.535 4.905 3.27 7.394 8.204 7.465 12.723-1.196 39.861.846 39.251 18.016.002 11.449-15.131 21.124-33.045 21.126zm47.996-329.84c-.002-13.502-13.574-24.733-33.652-28.456l-.003-16.288c-.43-4.571-2.93-7.071-7.501-7.499-3.828.001-7.672.439-11.454 1.257v-51.482h84.282v149.752c0 4.142 3.358 7.5 7.5 7.5h46.793c4.143 0 7.5-3.358 7.5-7.5v-149.752h35.584v189.408 97.183h-129.019zm291.864 138.226c-2.656-1.227-5.781-.799-8.008 1.098l-52.617 44.799h-87.19v-89.683h175.652v89.683h-23.482v-39.088c0-2.924-1.7-5.582-4.355-6.809z"></path>
                        <path d="m357.34 214.917h69.105c1.974 0 3.918-.808 5.311-2.205l34.552-34.525c1.408-1.407 2.199-3.316 2.199-5.306l-.01-69.007c0-4.058-3.443-7.499-7.501-7.499l-69.114.008c-1.987 0-3.895.79-5.3 2.195l-34.538 34.511c-1.394 1.39-2.205 3.344-2.205 5.311v69.017c.001 4.143 3.359 7.5 7.501 7.5zm7.5-69.017h54.105v54.017h-54.105zm69.106 43.421v-47.812l19.556-19.54.007 47.806zm-38.956-77.938 47.89-.006-19.539 19.523h-47.885z"></path>
                        <path d="m392.813 314.087h-24.851c-9.697 0-9.697 15 0 15h24.851c9.697 0 9.697-15 0-15z"></path>
                        <path d="m431.639 284.242h-63.677c-9.697 0-9.697 15 0 15h63.677c9.697 0 9.697-15 0-15z"></path>
                        <path d="m424.727 385.308-90.555 77.1c-5.201 4.429-1.97 13.21 4.862 13.21h90.555c4.143 0 7.5-3.358 7.5-7.5v-77.1c0-5.702-7.202-10.105-12.362-5.71zm-2.638 75.31h-62.677l62.677-53.364z"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div>
 
        </div>

        <div class="flex justify-center">         
            <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
                <h5 class="font-bold group-hover:text-white mb-2 text-blue-600 text-xl">VENTA E INSTALACIÓN DE MATERIAL ELECTRICO</h5> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="group-hover:text-white h-10 inline-block mb-4 text-yellow-600 w-10" fill="currentColor">
                    <g>
                        <path d="m504.5 49.692h-233.736v-42.192c0-4.142-3.357-7.5-7.5-7.5h-46.793c-4.142 0-7.5 3.358-7.5 7.5v42.192h-91.782c-4.142 0-7.5 3.358-7.5 7.5v64.482c-4.95 2.638-9.641 6.106-13.591 10.098v-22.043c0-13.597-13.527-24.762-33.647-28.469v-16.281c0-4.142-3.358-7.5-7.5-7.5-13.278 0-26.778 5.105-37.039 14.006-11.55 10.02-17.912 23.928-17.912 39.161v31.423c0 9.697 15 9.697 15 0v-31.423c0-16.417 12.217-33.998 32.451-37.529v287.704c-11.77 1.471-23.79 6.179-32.421 14.474-.016-10.213-.03-193.372-.03-193.372 0-9.697-15-9.697-15 0v232.965c0 .421.043.831.11 1.233.737 21.999 21.09 38.439 47.939 38.439 12.999 0 24.629-3.7 33.196-9.797l.004 27.573c.004 25.344 25.351 39.664 48.056 39.664 24.1-.004 48.042-13.577 48.042-39.68l-.017-106.038h213.59l-155.632 132.508c-5.203 4.429-1.971 13.21 4.862 13.21h225.868c4.143 0 7.5-3.358 7.5-7.5v-36.382c0-9.697-15-9.697-15 0v28.882h-197.989l197.989-168.569v98.311c0 9.697 15 9.697 15 0v-60.458h30.982c4.143 0 7.5-3.358 7.5-7.5v-104.684-196.908c0-4.142-3.357-7.5-7.5-7.5zm-7.5 15v181.908h-175.652v-181.908zm-241.236-49.692v191.945h-31.793v-19.167h5.446c9.697 0 9.697-15 0-15h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.653h5.446c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-5.446v-19.653h12.446c9.697 0 9.697-15 0-15h-12.446v-19.652h5.446c9.697 0 9.697-15 0-15h-5.446v-19.167zm-137.304 118.78c3.238-1.532 6.634-2.606 10.187-3.223l.046 287.704c-8.355 1.046-21.861 4.328-32.419 14.479-.017-10.073-.033-17.87-.033-18.082l-.04-246.567c-.002-13.439 8.188-27.655 22.259-34.311zm43.884 316.655c-.253-.145-.508-.288-.767-.43-8.602-4.722-19.833-7.356-31.686-7.44l-.001-9.324c3.594-.495 6.008-.458 6.066-.458 4.696-.314 7.275-2.813 7.737-7.497l-.043-271.201c9.942 2.46 18.648 7.5 18.649 13.079zm-81.246-340.706v247.486 35.684c-8.357-4.799-19.65-7.687-32.451-7.773v-9.326c3.596-.495 6.01-.457 6.066-.456 4.696-.314 7.275-2.813 7.738-7.496v-271.249c11.424 2.735 18.647 8.407 18.647 13.13zm0 308.711c0 11.448-15.135 21.12-33.049 21.12-18.798 0-32.974-10.606-32.974-24.672 0-14.244 5.163-27.735 18.572-34.548v12.61c.534 4.906 3.269 7.395 8.204 7.467 10.422-.981 21.943.185 31.261 5.301 5.377 2.953 8.424 6.703 7.986 12.722zm48.205 78.56c-.003 0-.004 0-.008 0-18.793 0-32.969-10.604-32.971-24.666-.002-14.243 5.158-27.737 18.567-34.552l.002 12.611c.535 4.905 3.27 7.394 8.204 7.465 12.723-1.196 39.861.846 39.251 18.016.002 11.449-15.131 21.124-33.045 21.126zm47.996-329.84c-.002-13.502-13.574-24.733-33.652-28.456l-.003-16.288c-.43-4.571-2.93-7.071-7.501-7.499-3.828.001-7.672.439-11.454 1.257v-51.482h84.282v149.752c0 4.142 3.358 7.5 7.5 7.5h46.793c4.143 0 7.5-3.358 7.5-7.5v-149.752h35.584v189.408 97.183h-129.019zm291.864 138.226c-2.656-1.227-5.781-.799-8.008 1.098l-52.617 44.799h-87.19v-89.683h175.652v89.683h-23.482v-39.088c0-2.924-1.7-5.582-4.355-6.809z"></path>
                        <path d="m357.34 214.917h69.105c1.974 0 3.918-.808 5.311-2.205l34.552-34.525c1.408-1.407 2.199-3.316 2.199-5.306l-.01-69.007c0-4.058-3.443-7.499-7.501-7.499l-69.114.008c-1.987 0-3.895.79-5.3 2.195l-34.538 34.511c-1.394 1.39-2.205 3.344-2.205 5.311v69.017c.001 4.143 3.359 7.5 7.501 7.5zm7.5-69.017h54.105v54.017h-54.105zm69.106 43.421v-47.812l19.556-19.54.007 47.806zm-38.956-77.938 47.89-.006-19.539 19.523h-47.885z"></path>
                        <path d="m392.813 314.087h-24.851c-9.697 0-9.697 15 0 15h24.851c9.697 0 9.697-15 0-15z"></path>
                        <path d="m431.639 284.242h-63.677c-9.697 0-9.697 15 0 15h63.677c9.697 0 9.697-15 0-15z"></path>
                        <path d="m424.727 385.308-90.555 77.1c-5.201 4.429-1.97 13.21 4.862 13.21h90.555c4.143 0 7.5-3.358 7.5-7.5v-77.1c0-5.702-7.202-10.105-12.362-5.71zm-2.638 75.31h-62.677l62.677-53.364z"></path>
                    </g>
                </svg>
                <img src="https://images02.nicepage.io/98d6936e8278dc9a49ff0c56/cddeace33c705c67a9f625f9/IMG_2606.jpg?version=">
            </div>
 
     
    </div>
</section>

@endsection
