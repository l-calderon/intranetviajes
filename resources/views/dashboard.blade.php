<x-approxana-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="p-6 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __("¡Bienvenido a <i>Viajes Roxana</i>,") !!} <b>{{ Auth::user()->name }}</b>.<br></div>
                        
                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __("En esta página podrás acceder a toda la información de tus viajes y datos. Mantener esta información actualizada es clave para garantizar una experiencia de viaje segura y adaptada a tus necesidades.") !!}
                        </p>
                        
                    </div>
                    <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                        <img src="/images/rox.png" alt="" class="pb-0 w-64">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class='flex justify-center min-h-screen'>
            <ul class="mx-auto grid max-w-7xl w-full grid-cols-4 gap-x-5 px-8">
              <li class="pb-2">
                <input class="peer sr-only" type="radio" value="yes" name="answer" id="yes" checked />
                <label class="flex items-center px-16 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white border-solid border-2 shadow-lg border-t-red-rv" for="yes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg>&nbsp;
                    {{ __('MI PERFIL') }}
                </label>
            
                <div class="absolute bg-white shadow-lg left-20 p-6 border mt-8 border-white-rv rounded-lg  mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1 max-w-6xl md:grid-cols-2 lg:grid-cols-3">
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border-2 border-red-rv">
                          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                            <h3 class="antialiased tracking-normal font-sans text-3xl text-red-rv italic justify-center font-bold leading-snug text-blue-gray-900 flex gap-1 mt-4">Mis Datos <span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h3>
                          </div>
                          <div class="p-6 border-t border-blue-gray-50 self-center">
                            <img src="/images/data.png" alt="" class="pb-0 w-40">
                            
                            <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border bg-red-rv border-red-rv text-white-rv hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Ver Mas</button>
                          </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border-2 border-red-rv">
                          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                            
                            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex gap-1 mt-4">Ficha de Salud<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h3>
                          </div>
                          <div class="p-6 border-t border-blue-gray-50 self-center">
                            <img src="/images/nurse.png" alt="" class="pb-0 w-40">
                            
                            <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border bg-red-rv border-red-rv text-white-rv hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Ver Mas</button>
                          </div>
                        </div>
                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border-2 border-red-rv">
                          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                            
                            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex gap-1 mt-4">Ficha Nutricional<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h3>
                          </div>
                          <div class="p-6 border-t border-blue-gray-50 self-center">
                            <img src="/images/health.png" alt="" class="pb-0 w-40">
                            
                            <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border bg-red-rv border-red-rv text-white-rv hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Ver Mas</button>
                          </div>
                        </div>
                      </div>
                </div>
              </li>
            
              <li class="">
                <input class="peer sr-only" type="radio" value="no" name="answer" id="no" />
                <label class="flex items-center px-16 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white border-solid border-2 shadow-lg border-t-red-rv" for="no">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" /></svg>&nbsp;
                    {{ __('MIS VIAJES') }}
                </label>
            
                    <div class="absolute bg-white shadow-lg left-20 p-6 border mt-8 border-indigo-300 rounded-lg  mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1 max-w-6xl">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                </div>
              </li>
            
              <li class="">
                <input class="peer sr-only" type="radio" value="yesno" name="answer" id="yesno" />
                <label class="flex items-center px-16 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white border-solid border-2 shadow-lg border-t-red-rv" for="yesno">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" /></svg>&nbsp;
                    {{ __('MIS PAGOS') }}
                </label>
            
                    <div class="absolute bg-white shadow-lg left-20 p-6 border mt-8 border-indigo-300 rounded-lg  mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1 max-w-6xl">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                </div>
              </li>

              <li class="">
                <input class="peer sr-only" type="radio" value="yesnon" name="answer" id="yesnon" />
                <label class="flex items-center px-16 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white border-solid border-2 shadow-lg border-t-red-rv" for="yesnon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" /></svg>&nbsp;
                    {{ __('CONTACTO') }}
                </label>
            
                    <div class="absolute bg-white shadow-lg left-20 p-6 border mt-8 border-indigo-300 rounded-lg  mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1 max-w-6xl">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum! Sequi consequatur error nulla quaerat rem fugit provident tempore nihil a aspernatur ad laboriosam, dolor nisi qui? Esse, mollitia? Nostrum?
                </div>
              </li>
            </ul>
        </div>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".tab");
    const firstTab = tabs[0];

    // Ensure the first tab is active and its content is visible
    firstTab.querySelector("a").classList.add("text-white", "bg-red-rv", "active");
    firstTab.querySelector(".content").classList.remove("hidden");

    tabs.forEach(tab => {
        tab.addEventListener("click", function(event) {
            event.preventDefault();

            // Remove active class from all tabs
            tabs.forEach(t => {
                t.querySelector("a").classList.remove("text-white", "bg-red-rv", "active");
                t.querySelector(".content").classList.add("hidden");
            });

            // Add active class to the clicked tab
            tab.querySelector("a").classList.add("text-white", "bg-red-rv", "active");
            tab.querySelector(".content").classList.remove("hidden");
        });
    });
});
</script>
</x-approxana-layout>
