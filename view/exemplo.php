<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Hide, show e toggle - jQuery </title>
    <style type="text/css" media="screen">
        div{
            width: 100px;
            height: 100px;
            background-color:#008080;
            padding:7px;
            border:solid 1px #c3c3c3;
        }
    </style>
</head>
<body>
    <button id="btn-hide"> Hide </button>
    <button id="btn-show"> Show </button>
    <button id="btn-toggle"> Toggle </button>
    <hr />
    <div id="container">
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#btn-hide").click(function(){
           $('#container').hide('fast');
        });
        $("#btn-show").click(function(){
            $('#container').show('slow');
        });
        $("#btn-toggle").click(function(){
            $('#container').toggle(2000, function() {
                $('#container').css("background-color", randColor)
            });
        });
        //Função de callback que retorna uma cor
        function randColor () {
            var color, index;
            color = ''
            index = Math.floor( ( Math.random() * 6) + 1) 
            switch(index){
                case 1:
                    color = '#0000FF'
                    break;
                case 2:
                    color = '#00FA9A'
                    break;
                case 3:
                    color = '#483D8B'
                    break;
                case 4:
                    color = '#800000'
                    break;
                case 5:
                    color = '#B8860B'
                    break;
                default:
                    color = '#C71585'
            }
            return color;
        }
    });
</script>
</html>