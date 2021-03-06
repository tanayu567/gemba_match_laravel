<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            事業所ダッシュボード
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    <div class="company-list">
        @foreach($users as $user)
            <a href="{{ route('users.profile', ['id' => $user->id]) }}">
                <p>{{ $user->name }}</p>
            </a>
            <p>{{ $user->founding_year }} 年</p>
            <p>{{ $user->area }}</p>
        @endforeach
    </div>
    
</x-app-layout>
