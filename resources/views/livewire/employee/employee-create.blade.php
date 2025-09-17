<div>
    <div class="px-4 pt-6 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Trabajadores</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Nuevo Trabajador</span>
                    </div>
                </li>
                </ol>
            </nav>
            <div class="2xl:w-3/4 2xl:mx-auto w-full">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Nuevo Trabajador</h1>
            </div>
        </div>
        <!-- Right Content -->
        <div class="2xl:w-3/4 2xl:mx-auto w-full">
            <div class="col-span-full">

                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Datos del Trabajador</h3>

                    <div class="mb-4">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('first_name') text-red-700 dark:text-red-500 @enderror">
                            Nombres *
                        </label>
                        <input type="text" id="first_name" wire:model="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('first_name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                            placeholder="Nombres" maxlength="120">
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex mb-4">
                        <div class="w-full me-1">
                            <label for="last_name1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('last_name1') text-red-700 dark:text-red-500 @enderror">
                                Apellido Paterno *
                            </label>
                            <input type="last_name1" id="last_name1" wire:model="last_name1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('last_name1') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Apellido Paterno" maxlength="90">
                            @error('last_name1')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ms-1">
                            <label for="last_name2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('last_name2') text-red-700 dark:text-red-500 @enderror">
                                Apellido Materno *
                            </label>
                            <input type="last_name2" id="last_name1" wire:model="last_name2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('last_name2') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Apellido Paterno" maxlength="90">
                            @error('last_name2')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('email') text-red-700 dark:text-red-500 @enderror">
                            Email
                        </label>
                        <input type="email" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                            placeholder="ejemplo@ejemplo.com" maxlength="120">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex mb-4">                        
                        <div class="w-1/3 me-2">
                            <label for="document_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('document_type') text-red-700 dark:text-red-500 @enderror">
                                Tipo de Documento *
                            </label>
                            <select id="document_type" wire:model="document_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('document_type') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror">

                                <option value="">-- SELECCIONAR --</option>
                                @foreach($documentTypes as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                            @error('document_type')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>                        
                        <div class="w-1/3 me-2">
                            <label for="document_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('document_number') text-red-700 dark:text-red-500 @enderror">
                                Número de Documento *
                            </label>
                            <input type="text" id="document_number" wire:model="document_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('document_number') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror"
                                placeholder="Ingrese número de documento" maxlength="20">
                            @error('document_number')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-1/3">
                            <label for="ruc" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('ruc') text-red-700 dark:text-red-500 @enderror">
                                RUC
                            </label>
                            <input type="text" id="ruc" wire:model="ruc"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('ruc') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror"
                                placeholder="Ingrese RUC" maxlength="11">
                            @error('ruc')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mb-4">                        
                        <div class="w-1/3 me-2">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('gender') text-red-700 dark:text-red-500 @enderror">
                                Sexo *
                            </label>
                            <select id="gender" wire:model="gender"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('gender') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror">
                                <option value="">-- SELECCIONAR --</option>
                                @foreach($genders as $gender)
                                    <option value="{{ $gender }}">{{ $gender === 'M' ? 'Masculino' : 'Femenino' }}</option>
                                @endforeach
                            </select>
                            @error('gender')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>                        
                        <div class="w-1/3 me-2">
                            <label for="marital_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('marital_status') text-red-700 dark:text-red-500 @enderror">
                                Estado civil *
                            </label>
                            <select id="marital_status" wire:model="marital_status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('marital_status') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror">

                                <option value="">-- SELECCIONAR --</option>
                                @foreach($maritalStatuses as $status)
                                    <option value="{{ $status }}">{{ $status }}</option>
                                @endforeach
                            </select>
                            @error('marital_status')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-1/3 ms-2">
                            <label for="birth_date" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('birth_date') text-red-700 dark:text-red-500 @enderror">
                                Fecha de Nacimiento *
                            </label>
                            <input type="date" id="birth_date" wire:model="birth_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('birth_date') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                    focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                    dark:border-red-500 @enderror">
                            @error('birth_date')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>                        
                    </div>
                    <div class="mb-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" wire:model="has_disability">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 
                                peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer 
                                dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white 
                                after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white 
                                after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all 
                                dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Discapacidad
                            </span>
                        </label>
                        @error('has_disability')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Información de contacto</h3>
                    <div class="flex mb-4">
                        <div class="w-full me-1">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('address') text-red-700 dark:text-red-500 @enderror">
                                Dirección *
                            </label>
                            <input type="address" id="address" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('address') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Dirección" maxlength="90">
                            @error('address')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ms-1">
                            <label for="address_reference" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('address_reference') text-red-700 dark:text-red-500 @enderror">
                                Referencia *
                            </label>
                            <input type="address_reference" id="last_name1" wire:model="address_reference" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('address_reference') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Referencia" maxlength="90">
                            @error('address_reference')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-full me-1">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('phone') text-red-700 dark:text-red-500 @enderror">
                                Teléfono *
                            </label>
                            <input type="phone" id="phone" wire:model="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('phone') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Dirección" maxlength="90">
                            @error('phone')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ms-1">
                            <label for="cell_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('cell_phone') text-red-700 dark:text-red-500 @enderror">
                                Celular *
                            </label>
                            <input type="cell_phone" id="last_name1" wire:model="cell_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('cell_phone') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Referencia" maxlength="90">
                            @error('cell_phone')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('email') text-red-700 dark:text-red-500 @enderror">
                            Email
                        </label>
                        <input type="email" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                            placeholder="ejemplo@ejemplo.com" maxlength="120">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="mb-4 text-xl font-semibold dark:text-white">Vínculo Laboral</h3>

                    <div class="mb-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" wire:model.live="hasEmploymentHistory">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                @if ($hasEmploymentHistory)
                                    Registrar Vínculo Laboral
                                @else
                                    Sin Vinculo Laboral
                                @endif
                            </span>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="area_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('area_id') text-red-700 dark:text-red-500 @enderror">
                            Área
                        </label>
                        <select id="area_id" wire:model.live="newEmployeeEmployment.area_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('newEmployeeEmployment.area_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror">
                            <option selected>-- SELECCIONAR --</option>
                            @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    @if ($newEmployeeEmployment['area_id'])
                    <div class="flex mb-4">
                        <div class="w-full me-1">
                            <label for="last_name1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('last_name1') text-red-700 dark:text-red-500 @enderror">
                                Apellido Paterno *
                            </label>
                            <input type="last_name1" id="last_name1" wire:model="last_name1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('last_name1') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Apellido Paterno" maxlength="90">
                            @error('last_name1')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ms-1">
                            <label for="last_name2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                @error('last_name2') text-red-700 dark:text-red-500 @enderror">
                                Apellido Materno *
                            </label>
                            <input type="last_name2" id="last_name1" wire:model="last_name2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                @error('last_name2') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                placeholder="Apellido Paterno" maxlength="90">
                            @error('last_name2')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    @endif                    

                </div>

            </div>
        </div>
    </div>
</div>