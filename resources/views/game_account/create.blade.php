<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ゲームアカウント　作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('GameAccount.insert')}}" method="POST">
            @csrf
             <div>
                <h2>ゲーム</h2>
                <select name='game_account[game_id]'>
                    <option value='1'>Apex</option>
                </select>
            </div>
            <div>
                <h2>アカウント名</h2>
                <input type="text" name="game_account[game_account_name]" placeholder="アカウント名"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="{{route('GameAccount.index')}}">戻る</a>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
