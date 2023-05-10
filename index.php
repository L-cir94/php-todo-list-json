<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js" integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP-to-do-list</title>
</head>



<body class="">
    <header class="bg-dark text-light">
    <h1>PHP-to-do-list</h1>
    </header>
    <main>
    <div class="container" id="app">
        <div class="row">
                <div class="card mt-5 p-2 shadow">
                    <div class="card-header">
                        <p class="card-text">Aggiungi qualcosa alla tua lista</p>
                    </div>
                    <ul class="list-unstyled">
                        <li class="py-1" v-for="task in tasks" :class="{'text-decoration-line-through': task.done }"><button class="me-2 my_button" @click="removeElement(index)"><i class="fa-regular fa-trash-can"></i></button>  <button class="me-2 my_button" ><i class="fa-solid fa-check"></i></button>{{task.text}}</li>
                    </ul>
                    <div class="card-footer text-muted">
                        <input type="text" class="w-50" placeholder="Scrivi qui quello che vuoi aggiungere" v-model="newTask" @keyup.enter="addTask()">
                        <button class="w-50" type="submit"@click="addTask()">Aggiungi</button>
                    </div>
                </div>
        </div>
    </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js" integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>