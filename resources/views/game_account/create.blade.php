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
                <select name='game_id'>
                    @foreach ($gamelist as $game)
                        <option value='{{$game->id}}'>{{$game->game_name}}</option>
                    @endforeach    
                </select>
            </div>
            <div>
                <h2>アカウント名</h2>
                <input type="text" name="game_account_name" placeholder="アカウント名">
            </div>
            <div>
                <h2>プラットフォーム</h2>
                 <label>
                  <input type="radio" name="game_account_platform" value="PC">
                  PC
                </label>
                <label>
                  <input type="radio" name="game_account_platform" value="CS">
                  CS
                </label>
                <label>
                  <input type="radio" name="game_account_platform" value="Switch">
                  Switch
                </label>
            </div>
            <div>
                 <h2>性別</h2>
                <label>
                  <input type="radio" name="game_account_gender" value="男">
                  男
                </label>
                <label>
                  <input type="radio" name="game_account_gender" value="女">
                  女
                </label>
                <label>
                  <input type="radio" name="game_account_gender" value="その他">
                  その他
                </label>
            </div>
            <div>
                <h2>プレイ時間帯</h2>
                <input type="time" name="example">　～　<input type="time" name="example">
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
