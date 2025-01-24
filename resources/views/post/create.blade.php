<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create page</title>
</head>
<body>
    <div class="js-gray-cover"></div>
    <form>
        {{-- urlボタンとurlの入力欄 --}}
        <div>
            <div class="js-url-btn">URL</div>
            <div class="js-url-field">
                <input type="text"/>
            </div>
        </div>
        
        {{-- 画像ボタンと画像の投稿欄 --}}
        <div>
            <div class="js-image-btn">画像</div>
            <div class="js-url-field">
                <input type="file"/>
            </div>
        </div>
       
        <div>
            <div class="js-explanation-btn">説明</div>
            <div class="js-url-field">
                <input type="text"/>
            </div>
        </div>
        
    </form>
    <script>
        const urlBtn = document.querySelector('js-url-btn')
        urlBtn.addEventListener("clicik",()=>{
            console.log("clicked")
        })
    </script>
</body>
</html>