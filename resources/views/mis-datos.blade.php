<x-approxana-layout>
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv shadow-sm rounded-lg grid grid-cols-4 p-6 gap-4">
                <div class="flex flex-col justify-between items-center col-span-2">
                    <div class="p-4 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('¡Hola ,') !!} <b>{{ Auth::user()->name }} {{ Auth::user()->apellidos }}</b>!<br>
                        </div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            En esta sección, puedes actualizar tu perfil personal. Esto nos permitirá ofrecerte un
                            servicio más personalizado y eficiente.
                        </p>

                    </div>
                </div>
                <div class=" flex flex-col items-center">
                    <div class="w-40 rounded-lg overflow-hidden border-2">
                        <img src="/images/avatar-user.jpg" alt="#">
                    </div>
                    <div>
                        <button type="submit"
                            class="border-1 bg-slate-700 text-white rounded-lg mt-2 w-40 h-8 text-sm hover:bg-white hover:border-white hover:text-red-rv font-bold">CAMBIAR
                            FOTO</button>
                    </div>
                </div>
                <div class="flex flex-col align-middle  justify-center">
                    <div class="flex flex-row text-white pb-3">
                        <p class="font-black">Nombre:</p>
                        <p class="font-thin"> {{ Auth::user()->name }} {{ Auth::user()->apellidos }} </p>
                    </div>
                    <div class="flex flex-row text-white pb-3">
                        <p class="font-black">Correo:</p>
                        <p> {{ Auth::user()->email }}</p>
                    </div>
                    <div class="flex flex-row  text-white pb-3">
                        <p class="font-black">Celular:</p>
                        <p>{{ Auth::user()->telefono }}</p>
                    </div>
                    <div class="flex flex-row  text-white pb-3">
                        <p class="font-black">Grupo:</p>
                        <p> Grupo 01</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--- div formulario --->

    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="#" method="POST">

                <!-- MIS DATOS PERSONALES -->

                <x-texthead>
                    {{ __('Mis Datos Personales') }}
                </x-texthead>
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3 p-6 py-8 bg-white border
                 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <label for="first-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Nombres</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Apellidos</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Género</label>
                        <div class="mt-2.5">
                            <select id="countries"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                                <option selected>Seleccionar opción</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Documento</label>
                        <div class="mt-2.5">
                            <select id="countries"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                                <option selected>Seleccionar opción</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">N°
                            Documento</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Fecha de
                            Nacimiento</label>
                        <div class="relative max-w-sm mt-2.5">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-rv focus:border-red-rv block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-rv dark:focus:border-red-rv"
                                placeholder="Selecciona fecha">
                        </div>
                    </div>
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Edad</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Dirección</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Correo</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Celuar
                            Pasajero</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">País de
                            Origen</label>
                        <div class="mt-2.5">
                            <select id="countries"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                                <option selected>Seleccionar opción</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- CONTACTO DE EMERGENCIA -->
                <x-texthead>
                    {{ __('Contacto de Emergencia') }}
                </x-texthead>
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3 p-6 py-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <label for="first-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Nombres</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Apellidos</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Celular</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <!-- SOBRE MÍ -->
                <x-texthead>
                    {{ __('Sobre Mí (opcional)') }}
                </x-texthead>
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3 p-6 py-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <label for="first-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Hobbies</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Deporte</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Plato Favorito</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="first-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Color</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Actitud Relacional</label>
                        <div class="mt-2.5">
                            <select id="countries"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                                <option selected>Seleccionar opción</option>
                                <option value="Confianza">Confianza</option>
                                <option value="Timidez">Timidez</option>
                                <option value="Facilidad de Trato">Facilidad de Trato</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Especifiar Detalles</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" disabled placeholder="Indica tu otra actitud Relacional" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Otras Conductas</label>
                        <div class="mt-2.5">
                            <select id="countries"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-rv sm:text-sm sm:leading-6">
                                <option selected>Seleccionar opción</option>
                                <option value="Juega Solo">Juega Solo</option>
                                <option value="Juega con Otras Personas">Juega con Otras Personas</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Especificar Detalles</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" disabled placeholder="Especifica tu conducta relacional" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm 
                                ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 
                                focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900">Información Adicional</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <!-- RESPONSABLE GRUPO -->
                <x-texthead>
                    {{ __('Responsable del Grupo') }}
                </x-texthead>
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 p-6 py-8
                 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nombre del
                            Responsable</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" disabled value="Nombre Panchita" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                                text-black shadow-sm ring-1 ring-inset ring-gray-300
                                 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                  focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Número de
                            Contacto</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" disabled value="Numero de Responsable" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                                text-black shadow-sm ring-1 ring-inset ring-gray-300
                                 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                  focus:ring-red-rv sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>


                <!-- CORREO PARA NOTIFICACIONES -->
                <x-texthead>
                    {{ __('Correo para Notificaciones') }}
                </x-texthead>
                <div class="grid grid-cols-1 gap-x-8 sm:grid-cols-2
                     bg-white border border-gray-200 rounded-lg
                      shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <div class="p-6">
                        <label>Por favor, ingrese su correo electrónico para recibir notificaciones  </label>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900 mt-4">Correo de
                            Notificaciones</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="bg-slate-900 p-6 rounded-lg ">
                        <div class="flex flex-row font-bold text-white-rv gap-x-3">
                            <label class="text-xl">
                                IMPORTANTE                                 
                            </label>
                            <label>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                    <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                  </svg> 
                            </label>
                        </div>
                        <div class="mt-2.5">
                            <label class="text-white-rv font-thin">
                                Al registrar su correo electrónico, recibirá notificaciones en tiempo real 
                                sobre cada etapa del viaje, incluyendo salidas, llegadas, actividades programadas,
                                 cualquier cambio en el itinerario, comprobante de pago, estado de cuenta y otros.
                            </label>
                        </div>
                    </div>
                </div>

                <!-- BOTONES GUARDAR -->

                <div
                    class="my-10 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</x-approxana-layout>
