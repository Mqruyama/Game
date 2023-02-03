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
                    <form action="{{route('GameAccount.update', ['account'=>$account->id])}}" method="POST">
            @csrf
             <div>
                <h2>ゲーム</h2>
                <select name='game_id'>
                    @foreach ($gamelist as $game)
                        <option value='{{$game->id}}'>{{$game->game_name}}</option>
                    @endforeach    
                </select>
            </div>
            <div>
                <h2>アカウント名</h2>
                <input type="text" name="game_account_name" placeholder="アカウント名"
                value="{{$account->game_account_name}}"/>
            </div>
            <h2>プラットフォーム</h2>
                <input type="text" name="game_account_name" placeholder="PS4/PC"
                value="{{$account->game_account_platform}}"/>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="{{route('GameAccount.index')}}">戻る</a>
        </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
