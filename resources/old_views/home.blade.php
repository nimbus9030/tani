@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">コンテンツ管理画面
                    <button type="button" class="btn btn-primary btn-sm">新規作成</button>
                </div>
                @if (session('status'))
                <div class="panel-body">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">#</th>
                            <th scope="col">サイト名</th>
                            <th scope="col">ハッシュタグ</th>
                            <th scope="col">公開サイト</th>
                            <th scope="col">作成日</th>
                            <th scope="col">更新日</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="far fa-trash-alt"></i></td>
                            <th scope="row">1</th>
                            <td><a href="edit/#">デモ１</td>
                            <td>#sibusya</td>
                            <td><a href=""><i class="fas fa-external-link-alt"></i></a> </td>
                            <td>2018-01-01 00:00:00</td>
                            <td>2018-01-03 00:00:00</td>
                        </tr>
                        <tr>
                            <td><i class="far fa-trash-alt"></i></td>
                            <th scope="row">2</th>
                            <td>デモ１</td>
                            <td>#sibusya</td>
                            <td><a href=""><i class="fas fa-external-link-alt"></i></a> </td>
                            <td>2018-01-01 00:00:00</td>
                            <td>2018-01-03 00:00:00</td>
                        </tr>
                        <tr>
                            <td><i class="far fa-trash-alt"></i></td>
                            <th scope="row">3</th>
                            <td>デモ１</td>
                            <td>#sibusya</td>
                            <td><a href=""><i class="fas fa-external-link-alt"></i></a> </td>
                            <td>2018-01-01 00:00:00</td>
                            <td>2018-01-03 00:00:00</td>
                        </tr>
                    </tbody>
                </table>
                <!-- <div class="panel-body">
                    Instagram hasgtag
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store') }}">
                        {{ csrf_field() }}
                        
                        @if ( $tag )
                            <input id="tag" name="tag" value="{{ $tag }}" type="text">
                        @else
                            <input id="tag" name="tag" value="{{ old('tag') }}" type="text" placeholder="#sample tag">
                        @endif
                        
                        <button type="submit" class="btn btn-primary">
                            submit
                        </button>
                    </form>
                </div>
                <div class="panel-body">
                    レイアウトを編集する
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{ url('editor') }}'">
                            editor
                    </button>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
