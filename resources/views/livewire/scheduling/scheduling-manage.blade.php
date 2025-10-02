<div>
    <div x-data="schedulingManage">
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
                        <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Programaciones</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Programación de Personal</span>
                        </div>
                    </li>
                    </ol>
                </nav>
                <div class="2xl:mx-auto w-full">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Programación de Personal</h1>
                </div>
            </div>
            <!-- Right Content -->
            <div class="2xl:mx-auto w-full">
                <div class="col-span-full">

                    <form wire:submit.prevent="store()">

                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                            <div class="flex">
                                <div class="flex-none w-64">

                                    <div class="mb-4 relative">
                                        <label for="queryEmployee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                            @error('queryEmployee') text-red-700 dark:text-red-500 @enderror">
                                            Trabajadores Disponibles (36)
                                        </label>
                                        <input type="text" id="queryEmployee" wire:model.live="queryEmployee" 
                                            wire:focus="onQueryEmployeeFocus()"
                                            autocomplete="off"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                            @error('queryEmployee') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                            placeholder="Nombres" maxlength="120">
                                        @if ($selectedEmployeeId)
                                        <div class="absolute inset-y-0 top-7 right-6 flex items-center pr-3">
                                            <i wire:click="deSelectEmployee()" class="cursor-pointer fa-solid fa-x text-gray-500"></i>
                                        </div>
                                        @endif
                                        <div class="pointer-events-none absolute inset-y-0 top-7 right-0 flex items-center pr-3">
                                            <i class="fa-solid fa-chevron-down text-gray-500"></i>
                                        </div>
                                        @error('queryEmployee')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                        @enderror
                                        
                                        @if(!empty($employees))
                                            <ul id="employees" class="absolute w-full z-10 bg-white border border-gray-300 rounded-lg shadow-lg mt-1 max-h-60 overflow-y-auto">
                                                @forelse($employees as $employee)
                                                    <li wire:click="selectEmployee({{ $employee->id }})"
                                                        class="cursor-pointer px-4 py-2 hover:bg-blue-100">
                                                        {{ $employee->full_name }}
                                                    </li>
                                                @empty
                                                    <li class="px-4 py-2 text-gray-500">Sin resultados</li>
                                                @endforelse
                                            </ul>
                                        @endif

                                    </div>

                                    <div class="mb-4 relative">
                                        <label for="queryService" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                            @error('queryService') text-red-700 dark:text-red-500 @enderror">
                                            Servicios
                                        </label>
                                        <input type="text" id="queryService" wire:model.live="queryService" 
                                            wire:focus="onQueryServiceFocus()"
                                            autocomplete="off"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                            @error('queryService') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                            placeholder="Servicio" maxlength="120">
                                        @if ($selectedServiceId)
                                        <div class="absolute inset-y-0 top-7 right-6 flex items-center pr-3">
                                            <i wire:click="deSelectService()" class="cursor-pointer fa-solid fa-x text-gray-500"></i>
                                        </div>
                                        @endif
                                        <div class="pointer-events-none absolute inset-y-0 top-7 right-0 flex items-center pr-3">
                                            <i class="fa-solid fa-chevron-down text-gray-500"></i>
                                        </div>
                                        @error('queryService')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                        @enderror

                                        @if(!empty($services))
                                            <ul id="services" class="absolute w-full z-10 bg-white border border-gray-300 rounded-lg shadow-lg mt-1 max-h-60 overflow-y-auto">
                                                @forelse($services as $service)
                                                    <li wire:click="selectService({{ $service->id }})"
                                                        class="cursor-pointer px-4 py-2 hover:bg-blue-100">
                                                        {{ $service->name }}
                                                    </li>
                                                @empty
                                                    <li class="px-4 py-2 text-gray-500">Sin resultados</li>
                                                @endforelse
                                            </ul>
                                        @endif

                                    </div>

                                    <div class="mb-4">
                                        <label for="schedule_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                            @error('schedule_id') text-red-700 dark:text-red-500 @enderror">
                                            Turnos
                                        </label>
                                        
                                        <select id="schedule_id" wire:model.live="schedule_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                                @error('schedule_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                                focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500
                                                dark:border-red-500 @enderror">
                                            <option value="">-- SELECCIONAR --</option>
                                            @foreach($schedules as $schedule)
                                                <option value="{{ $schedule->id }}">{{ $schedule->scheduleType->name }} - {{ $schedule->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('schedule_id')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="flex-1">
                                    
                                    <div class="p-4">
                                        <div class="flex justify-center items-center mb-4">
                                            <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                                                {{ ucfirst($date->locale('es')->translatedFormat('F \d\e Y')) }}
                                            </h2>
                                        </div>

                                        <div class="grid grid-cols-7 mb-3">
                                            {{-- Encabezado días --}}
                                            @foreach (['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'] as $day)
                                                <div class="text-center font-semibold border border-gray-500 p-2 text-gray-900 dark:text-white">{{ $day }}</div>
                                            @endforeach

                                            @for ($i = 0; $i < $startDay; $i++)
                                                <div class="border border-gray-500 p-2 h-32"></div>
                                            @endfor

                                            @for ($day = 1; $day <= $daysInMonth; $day++)
                                                <div wire:click="onSelectDate({{ $day }})" class="border border-gray-500 p-2 text-gray-900 dark:text-white min-h-32 cursor-pointer">
                                                    <div class="text-end">
                                                        {{ $day }}
                                                    </div>
                                                    @if (array_key_exists($day, $attendances))
                                                    <button type="button" class="text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <div>{{ $attendances[$day]['schedule_name'] }}</div>
                                                        <hr>
                                                        <div>{{ $attendances[$day]['service_name'] }}</div>
                                                    </button>
                                                    @endif
                                                </div>
                                            @endfor

                                            @for ($i = 0; $i < $remaining; $i++)
                                                <div class="border border-gray-500 p-2 h-32"></div>
                                            @endfor

                                        </div>
                                    

                                        <div class="flex justify-end flex-col lg:flex-row">
                                            <a href="{{ route('service.service-index') }}" class="lg:order-1 order-2 lg:mr-3 px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white text-center rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Ir a la Lista
                                            </a>
                                            <button type="submit" class="lg:order-2 order-1 text-white mb-2 lg:mb-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-none">
                                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Turno
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                    Cantidad
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            @forelse ([] as $turno)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                    test
                                                </td>

                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1
                                                </td>
                                            </tr>
                                            @empty
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td colspan="2" class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400 text-center">
                                                    Sin turnos asignados
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
       
    @push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('schedulingManage', () => ({
                init() {
                    document.addEventListener('click', (e) => {
                        const divQueryEmployee = document.querySelector('#queryEmployee');
                        const divEmployees = document.querySelector('#employees');

                        if (divQueryEmployee && divEmployees && !divQueryEmployee.contains(e.target) && !divEmployees.contains(e.target)) {
                            this.$wire.onQueryEmployeeBlur();                            
                        }

                        const divQueryService = document.querySelector('#queryService');
                        const divServices = document.querySelector('#services');
                        
                        if (divQueryService && divServices && !divQueryService.contains(e.target) && !divServices.contains(e.target)) {
                            this.$wire.onQueryServiceBlur();                            
                        }
                    });
                }
            }));
            
        });
    </script>
    @endpush
</div>