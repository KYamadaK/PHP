# フォルダの説明

etc : 過去に作成したスクリプト、どこで使えるかはイマイチわからん
learn_php : 練習用スクリプト
paiza : オンライン学習プラットフォームのpaizaで習ったコードを載せてます。

# 注意点
WindowsでPHPを使う場合は  
「Visual Studio 2015 の Visual C++ 再頒布可能パッケージ」が必要  

## ファイルを管理対象からはずす
git rm --chached [ファイル名]

## git log ascii 文字化け回避
git config --global core.quotepath false  
git config --global core.pager "LESSCHARSET=utf-8 less"   
git config --global core.ignorecase false  

# はじめに

# はじめの一歩

最初のLaravelのコマンド  

$ pwd
$ ls
$ laravel new myblog
$ php artisan serve



