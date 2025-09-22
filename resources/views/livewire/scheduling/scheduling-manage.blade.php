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
                            <div class="flex-none">

                                <div class="mb-4">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                        @error('name') text-red-700 dark:text-red-500 @enderror">
                                        Trabajadores Disponibles (36)
                                    </label>
                                    <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                        @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                        placeholder="Nombres" maxlength="120">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                        @error('name') text-red-700 dark:text-red-500 @enderror">
                                        Trabajadores Disponibles (36)
                                    </label>
                                    <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                        @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                        placeholder="Nombres" maxlength="120">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
                                        @error('name') text-red-700 dark:text-red-500 @enderror">
                                        Trabajadores Disponibles (36)
                                    </label>
                                    <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                        @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror" 
                                        placeholder="Nombres" maxlength="120">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="flex-1">222
                                <div class="flex justify-end flex-col lg:flex-row">
                                    <a href="{{ route('service.service-index') }}" class="lg:order-1 order-2 lg:mr-3 px-5 py-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white text-center rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Ir a la Lista
                                    </a>
                                    <button type="submit" class="lg:order-2 order-1 text-white mb-2 lg:mb-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                            <div class="flex-none">3</div>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>