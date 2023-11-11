<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Задачи') }}
        </h2>
    </x-slot>
    <!--Блок с тасками-->
    <div class="mainBlock borderOne">
        <x-stage.stages/>
    </div>
</x-app-layout>
