@csrf

<h1 class="text-2xl font-bold mb-8 text-center mx-auto text-blue-600 uppercase">
    {{ $contact->name ? 'Editar' : 'Crear' }} contacto</h1>

<label for="cc" class="uppercase text-gray-700 text-xs">Cedula</label>
<span class="text-red-500 text-xs">{{ $errors->first('cc') }}</span>
<input type="text" name="cc" class="rounded border-gray-200 w-full mb-4" value="{{ old('cc', $contact->cc) }}">

<label for="name" class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-red-500 text-xs">{{ $errors->first('name') }}</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('name', $contact->name) }}">

<label for="last_name" class="uppercase text-gray-700 text-xs">Apellido</label>
<span class="text-red-500 text-xs">{{ $errors->first('last_name') }}</span>
<input type="text" name="last_name" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('last_name', $contact->last_name) }}">

<label for="birthday" class="uppercase text-gray-700 text-xs">Fecha de nacimiento</label>
<span class="text-red-500 text-xs">{{ $errors->first('birthday') }}</span>
<input type="date" name="birthday" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('birthday', $contact->birthday) }}">

<label for="phone" class="uppercase text-gray-700 text-xs">Teléfono</label>
<span class="text-red-500 text-xs">{{ $errors->first('phone') }}</span>
<input type="text" name="phone" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('phone', $contact->phone) }}">

<label for="email" class="uppercase text-gray-700 text-xs">Correo electrónico</label>
<span class="text-red-500 text-xs">{{ $errors->first('email') }}</span>
<input type="email" name="email" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('email', $contact->email) }}">

<label for="address" class="uppercase text-gray-700 text-xs">Dirección</label>
<span class="text-red-500 text-xs">{{ $errors->first('address') }}</span>
<input type="text" name="address" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('address', $contact->address) }}">

<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    {{ $contact->cc ? 'Actualizar' : 'Guardar' }}
</button>

<a href="{{ route('contacts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
    Cancelar
</a>
