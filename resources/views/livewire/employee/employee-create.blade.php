<div>
    <div class="px-4 pt-6 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                                ></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Trabajadores</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
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
            <form wire:submit.prevent="store()">
                <div class="col-span-full">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Datos del Trabajador</h3>

                        <div class="mb-4">
                            <label
                                for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.first_name') text-red-700 dark:text-red-500 @enderror"
                            >
                                Nombres *
                            </label>
                            <input
                                type="text"
                                id="first_name"
                                wire:model="newEmployee.first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.first_name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                placeholder="Nombres"
                                maxlength="120"
                            />
                            @error('newEmployee.first_name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex mb-4">
                            <div class="w-full me-1">
                                <label
                                    for="last_name1"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.last_name1') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Apellido Paterno *
                                </label>
                                <input
                                    type="text"
                                    id="last_name1"
                                    wire:model="newEmployee.last_name1"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.last_name1') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Apellido Paterno"
                                    maxlength="90"
                                />
                                @error('newEmployee.last_name1')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full ms-1">
                                <label
                                    for="last_name2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.last_name2') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Apellido Materno *
                                </label>
                                <input
                                    type="text"
                                    id="last_name2"
                                    wire:model="newEmployee.last_name2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.last_name2') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Apellido Paterno"
                                    maxlength="90"
                                />
                                @error('newEmployee.last_name2')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label
                                for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.email') text-red-700 dark:text-red-500 @enderror"
                            >
                                Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                wire:model="newEmployee.email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                placeholder="ejemplo@ejemplo.com"
                                maxlength="120"
                            />
                            @error('newEmployee.email')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="document_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.document_type') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Tipo de Documento *
                                </label>
                                <select
                                    id="document_type"
                                    wire:model="newEmployee.document_type"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.document_type') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($documentTypes as $type)
                                        <option value="{{ $type }}">
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.document_type')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="document_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.document_number') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Número de Documento *
                                </label>
                                <input
                                    type="text"
                                    id="document_number"
                                    wire:model="newEmployee.document_number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.document_number') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Ingrese número de documento"
                                    maxlength="20"
                                />
                                @error('newEmployee.document_number')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3">
                                <label
                                    for="ruc"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.ruc') text-red-700 dark:text-red-500 @enderror"
                                >
                                    RUC *
                                </label>
                                <input
                                    type="text"
                                    id="ruc"
                                    wire:model="newEmployee.ruc"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.ruc') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Ingrese número de RUC"
                                    maxlength="11"
                                />
                                @error('newEmployee.ruc')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="gender"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.gender') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Sexo *
                                </label>
                                <select
                                    id="gender"
                                    wire:model="newEmployee.gender"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.gender') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender }}">
                                            {{ $gender === 'M' ? 'Masculino' : 'Femenino' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.gender')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="marital_status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.marital_status') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Estado civil *
                                </label>
                                <select
                                    id="marital_status"
                                    wire:model="newEmployee.marital_status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.marital_status') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($maritalStatuses as $status)
                                        <option value="{{ $status }}">
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.marital_status')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 ms-2">
                                <label
                                    for="birth_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.birth_date') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Fecha de Nacimiento *
                                </label>
                                <input
                                    type="date"
                                    id="birth_date"
                                    wire:model="newEmployee.birth_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.birth_date') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                />
                                @error('newEmployee.birth_date')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" wire:model="newEmployee.has_disability" />
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                                ></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Discapacidad</span>
                            </label>
                            @error('newEmployee.has_disability')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Información de contacto</h3>
                        <div class="flex mb-4">
                            <div class="w-full me-1 relative">
                                <label
                                    for="searchDistrict"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('location_code_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Buscar distrito *
                                </label>

                                <input
                                    type="text"
                                    wire:model.live.debounce.300ms="searchDistrict"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Escribe distrito, provincia o estado"
                                />
                                @if (! empty($districtResults))
                                    <ul class="absolute z-10 w-full bg-gray-50 border border-gray-200 rounded-lg shadow-lg mt-1 max-h-60 overflow-y-auto dark:bg-gray-600 dark:border-gray-600">
                                        @foreach ($districtResults as $district)
                                            <li
                                                class="px-4 py-2 cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-700"
                                                wire:click="selectDistrict({{ $district->id }}, '{{ $district->state }}, {{ $district->province }}, {{ $district->district }}')"
                                            >
                                                {{ $district->state }}, {{ $district->province }}, {{ $district->district }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                                <input type="hidden" wire:model="location_code_id" name="newEmployee.location_code_id" />

                                @error('newEmployee.location_code_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-full me-1">
                                <label
                                    for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('address') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Dirección *
                                </label>
                                <input
                                    type="text"
                                    id="address"
                                    wire:model="newEmployee.address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.address') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Dirección"
                                    maxlength="90"
                                />
                                @error('newEmployee.address')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full ms-1">
                                <label
                                    for="address_reference"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('address_reference') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Referencia *
                                </label>
                                <input
                                    type="address_reference"
                                    id="address_reference"
                                    wire:model="newEmployee.address_reference"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.address_reference') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Referencia"
                                    maxlength="90"
                                />
                                @error('newEmployee.address_reference')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-full me-1">
                                <label
                                    for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('phone') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Teléfono *
                                </label>
                                <input
                                    type="text"
                                    id="phone"
                                    wire:model="newEmployee.phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.phone') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Dirección"
                                    maxlength="90"
                                />
                                @error('newEmployee.phone')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-full ms-1">
                                <label
                                    for="cell_phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.cell_phone') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Celular *
                                </label>
                                <input
                                    type="text"
                                    id="text"
                                    wire:model="newEmployee.cell_phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.cell_phone') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="Referencia"
                                    maxlength="90"
                                />
                                @error('newEmployee.cell_phone')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>                      
                    </div>

                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Información académica</h3>
                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="education_level_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.education_level_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Nivel educativo *
                                </label>
                                <select
                                    id="education_level_id"
                                    wire:model.live="selectedEducationLevel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.education_level_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($educationLevels as $educationLevel)
                                        <option value="{{ $educationLevel->id }}">
                                            {{ $educationLevel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.education_level_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="education_level_detail_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.education_level_detail_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Grado educativo *
                                </label>
                                <select
                                    id="education_level_detail_id"
                                    wire:model="newEmployee.education_level_detail_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.education_level_detail_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($educationLevelDetails as $educationLevelDetail)
                                        <option value="{{ $educationLevelDetail->id }}">
                                            {{ $educationLevelDetail->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.education_level_detail_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>                            
                            <div class="w-1/3 me-2">
                                <label
                                    for="occupation_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.occupation_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Profesión *
                                </label>
                                <select
                                    id="occupation_id"
                                    wire:model="newEmployee.occupation_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.occupation_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($occupations as $occupation)
                                        <option value="{{ $occupation->id }}">
                                            {{ $occupation->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.occupation_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="tuition_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.tuition_code') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Colegiatura *
                                </label>
                                <input
                                    type="text"
                                    id="tuition_code"
                                    wire:model="newEmployee.tuition_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.tuition_code') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="N° colegiatura"
                                    maxlength="90"
                                />
                                @error('newEmployee.tuition_code')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="specialty_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.specialty_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Especialidad *
                                </label>
                                <select
                                    id="specialty_id"
                                    wire:model="newEmployee.specialty_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.specialty_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($specialties as $specialty)
                                        <option value="{{ $specialty->id }}">
                                            {{ $specialty->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.specialty_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="specialty_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.specialty_number') text-red-700 dark:text-red-500 @enderror"
                                >
                                    N° especialidad *
                                </label>
                                <input
                                    type="text"
                                    id="specialty_number"
                                    wire:model="newEmployee.specialty_number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.specialty_number') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="N° especialidad"
                                    maxlength="90"
                                />
                                @error('newEmployee.specialty_number')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 me-2">
                                <label
                                    for="university_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.university_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Universidad *
                                </label>
                                <select
                                    id="university_id"
                                    wire:model="newEmployee.university_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.university_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">
                                            {{ $university->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.university_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/2 me-2">
                                <label
                                    for="graduation_year"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.graduation_year') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Año egreso *
                                </label>
                                <input
                                    type="text"
                                    id="graduation_year"
                                    wire:model="newEmployee.graduation_year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.graduation_year') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder=""
                                    maxlength="90"
                                />
                                @error('newEmployee.graduation_year')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>                        
                    </div>

                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Información laboral</h3>
                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="education_level_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.education_level_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Nivel educativo *
                                </label>
                                <select
                                    id="education_level_id"
                                    wire:model.live="selectedEducationLevel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.education_level_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($educationLevels as $educationLevel)
                                        <option value="{{ $educationLevel->id }}">
                                            {{ $educationLevel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.education_level_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="education_level_detail_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.education_level_detail_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Grado educativo *
                                </label>
                                <select
                                    id="education_level_detail_id"
                                    wire:model="newEmployee.education_level_detail_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.education_level_detail_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($educationLevelDetails as $educationLevelDetail)
                                        <option value="{{ $educationLevelDetail->id }}">
                                            {{ $educationLevelDetail->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.education_level_detail_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>                            
                            <div class="w-1/3 me-2">
                                <label
                                    for="occupation_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.occupation_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Profesión *
                                </label>
                                <select
                                    id="occupation_id"
                                    wire:model="newEmployee.occupation_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.occupation_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($occupations as $occupation)
                                        <option value="{{ $occupation->id }}">
                                            {{ $occupation->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.occupation_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="tuition_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.tuition_code') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Colegiatura *
                                </label>
                                <input
                                    type="text"
                                    id="tuition_code"
                                    wire:model="newEmployee.tuition_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.tuition_code') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="N° colegiatura"
                                    maxlength="90"
                                />
                                @error('newEmployee.tuition_code')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="specialty_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.specialty_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Especialidad *
                                </label>
                                <select
                                    id="specialty_id"
                                    wire:model="newEmployee.specialty_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.specialty_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($specialties as $specialty)
                                        <option value="{{ $specialty->id }}">
                                            {{ $specialty->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.specialty_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="specialty_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.specialty_number') text-red-700 dark:text-red-500 @enderror"
                                >
                                    N° especialidad *
                                </label>
                                <input
                                    type="text"
                                    id="specialty_number"
                                    wire:model="newEmployee.specialty_number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.specialty_number') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder="N° especialidad"
                                    maxlength="90"
                                />
                                @error('newEmployee.specialty_number')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 me-2">
                                <label
                                    for="university_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.university_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Universidad *
                                </label>
                                <select
                                    id="university_id"
                                    wire:model="newEmployee.university_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.university_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">
                                            {{ $university->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.university_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/2 me-2">
                                <label
                                    for="graduation_year"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.graduation_year') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Año egreso *
                                </label>
                                <input
                                    type="text"
                                    id="graduation_year"
                                    wire:model="newEmployee.graduation_year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.graduation_year') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                    placeholder=""
                                    maxlength="90"
                                />
                                @error('newEmployee.graduation_year')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>                        
                    </div>

                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Asignación de horario</h3>
                        <div class="flex mb-4">
                            <div class="w-1/3 me-2">
                                <label
                                    for="scheduling_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.scheduling_type') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Tipo de horario *
                                </label>
                                <select
                                    id="scheduling_type"
                                    wire:model="newEmployee.scheduling_type"
                                    wire:change="selectSchedulingType($event.target.value)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.scheduling_type') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($schedulingTypes as $schedulingType)
                                        <option value="{{ $schedulingType }}">
                                            {{ $schedulingType === 'FIXED' ? 'NORMAL' : 'PERSONALIZADO' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.scheduling_type')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="w-1/3 me-2">
                                <label
                                    for="schedule_type_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('newEmployee.schedule_type_id') text-red-700 dark:text-red-500 @enderror"
                                >
                                    Horarios *
                                </label>
                                <select
                                    id="schedule_type_id"
                                    wire:model.live="newEmployee.schedule_type_id"      
                                    wire:change="getSchedulesByType($event.target.value)"                              
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('newEmployee.schedule_type_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror"
                                >
                                    <option value="">-- SELECCIONAR --</option>
                                    @foreach ($scheduleTypes as $scheduleType)
                                        <option value="{{ $scheduleType->id }}">
                                            {{ $scheduleType->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('newEmployee.schedule_type_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror                               
                            </div>                                                      
                        </div>
                        @if(count($schedules) > 0)
                        <div class="mb-4">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        @if($newEmployee['scheduling_type'] === 'FIXED' && $newEmployee['schedule_type_id'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Seleccionar
                                        </th>
                                        @endif
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Turno
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Lunes
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Martes
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Miércoles
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Jueves
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Viernes
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Sábado
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Domingo
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">                        
                                    @foreach ($schedules as $schedule)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        @if($newEmployee['scheduling_type'] === 'FIXED' && $newEmployee['schedule_type_id'])
                                        <td class="p-4 text-center">                                            
                                            <input
                                                type="radio"
                                                name="scheduleSelector"
                                                wire:model.live="selectedSchedule"
                                                value="{{ $schedule->id }}"
                                                class="text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600"
                                            />
                                            @endif
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            {{ $schedule->name }}
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('MONDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('TUESDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('WEDNESDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('THURSDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('FRIDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('SATURDAY') as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule->getDetailChecks('SUNDAY') as $scheduleDetailCheck)
                                                <li>
                                                    {{ $scheduleDetailCheck->id }}
                                                    @if ($scheduleDetailCheck->check_type === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck->check_time }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                            @error('newEmployee.schedule_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror  
                        </div>
                        @endif
                        <div class="flex justify-end flex-col lg:flex-row">
                            <a
                                href="{{ route('employee.employee-index') }}"
                                class="lg:order-1 order-2 lg:mr-3 px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white text-center rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            >
                                Ir a la Lista
                            </a>
                            <button
                                type="submit"
                                class="lg:order-2 order-1 text-white mb-2 lg:mb-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Guardar
                            </button>
                        </div>
                    </div>
                </div>
            <form>
        </div>
    </div>
</div>
