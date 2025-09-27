<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Post') }}
        </h2>
    </x-slot>

    <div class="py-8 mt-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form method="POST" action="{{route('post.store')}}" class="space-y-6">
                    @csrf

                    <!-- Campo título -->
                    <div>
                        <x-input-label for="title" :value="__('Título')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Campo conteúdo -->
                    <div>
                        <x-input-label for="content" :value="__('Conteúdo')" />
                        <textarea id="content" name="content" rows="5" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                                   focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <!-- Botão -->
                    <div>
                        <x-primary-button>
                            {{ __('Publicar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
