@extends('layouts.app')
@section('title','Propietario')
@section('main')
    <main class="w-full h-full bg-fondo">
        <div class="w-full h-16 border-b border-bordes flex items-center pl-4">
            @component('_components.add')
            @slot('route', 'owner.create')
            @slot('text', 'propietario')
            @endcomponent
        </div>
        <div class=" w-full bg-white flex flex-col justify-center space-y-14 mt-10">
            <div class="h-20 flex items-center justify-between w-full py-2 px-10">
                <div class="h-full flex items-center">
                    <input type="number" name="" id="">
                    <span>paginacion</span>
                </div>
                <div class="h-full flex items-center">
                    <a href="" class="bg-purple-500 text-white px-3 py-1 rounded-lg">
                        <i class="fa-solid fa-download"></i>
                        <span>Descargar</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center w-full py-2 px-10 overflow-x-auto">
                <table class="table-fixed w-full min-w-[500px]">
                    <thead class="w-full">
                        <tr class="w-full">
                            <th class="w-1/6 border border-bordes px-4 py-2 ">Nombre</th>
                            <th class="hidden md:table-cell w-1/6 border border-bordes px-4 py-2  ">Apellido</th>
                            <th class="w-1/12 border border-bordes px-4 py-2 ">Dni</th>
                            <th class="w-1/4 border border-bordes px-4 py-2 ">Email</th>
                            <th class="w-1/12 border border-bordes px-4 py-2 ">Telefono</th>
                            <th class="w-1/12 border border-bordes px-4 py-2 ">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($owners as $index => $owner)
                            <tr>
                                <td class="border border-bordes px-4 py-2 ">{{ $owner->name }}</td>
                                <td class="hidden md:table-cell border border-bordes px-4 py-2 ">{{ $owner->surName }}</td>
                                <td class="border border-bordes px-4 py-2 ">{{ $owner->dni }}</td>
                                <td class="border border-bordes px-4 py-2 ">{{ $owner->email }}</td>
                                <td class="border border-bordes px-4 py-2 ">{{ $owner->phone }}</td>
                                <td class="border border-bordes px-4 py-2 flex items-center justify-between ">
                                    <a href="">
                                        <i class="fa-solid fa-eye text-blue-700"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-pen text-yellow-400"></i>
                                    </a>
                                    <form action="{{route('owner.destroy', $owner->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa-solid fa-trash text-red-700"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-3">
                    {{$owners->links()}}
                </div>
              
            </div>
            
        </div>
    </main>
@endsection