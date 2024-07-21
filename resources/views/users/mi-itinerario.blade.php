<x-approxana-layout>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3">
                <div class="flex flex-col md:flex-row justify-between items-center col-span-2">
                    <div class="p-5 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('Estas en tu ,') !!} <b> Itinerario</b> de tu Viaje a<b> Nombre Viaje{{ Auth::user()->viaje }} {{ Auth::user()->nameviaje }}</b>!<br>
                        </div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __(
                                'Aquí puedes descargar tu itinerario de viaje actualizado. Asegúrate de revisarlo antes de partir para estar al tanto de todas las actividades programadas.',
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                    <img src="/images/health.png" alt="" class="pb-0 w-64">
                </div>
            </div>
        </div>
    </div>


    <!--- div formulario --->

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="#" method="POST">

                <!-- MIS DATOS PERSONALES -->
                <x-texthead>
                    {{ __('Itinerario') }}
                </x-texthead>
                <div class="grid grid-cols-1 gap-4 p-6  bg-white border border-gray-200 rounded-lg shadow">
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <div class="mt-2.5 border-dashed border-2 border-black py-10 flex justify-center">
                                <a href="#" class="flex flex-col content-center items-center">
                                    <img src="/images/Icons_ItinerarioPDF.png" alt="" width="150px">
                                    Descargar Itinerario Actualizado
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BOTONES GUARDAR -->

                <div class="my-10 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                    <div class="text-start">
                        <a href="#">Volver</a>
                    </div>
                    <div>
                        <button type="submit"
                            class="block w-full rounded-md bg-red-rv px-3.5 py-2.5 
                        text-center text-sm font-semibold text-white shadow-sm 
                        hover:bg-red-rv focus-visible:outline 
                        focus-visible:outline-2 focus-visible:outline-offset-2
                         focus-visible:outline--red-rv">
                            GUARDAR CAMBIOS
                        </button>
                    </div>
                    <div class="text-end">
                        <a href="#">Siguiente</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-approxana-layout>