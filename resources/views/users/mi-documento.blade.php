<x-approxana-layout>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3">
                <div class="flex flex-col md:flex-row justify-between items-center col-span-2">
                    <div class="p-5 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('Estas en tus ,') !!} <b>Documentos</b> de tu Viaje a<b> Nombre
                                Viaje{{ Auth::user()->viaje }} {{ Auth::user()->nameviaje }}</b>!<br>
                        </div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __(
                                'Sube y descarga todos los documentos importantes relacionados con tu viaje. Asegúrate de tener todo en orden para evitar inconvenientes.',
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="p-0 text-white-rv dark:text-gray-100 pr-16 pt-5">
                    <img src="/images/nurse.png" alt="" class="pb-0 w-64">
                </div>
            </div>
        </div>
    </div>


    <!--- div formulario --->

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- MIS DATOS PERSONALES -->
            <x-texthead>
                {{ __('Documentos del viaje') }}
            </x-texthead>
            <div class="grid grid-cols-1 gap-4 p-6  bg-white border border-gray-200 rounded-lg shadow">
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-center  text-red-rv mb-4 text-2xl font-bold">Indicaciones</p>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/Icons_Vaucher.png" width="150px">
                                Descarga tu archivo
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
                    </div>

                    <div>
                        <p class="text-center  text-red-rv mb-4 text-2xl font-bold">Recomendaciones</p>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/Icons_Recomendaciones.png" width="150px">
                                Descarga tu archivo
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
                    </div>

                    <hr>
                    <hr>

                    <div>
                        <p class="text-center  text-red-rv mb-4 text-2xl font-bold">¿Que ropa llevar a mi viaje?</p>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/playa.png" width="150px">
                                Descarga tu archivo
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
                    </div>

                    <div>
                        <p class="text-center  text-red-rv mb-4 text-2xl font-bold">Permiso Notarial</p>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/Icons_PermisoNotarial.png" width="150px">
                                Descarga tu archivo
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
                    </div>

                    <hr>
                    <hr>

                    <x-texthead class=" col-span-2 text-center">
                        {{ __('Tarjeta de Asistencia Médica') }}
                    </x-texthead>

                    <div>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/Icons_Vaucher.png" width="180px">
                                Voucher Medico<br>
                                 
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
                    </div>

                    <div>
                        <div class="rounded-lg border-2 border-dashed border-black py-8 flex flex-col justify-center items-center">
                            <img
                                src="/images/Icons_Clinicas.png" width="180px">
                                Lista de Clinicas Cercanas
                        </div>
                        <button type="submit"
                            class="block w-40 mt-6 items-center rounded-md bg-red-rv px-3.5 py-2.5 
                            text-center text-sm font-semibold text-white shadow-sm 
                            hover:bg-red-rv focus-visible:outline 
                            focus-visible:outline-2 focus-visible:outline-offset-2
                             focus-visible:outline--red-rv mx-auto">
                            DESCARGAR
                        </button>
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
                        DESCARGAR TODO
                    </button>
                </div>
                <div class="text-end">
                    <a href="#">Siguiente</a>
                </div>
            </div>


        </div>
    </div>



</x-approxana-layout>
