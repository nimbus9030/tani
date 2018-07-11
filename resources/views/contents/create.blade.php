@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> コンテンツ新規作成 </h3>
                </div>
                @if (session('status'))
                <div class="panel-body">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                </div>
                @endif
                <span>サイト名</span>
                <input type="text" class="form-control" placeholder="サイト名入力"><br/>
                <span>ハッシュタグ</span>
                <input type="text" class="form-control" placeholder="#ハッシュタグを入力"><br/>
                
                <span>テンプレート選択</span>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="thumbnail">
                                <img src="{{ asset('img/242x200.png') }}" alt="thumbnail">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">利用する</a> <a href="#" class="btn btn-default" role="button">プレビュー</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="thumbnail">
                                <img src="{{ asset('img/242x200.png') }}" alt="thumbnail">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">利用する</a> <a href="#" class="btn btn-default" role="button">プレビュー</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="thumbnail">
                                <img src="{{ asset('img/242x200.png') }}" alt="thumbnail">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">利用する</a> <a href="#" class="btn btn-default" role="button">プレビュー</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="thumbnail">
                                <img src="{{ asset('img/242x200.png') }}" alt="thumbnail">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">利用する</a> <a href="#" class="btn btn-default" role="button">プレビュー</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p><button class="btn btn-danger">キャンセル</button><button class="btn btn-primary">確認</button></p>
            </div>
        </div>
    </div>
</div>
@endsection
