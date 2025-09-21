<div>
    <div x-data="scheduleCreate">
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
                        <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Horarios</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Nuevo Horario</span>
                        </div>
                    </li>
                    </ol>
                </nav>
                <div class="2xl:w-3/4 2xl:mx-auto w-full">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Nuevo Horario</h1>
                </div>
            </div>

            <!-- Right Content -->
            <div class="2xl:w-3/4 2xl:mx-auto w-full">
                <div class="col-span-full">

                    <form wire:submit.prevent="store()">
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                            <div class="mb-4">
                                <label for="state.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('state.name') text-red-700 dark:text-red-500 @enderror">
                                    Nombre *
                                </label>
                                <input type="text" id="state.name" wire:model.live="state.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('state.name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                    placeholder="Nombre del Horario" maxlength="120">
                                @error('state.name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="state.description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('state.description') text-red-700 dark:text-red-500 @enderror">
                                    Descripción
                                </label>
                                <textarea id="state.description" wire:model.live="state.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('state.description') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                    placeholder="Descripción del Horario"></textarea>
                                @error('state.description')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4 flex">

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.monday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Lunes
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.tuesday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Martes
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.wednesday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Miércoles
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.thursday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Jueves
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.friday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Viernes
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.saturday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Sábado
                                        </span>
                                    </label>
                                </div>

                                <div class="me-2">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" wire:model.live="state.sunday">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Domingo
                                        </span>
                                    </label>
                                </div>

                            </div>
                            
                            <div class="sm:flex">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">Turnos</h3>
                                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                                    <button @click="openAddScheduleModal()" type="button" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Nuevo Turno
                                    </button>
                                </div>
                            </div>

                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 mb-3">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Turno
                                        </th>
                                        @if ($state['monday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Lunes
                                        </th>
                                        @endif
                                        @if ($state['tuesday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Martes
                                        </th>
                                        @endif
                                        @if ($state['wednesday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Miércoles
                                        </th>
                                        @endif
                                        @if ($state['thursday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Jueves
                                        </th>
                                        @endif
                                        @if ($state['friday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Viernes
                                        </th>
                                        @endif
                                        @if ($state['saturday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Sábado
                                        </th>
                                        @endif
                                        @if ($state['sunday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Domingo
                                        </th>
                                        @endif
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @forelse ($state['schedules'] as $schedule)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            {{ $schedule['name'] }}
                                        </td>
                                        @if ($state['monday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['monday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['tuesday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['tuesday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['wednesday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['wednesday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['thursday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['thursday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['friday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['friday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['saturday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['saturday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        @if ($state['sunday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($schedule['sunday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @endif
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                                Modificar
                                            </button>
                                            <button type="button" data-modal-target="delete-user-modal" data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td colspan="{{ $this->getColspan() }}" class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400 text-center">
                                            Sin turnos ingresados.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="flex justify-end flex-col lg:flex-row">
                                <a href="{{ route('schedule.schedule-index') }}" class="lg:order-1 order-2 lg:mr-3 px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white text-center rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Ir a la Lista
                                </a>
                                <button type="submit" class="lg:order-2 order-1 text-white mb-2 lg:mb-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Guardar
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    
        <div id="add_schedule_detail_check_drawer" class="fixed top-0 right-0 z-50 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" 
            tabindex="-1" 
            aria-labelledby="drawer-label" 
            aria-hidden="true"
            wire:ignore.self>
            <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                Nueva Marcación
            </h5>
            <button type="button" @click="closeAddScheduleDetailCheckDrawer()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>

            <form @submit.prevent='addScheduleDetailCheck()'>
                <div class="space-y-4">
                    
                    <div class="mb-4">
                        <label for="newScheduleDetailCheck.check_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('newScheduleDetailCheck.check_type') text-red-700 dark:text-red-500 @enderror">
                            Tipo de Marcación *
                        </label>
                        <select id="newScheduleDetailCheck.check_type" wire:model.live="newScheduleDetailCheck.check_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('newScheduleDetailCheck.check_type') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror">
                            <option selected>-- SELECCIONAR --</option>
                            @foreach ($scheduleDetailCheckTypes as $scheduleDetailCheckTypeKey =>  $scheduleDetailCheckTypeValue)
                            <option value="{{ $scheduleDetailCheckTypeKey }}">{{ $scheduleDetailCheckTypeValue }}</option>
                            @endforeach
                        </select>
                        @error('newScheduleDetailCheck.check_type')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" wire:model.live="newScheduleDetailCheck.same_day">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                @if ($newScheduleDetailCheck['same_day'])
                                Marcación del mismo día
                                @else
                                Marcación del siguiente día
                                @endif
                            </span>
                        </label>
                    </div>
                    
                    <div class="mb-4">
                        <label for="newScheduleDetailCheck.check_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                            @error('newScheduleDetailCheck.check_time') text-red-700 dark:text-red-500 @enderror">
                            Hora de Marcación *
                        </label>
                        <input type="time" id="newScheduleDetailCheck.check_time" wire:model.live="newScheduleDetailCheck.check_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('newScheduleDetailCheck.check_time') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                            placeholder="00:00">
                        @error('newScheduleDetailCheck.check_time')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    
                    <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4 md:absolute">
                        <button type="button" @click="closeAddScheduleDetailCheckDrawer()" aria-controls="add_schedule_detail_check_drawer" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            Cerrar
                        </button>
                        <button type="submit" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Agregar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Add Schedule Modal -->
        <div wire:ignore.self id="add_schedule_modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-40 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-6xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <button type="button" @click="closeAddScheduleModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6">
                        <form wire:submit.prevent="addSchedule()">
                            <h3 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white mb-4">
                                Detalle de Turno
                            </h3>

                            <div class="mb-4">
                                <label for="newSchedule.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('newSchedule.name') text-red-700 dark:text-red-500 @enderror">
                                    Nombre *
                                </label>
                                <input type="text" id="newSchedule.name" wire:model="newSchedule.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('newSchedule.name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                    placeholder="Nombre del Turno" maxlength="120">
                                @error('newSchedule.name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="newSchedule.description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                    @error('newSchedule.description') text-red-700 dark:text-red-500 @enderror">
                                    Description
                                </label>
                                <textarea id="newSchedule.description" wire:model.live="newSchedule.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                    @error('newSchedule.description') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                    placeholder="Descripción del Turno"></textarea>
                                @error('newSchedule.description')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        @if ($state['monday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Lunes
                                        </th>
                                        @endif
                                        @if ($state['tuesday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Martes
                                        </th>
                                        @endif
                                        @if ($state['wednesday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Miércoles
                                        </th>
                                        @endif
                                        @if ($state['thursday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Jueves
                                        </th>
                                        @endif
                                        @if ($state['friday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Viernes
                                        </th>
                                        @endif
                                        @if ($state['saturday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Sábado
                                        </th>
                                        @endif
                                        @if ($state['sunday'])
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Domingo
                                        </th>
                                        @endif
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        @if ($state['monday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['monday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('monday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['tuesday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['tuesday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('tuesday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['wednesday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['wednesday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('wednesday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['thursday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['thursday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('thursday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['friday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['friday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('friday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['saturday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['saturday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('saturday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                        @if ($state['sunday'])
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                            <ul>
                                                @foreach ($newSchedule['sunday'] as $scheduleDetailCheck)
                                                <li>
                                                    @if ($scheduleDetailCheck['check_type'] === 'ENTRY')
                                                    <i class="fa-solid fa-right-to-bracket text-green-500"></i>
                                                    @else
                                                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                                                    @endif
                                                    {{ $scheduleDetailCheck['check_time'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <button @click="openAddScheduleDetailCheckDrawer('sunday', 'ENTRY')" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 me-1"
                                                title="Agregar Marcación">
                                                Agregar
                                            </button>
                                        </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-3 flex justify-end">
                                <button type="button" @click="closeAddScheduleModal()" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 me-3">
                                    Cerrar
                                </button>
                                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Agregar Turno
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    @push('scripts')
    <script>
        const modalOptions = {
            placement: 'center-center',
            backdrop: 'dynamic',
            backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-30',
            closable: true
        };        
          
        const drawerOptions = {
            placement: 'right',
            backdrop: false,
            bodyScrolling: false,
            edge: false,
            edgeOffset: '',
            backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-30',
        };

        document.addEventListener('alpine:init', () => {
            Alpine.data('scheduleCreate', () => ({
                add_schedule_modal: new Modal(document.querySelector('#add_schedule_modal'), modalOptions),
                add_schedule_detail_check_drawer: new Drawer(document.querySelector('#add_schedule_detail_check_drawer'), drawerOptions),

                day: null,

                openAddScheduleModal() {
                    this.add_schedule_modal.show();
                },
                closeAddScheduleModal() {
                    this.add_schedule_modal.hide();
                },
                openAddScheduleDetailCheckDrawer(day) {
                    this.day = day;
                    this.add_schedule_detail_check_drawer.show();
                },
                closeAddScheduleDetailCheckDrawer() {
                    this.add_schedule_detail_check_drawer.hide();
                },
                addScheduleDetailCheck() {
                    this.$wire.addScheduleDetailCheck(this.day);
                },
                init() {
                    @this.on('closeAddScheduleDetailCheckDrawer', () => {
                        this.add_schedule_detail_check_drawer.hide();
                    });

                    @this.on('closeAddScheduleModal', () => {
                        this.add_schedule_modal.hide();
                    });
                },
            }));
            
        });
    </script>
    @endpush
</div>