<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
           {{ __('Configurações') }}<i class="fa-solid fa-gear ps-3"></i>
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 gap-4 py-10 justify-center">
        @php
            $settings = [
                "Configurações - Administradores" => [
                    "icon" => "fa-solid fa-users-gear",
                    "route" => "setting.user.index",
                    "summary" => "Lista de Administradores.",
                ],
                "Lista de Hóspedes" => [
                    "icon" => "fa-solid fa-users-viewfinder",
                    "route" => "setting.guest.index",
                    "summary" => "Lista de Hóspedes.",
                ],
            ]
        @endphp

        @foreach ($settings as $title => $setting)
            @include('components.setting-card', [
                "title" => $title,
                "icon" => $setting['icon'],
                "route" => $setting['route'],
                "summary" => $setting['summary'],
                "disabled" => $setting['disabled'] ?? false,
            ])
        @endforeach
    </div>
</x-app-layout>
