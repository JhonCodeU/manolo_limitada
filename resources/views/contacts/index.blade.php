@php
    use Carbon\Carbon;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Contactos') }}

            <a href="{{ route('contacts.create') }}" class="bg-gray-500 hover:bg-gray-700 text-white rounded px-4 py-2">
                {{ __('Crear nuevo contacto') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">

        @include('alerts.flash')

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    CC
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Apellido
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edad
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Teléfono
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Dirección
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Correo electrónico
                                </th>
                                <th scope="col" colspan="2"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($contacts as $contact)
                                <tr class="border-b border-gray-200 text-sm">
                                    <td class="px-6 py-4">{{ $contact->cc }}</td>
                                    <td class="px-6 py-4">{{ $contact->name }}</td>
                                    <td class="px-6 py-4">{{ $contact->last_name }}</td>
                                    <td class="px-6 py-4">{{ Carbon::parse($contact->birthday)->age }}</td>
                                    <td class="px-6 py-4">{{ $contact->phone }}</td>
                                    <td class="px-6 py-4">{{ $contact->address }}</td>
                                    <td class="px-6 py-4">{{ $contact->email }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('contacts.edit', $contact) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirmDelete(event)"
                                                class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function confirmDelete(event) {
        if (!confirm('¿Estás seguro de eliminar este contacto?')) {
            event.preventDefault();
        }
    }
</script>
