<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="root" class="container">
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>
        <div class="select-container">
            <select v-model="selectGenre" name="" id="">
                <option disabled value="">Please select one</option>
                <option value="all">ALL</option>
                <option v-for="genre in arrayGenre" :value="genre">{{genre}}</option>                
            </select>
        </div>
        <div class="cds-container container">
            <!-- Disco ad esempio -->
            <div>
                <img src="disc.poster" alt="">
                <h3></h3>
                <span class="author"></span>
                <span class="year"></span>
            </div>
        </div>
    </div>



    <script src="js/main.js" charset="utf-8"></script>
</body>

</html>
</html>