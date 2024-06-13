# テンプレート

## 使用環境
- node@18.12.1
- Gulp@4.0.2
- Gulp Dart Sass
- Webpack@5.88.2
- WordPress@6.4.2

## プラグイン・ライブラリ
- jQuery@3.7.1

## サイトマップ
```

```

## ディレクトリ構成
- _src・・・作業用ディレクトリ
- dist・・・納品用テーマディレクトリ

## 使用方法
1. ターミナルでルートフォルダに移動後、`npm install`でnpmインストール
2. gulpの起動は`npx gulp`
3. 作業時には`git switch -c ブランチ名`でブランチを切って作業

## 作業ディレクトリについて
-  PHP・・・テーマ用のPHPファイルを作成します。『parts』ディレクトリに必要に応じてパーツを切り分けて格納します。
- scss・・・基本FLOCSSベースに分割されています。クラス命名規則はBEMを基本として、ブロックごとにsassファイルを作成して管理します。詳細は`**CSS設計について**`に記載します。
- js・・・必要に応じてJSファイルを作成して記述していきます。app.jsで全てのJSをwebpackを介してバンドルします。
- images・・・画像ファイルを用途ごとにディレクトリ分けして格納します。『common』にはサイト内で共通利用される画像を、そのほかはページごとにディレクトリ分割していきます。

## CSS設計について
### ファイル構成について
- 『global』に変数やmixin、function等が格納されています。変数等を使用する場合は、globalを@useで読み込む必要があります。こちらで設定しているmixinやfunctionは都合に合わせてご利用ください。
- 『foundation』にリセットCSSやベースのCSSが記述されています。base.scssにベースとなるCSSを必要に応じて記入してください。
- 『layout』にレイアウトの役割の記述がされています。（接頭詞l-）
- 『utility』に装飾やdisplay: none;のユーティリティの役割をするクラスなどが格納されています。（接頭詞u-）JSで制御するクラスでスタイルが必要なものもここに格納してください。（接頭詞js-）
- 『component』にボタンなど使い回しのスタイルのクラスが格納されています。（接頭詞c-）
- 『project』にコンポーネント単位以上の大きさの使い回しの効くパーツが格納されています。基本的にページを跨いで使用されるパーツを格納します。（接頭詞p-）
- 『pages』に各ページでのみ使用されるブロックを格納します。各ページ固有の接頭詞を与えてブロックを作成します。（フロントページは fr- 等）

### BEMの命名について
- Block__Element--Modifireの命名を基本とします。
- 単語の繋がりは接頭詞と区別するため、キャメルケースを基本とします。（例：p-navList）
- クラス名のバッティングや作業のコンフリクトの可能性を避けるため、ブロック名ごとにSassファイルを作成することを基本とします。

## 備考
- CSSは役割に応じてクラス名を当てて、スタイルを管理するように心がけてください。そのため、1つの要素に複数クラスが付与されることは問題ないです。（例：`<h1 class="p-news__title c-title js-fadeIn">`）
- 画像ファイル名の命名規則は任意としますが、統一の取れたものであると望ましいです。
- 画像はwebp形式に変換されるタスクが含まれています。拡張子に注意してください。
