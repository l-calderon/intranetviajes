<x-approxana-layout>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-rv dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3">
                <div class="flex flex-col md:flex-row justify-between items-center col-span-2">
                    <div class="p-5 text-white-rv dark:text-gray-100 text-lg pl-16">
                        <div class="text-white-rv text-3xl">
                            {!! __('¡Hola ,') !!} <b>{{ Auth::user()->name }} {{ Auth::user()->apellidos }}</b>!<br>
                        </div>

                        <p class="mt-4 text-white-rv-400 text-base font-extraLight">
                            {!! __(
                                'Para brindarte un servicio más personalizado y eficiente, por favor completa la siguiente información médica:',
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
            <form action="#" method="POST">

                <!-- MIS DATOS PERSONALES -->
                <x-texthead>
                    {{ __('Mi Ficha Médica') }}
                </x-texthead>
                <div class="grid grid-cols-1 gap-4 p-6  bg-white border border-gray-200 rounded-lg shadow">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Grupo
                                Sanguíneo</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Tipo O">Tipo O</option>
                                    <option value="Tipo A">Tipo A</option>
                                    <option value="Tipo B">Tipo B</option>
                                    <option value="Tipo AB">Tipo AB</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Factor
                                Rh</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Positivo">+ Positivo</option>
                                    <option value="Negativo">- Negativo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--- PRIMERA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4p-6">
                        <div class="col-span-2 flex items-center">
                            <p>¿Recibes algun tratamiento de salud actual?</p>
                        </div>
                        <div class="w-full flex ">
                            <ul class="grid w-full md:grid-cols-2">
                                <li>
                                    <input type="radio" id="tratamientosi" name="tratamiento" value="tratamientosi"
                                        class="hidden peer" />
                                    <label for="tratamientosi"
                                        class="inline-flex justify-center w-full p-1.5 text-gray-500 bg-white border
                                         border-gray-200 rounded-lg rounded-r-none cursor-pointer dark:hover:text-gray-300
                                          dark:border-gray-700 dark:peer-checked:text-red-rv 
                                          peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold text-center">SI</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tratamientono" name="tratamiento" value="tratamientono"
                                        class="hidden peer" checked>
                                    <label for="tratamientono"
                                        class="inline-flex justify-center w-full p-1.5
                                         text-gray-500 bg-white border border-gray-200
                                          rounded-lg rounded-l-none cursor-pointer dark:hover:text-gray-300
                                           dark:border-gray-700 dark:peer-checked:text-red-rv
                                            peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">NO</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- PREGUNTAS DE PRIMERA PREGUNTA -->

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3" id="qpreuno" style="display:none" >
                        <div>
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Observaciones</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Recibe
                                Tratamiento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nombre
                                del Medicamento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Quien
                                lo
                                Suministra</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="El responsabel">El responsable</option>
                                    <option value="El pasajero">El pasajero</option>
                                    <option value="El doctor">El doctor</option>
                                    <option value="Solicita Ayuda">Solicita Ayuda</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Dosis
                                al
                                Dia</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="1 vez al día">1 vez al día</option>
                                    <option value="2 veces al día">2 veces al día</option>
                                    <option value="3 veces al día">3 veces al día</option>
                                    <option value="4 veces al día">4 veces al día</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--- SEGUNDA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4p-6">
                        <div class="col-span-2 flex items-center">
                            <p>¿Presenta alguna enfermedad Pre-existente?</p>
                        </div>
                        <div class="w-full flex ">
                            <ul class="grid w-full md:grid-cols-2">
                                <li>
                                    <input type="radio" id="enfermedadsi" name="enfermedad" value="enfermedadsi"
                                        class="hidden peer" />
                                    <label for="enfermedadsi"
                                        class="inline-flex justify-center w-full p-1.5 text-gray-500 bg-white border
                                         border-gray-200 rounded-lg rounded-r-none cursor-pointer dark:hover:text-gray-300
                                          dark:border-gray-700 dark:peer-checked:text-red-rv 
                                          peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold text-center">SI</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="enfermedadno" name="enfermedad" value="enfermedadno"
                                        class="hidden peer" checked>
                                    <label for="enfermedadno"
                                        class="inline-flex justify-center w-full p-1.5
                                         text-gray-500 bg-white border border-gray-200
                                          rounded-lg rounded-l-none cursor-pointer dark:hover:text-gray-300
                                           dark:border-gray-700 dark:peer-checked:text-red-rv
                                            peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">NO</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- PREGUNTAS DE SEGUNDA PREGUNTA -->

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3" id="qpredos" style="display:none" >
                        <div>
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Observaciones</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Recibe
                                Tratamiento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nombre
                                del Medicamento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Quien
                                lo Suministra</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="El responsabel">El responsable</option>
                                    <option value="El pasajero">El pasajero</option>
                                    <option value="El doctor">El doctor</option>
                                    <option value="Solicita Ayuda">Solicita Ayuda</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Dosis
                                al Dia</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="1 vez al día">1 vez al día</option>
                                    <option value="2 veces al día">2 veces al día</option>
                                    <option value="3 veces al día">3 veces al día</option>
                                    <option value="4 veces al día">4 veces al día</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--- TERCERA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4p-6">
                        <div class="col-span-2 flex items-center">
                            <p>¿Es usted alergico a algun medicamento?</p>
                        </div>
                        <div class="w-full flex ">
                            <ul class="grid w-full md:grid-cols-2">
                                <li>
                                    <input type="radio" id="medicamentosi" name="medicamento" value="medicamentosi"
                                        class="hidden peer" />
                                    <label for="medicamentosi"
                                        class="inline-flex justify-center w-full p-1.5 text-gray-500 bg-white border
                                         border-gray-200 rounded-lg rounded-r-none cursor-pointer dark:hover:text-gray-300
                                          dark:border-gray-700 dark:peer-checked:text-red-rv 
                                          peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold text-center">SI</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="medicamentono" name="medicamento" value="medicamentono"
                                        class="hidden peer" checked>
                                    <label for="medicamentono"
                                        class="inline-flex justify-center w-full p-1.5
                                         text-gray-500 bg-white border border-gray-200
                                          rounded-lg rounded-l-none cursor-pointer dark:hover:text-gray-300
                                           dark:border-gray-700 dark:peer-checked:text-red-rv
                                            peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">NO</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- PREGUNTAS DE TERCERA PREGUNTA -->

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3" id="qpretres" style="display:none" >
                        <div>
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Observaciones</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Recibe
                                Tratamiento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nombre
                                del Medicamento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Quien
                                lo Suministra</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="El responsabel">El responsable</option>
                                    <option value="El pasajero">El pasajero</option>
                                    <option value="El doctor">El doctor</option>
                                    <option value="Solicita Ayuda">Solicita Ayuda</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Dosis
                                al Dia</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="1 vez al día">1 vez al día</option>
                                    <option value="2 veces al día">2 veces al día</option>
                                    <option value="3 veces al día">3 veces al día</option>
                                    <option value="4 veces al día">4 veces al día</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--- CUARTA PREGUNTA --->

                    <div class="grid grid-cols-3 gap-4p-6">
                        <div class="col-span-2 flex items-center">
                            <p>¿Presenta alguna alergia adicional?</p>
                        </div>
                        <div class="w-full flex ">
                            <ul class="grid w-full md:grid-cols-2">
                                <li>
                                    <input type="radio" id="alergiasi" name="alergia" value="alergiasi"
                                        class="hidden peer" />
                                    <label for="alergiasi"
                                        class="inline-flex justify-center w-full p-1.5 text-gray-500 bg-white border
                                         border-gray-200 rounded-lg rounded-r-none cursor-pointer dark:hover:text-gray-300
                                          dark:border-gray-700 dark:peer-checked:text-red-rv 
                                          peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold text-center">SI</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="alergiano" name="alergia" value="alergiano"
                                        class="hidden peer" checked>
                                    <label for="alergiano"
                                        class="inline-flex justify-center w-full p-1.5
                                         text-gray-500 bg-white border border-gray-200
                                          rounded-lg rounded-l-none cursor-pointer dark:hover:text-gray-300
                                           dark:border-gray-700 dark:peer-checked:text-red-rv
                                            peer-checked:border-red-rv peer-checked:text-white peer-checked:bg-red-rv
                                             hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">NO</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- PREGUNTAS DE CUARTA PREGUNTA -->

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3" id="qprecuatro" style="display:none" >
                        <div>
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Observaciones</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Recibe
                                Tratamiento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nombre
                                del Medicamento</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Quien
                                lo Suministra</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="El responsabel">El responsable</option>
                                    <option value="El pasajero">El pasajero</option>
                                    <option value="El doctor">El doctor</option>
                                    <option value="Solicita Ayuda">Solicita Ayuda</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Dosis
                                al Dia</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="1 vez al día">1 vez al día</option>
                                    <option value="2 veces al día">2 veces al día</option>
                                    <option value="3 veces al día">3 veces al día</option>
                                    <option value="4 veces al día">4 veces al día</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <H2 class="mt-5 font-bold">Inmunizaciones Recibidas</H2>

                    <div
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200
                     rounded-lg">
                        <div class="m-0">
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white sm:flex">
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="vue-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tetano</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="react-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="react-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rubiola</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="angular-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="angular-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hepatitis
                                            B</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="laravel-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="laravel-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sarampión</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="m-0">
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white sm:flex">
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="vue-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Influenza</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="react-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="react-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fiebre
                                            Amarilla</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="angular-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="angular-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tuberculosis</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center ps-3">
                                        <input id="laravel-checkbox-list" type="checkbox" value=""
                                            class="w-4 h-4 text-red-rv bg-gray-100 border-gray-300 rounded focus:ring-red-rv dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="laravel-checkbox-list"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otro</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Vacunas
                                Adicionales</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Vacunas
                                Covid</label>
                            <div class="mt-2.5">
                                <select id="countries"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option selected>Seleccionar opción</option>
                                    <option value="Primera Dosis">Primera Dosis</option>
                                    <option value="Segunda Dosis">Segunda Dosis</option>
                                    <option value="Tercera Dosis">Tercera Dosis</option>
                                    <option value="Cuarta Dosis">Cuarta Dosis</option>
                                    <option value="Quinta Dosis">Quinta Dosis</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Efectos
                                Secundarios</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <H2 class="mt-5 font-bold">Cuentanos mas sobre tu salud: </H2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-1">
                        <div>
                            <label for="last-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Informacion
                                Adicional</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <H2 class="mt-5 font-bold">Tarjetas de seguro de Viaje: </H2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Tarjeta
                                de Seguro de Viaje</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" disabled value="Medix Travel"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                                    text-black shadow-sm ring-1 ring-inset ring-gray-300
                                     placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                      focus:ring-red-rv sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Tarjeta
                                de Seguro Privado</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name"
                                    placeholder="Ejemplo: Rimac plan Familiar" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">
                                Historial Médico (opcional)
                            </label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name"
                                class="block text-sm font-semibold leading-6 text-gray-900">Historial
                                de Salud Emocional (opcional)</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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

            <!-- Tarjeta de Seguro Médico -->

            <x-texthead>
                {{ __('Tratamiento Médico Recibido Durante el Viaje') }}
            </x-texthead>
            <div
                class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-4 p-6 py-8 mb-6
                 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Tu Doctor
                        Viajero</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" disabled value="Nombre del Doctor"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                            text-black shadow-sm ring-1 ring-inset ring-gray-300
                             placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-red-rv sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Tratamiento
                        Recibido</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" disabled value="---"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                            text-black shadow-sm ring-1 ring-inset ring-gray-300
                             placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-red-rv sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Indicaciones
                        Médicas</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" disabled value="---"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 bg-slate-300
                            text-black shadow-sm ring-1 ring-inset ring-gray-300
                             placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-red-rv sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="block w-full rounded-md bg-red-rv px-3.5 py-6 text-center text-sm font-semibold
                         text-white shadow-sm hover:bg-red-rv focus-visible:outline focus-visible:outline-2
                          focus-visible:outline-offset-2 focus-visible:outline-red-rv">DESCARGAR
                        FICHA </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Seleccionamos los radio buttons y el div de preguntas
        const tratamientosi = document.getElementById('tratamientosi');
        const tratamientono = document.getElementById('tratamientono');
        const enfermedadsi = document.getElementById('enfermedadsi');
        const enfermedadno = document.getElementById('enfermedadno');
        const medicamentosi = document.getElementById('medicamentosi');
        const medicamentono = document.getElementById('medicamentono');
        const alergiasi = document.getElementById('alergiasi');
        const alergiano = document.getElementById('alergiano');
        const qpreuno = document.getElementById('qpreuno');
        const qpredos = document.getElementById('qpredos');
        const qpretres = document.getElementById('qpretres');
        const qprecuatro = document.getElementById('qprecuatro');

        // Función para mostrar u ocultar el div de preguntas
        function togglePreguntas1() {
            if (tratamientosi.checked) {
                qpreuno.style.display = 'grid';
            } else if (tratamientono.checked) {
                qpreuno.style.display = 'none';
            }
        }

        function togglePreguntas2() {
            if (enfermedadsi.checked) {
                qpredos.style.display = 'grid';
            } else if (enfermedadno.checked) {
                qpredos.style.display = 'none';
            }
        }

        function togglePreguntas3() {
            if (medicamentosi.checked) {
                qpretres.style.display = 'grid';
            } else if (medicamentono.checked) {
                qpretres.style.display = 'none';
            }
        }

        function togglePreguntas4() {
            if (alergiasi.checked) {
                qprecuatro.style.display = 'grid';
            } else if (alergiano.checked) {
                qprecuatro.style.display = 'none';
            }
        }

        // Evento al cargar la página
        window.addEventListener('load', togglePreguntas1);
        window.addEventListener('load', togglePreguntas2);
        window.addEventListener('load', togglePreguntas3);
        window.addEventListener('load', togglePreguntas4);

        // Evento cuando cambia el estado de los radio buttons
        tratamientosi.addEventListener('change', togglePreguntas1);
        tratamientono.addEventListener('change', togglePreguntas1);
        enfermedadsi.addEventListener('change', togglePreguntas2);
        enfermedadno.addEventListener('change', togglePreguntas2);
        medicamentosi.addEventListener('change', togglePreguntas3);
        medicamentono.addEventListener('change', togglePreguntas3);
        alergiasi.addEventListener('change', togglePreguntas4);
        alergiano.addEventListener('change', togglePreguntas4);
    </script>

</x-approxana-layout>
