<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">

        <div class="grid lg:grid-cols-2 gap-4">
            <x-bladewind::input class="col-span-6" label="Full name" />
            <x-bladewind::input label="Full name" />

            <x-bladewind::select
    name="department"
    onselect="filterEmployees"
    placeholder="filter by department"
    data="manual"
    multiple="true">
    <x-bladewind::select-item label="Field Workers" value="field" />
    <x-bladewind::select-item label="Finance" value="finance" />
    <x-bladewind::select-item label="Tech" value="tech" />
    <x-bladewind::select-item label="Marketing" value="marketing" />
    <x-bladewind::select-item label="Operations" value="operations" />
</x-bladewind::select>

        </div>

    </div>

    <x-bladewind::button>Save User</x-bladewind::button>
</x-app-layout>
