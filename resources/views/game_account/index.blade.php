<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ゲームアカウント
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <a href="{{route('GameAccount.create')}}">アカウント登録</a>
                    </div>
                    <h3>登録アカウント一覧</h3>
                    <table>
                        <tr>
                            <th>ユーザー名</th>
                            <th>ゲーム名</th>
                            <th>ゲームアカウント名</th>
                            <th>設定</th>
                            <th>詳細を見る</th>
                        </tr>
                        @foreach($GameAccountList as $account)
                        <tr>
                            <td>{{$account->user->name}}</td>
                            <td>{{$account->game->game_name}}</td>
                            <td>{{$account->game_account_name}}</td>
                            <td>
                                @if($account->user_id==Auth::id())
                                 <a href="{{route('GameAccount.edit', ['account'=>$account->id])}}">編集</a>
                                 <a href="{{route('GameAccount.delete', ['account'=>$account->id])}}">削除</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('GameAccount.show', ['account'=>$account->id])}}">詳細を見る</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
