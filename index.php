<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <img class="ms_logo" src="./img/logo-small.svg" alt="">
        </header>

        <main>
            <div class="container">
                <div class="ms_box p-5">
                    <div class="p-4 ms_cards mx-3 mt-4" v-for='disk in discs'>
                        <a href="">
                            <img class="ms_img" :src="disk.poster" alt="">
                            <div class="text-center mt-3">
                                <h3>{{disk.title}}</h3>
                                <h5 class="ms_t-g">{{disk.author}}</h5>
                                <div class="ms_t-g">{{disk.year}}</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
<script src="./js/myscript.js"></script>
</body>
</html>