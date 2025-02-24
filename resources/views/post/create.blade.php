<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create page</title>
    <style>
        body{
            z-index: 1;
        }
        /* hiddenクラス,tailwindを使っている場合は記載不要  */
        .hidden{
            position: absolute;
            opacity:0;
            z-index:-1;
            transition:.3s
        }
        .show{
            position: absolute;
            opacity:1;
            z-index: 2;
        }
        .js-gray-cover{
            position:fixed;
            top:0;
            left:0;
            width:100vw;
            height:100dvh;
            background: #00000090;
            cursor:pointer;
        }
        .js-modal-content{
            max-width:500px;
            min-height: 300px;
            background: white;
            top:100px;
            margin:0 auto;
            left:0;
            right:0;
            padding:10px;
            border-radius:10px;
        }
        .modal-btn{
            cursor:pointer;
        }

    </style>
</head>
<body>
    {{-- ボタン押下時の背景、hiddenクラスで隠す --}}
    <div class="js-gray-cover hidden"></div>

    <form class="w-full">
        {{-- urlボタンとurlの入力欄 --}}
        <div>
            <div class="js-url-btn modal-btn">URL(クリックするとURL入力のモーダルが開く)</div>
            {{-- hiddenクラスで隠す --}}
            <div class="js-url-content hidden js-modal-content">
                <label>url入力</label>
                <input type="text"/>
            </div>
        </div>
        
        {{-- 画像ボタンと画像の投稿欄 --}}
        <div>
            <div class="js-image-btn modal-btn">画像(クリックすると画像入力のモーダルが開く)</div>
            {{-- hiddenクラスで隠す --}}
            <div class="js-image-content hidden js-modal-content">
                <label>画像選択</label>
                <input type="file"/>
            </div>
        </div>
       
        {{-- 説明ボタンと説明の入力欄 --}}
        <div>
            <div class="js-explanation-btn modal-btn">説明(クリックすると説明入力のモーダルが開く)</div>
            {{-- hiddenクラスで隠す --}}
            <div class="js-explanation-content hidden js-modal-content">
                <label>説明入力</label>
                <input type="text"/>
            </div>
        </div>
    </form>
    <script>
        // モーダル（ボタンを押した際の入力欄）要素を全て取得
        const modalContent = document.querySelectorAll(".js-modal-content")
        const modalOpendBackGround = document.querySelector(".js-gray-cover")

        //背景を押下したら背景・モーダルを非表示に（showクラスを削除）
        modalOpendBackGround.addEventListener("click",()=>{
            modalOpendBackGround.classList.remove("show")
            modalContent.forEach((modal)=>{
                modal.classList.remove("show")
            })
        })

        //各ボタン押下時にグレー背景・モーダルを表示（showクラスを付与）
        const setupModalToggle = (buttonSelector, modalSelector) => {
            const button = document.querySelector(buttonSelector);
            const modalContent = document.querySelector(modalSelector);
            if (button && modalContent) {
                button.addEventListener("click", () => {
                    modalOpendBackGround.classList.add("show");
                    modalContent.classList.add("show");
                });
            } else {
                console.log("エラー")
            }
        }
        //ボタンとモーダル要素のクラスを指定し、実行
        setupModalToggle('.js-url-btn', '.js-url-content');
        setupModalToggle('.js-image-btn', '.js-image-content');
        setupModalToggle('.js-explanation-btn', '.js-explanation-content');
    </script>
</body>
</html>