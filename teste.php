<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #open-btn {
        }
        #dialog {
            width: 80%;
            height: 70%;
            position: absolute;
            top: 10%;
            left: 10%;
            background: hsl(0, 0%, 80%);
            display: none;
        }
        .fade {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background-color: hsla(0, 0%, 30%, 0.8);
        }
    </style>
</head>
<body>
    <a href="qualquer coisa" id="open-btn">Clique aqui</a>
    <div id="dialog">
        <a href="#" id="close-btn">Fechar</a>
        <form action="">
            <fieldset>
                <input type="text" name="nome">
            </fieldset>
            <fieldset id="phones">
                <a href="#" id="add-phone">Adicionar telefone</a>
            </fieldset>
        </form>
    </div>
    <script>
        function get(id) {
            return document.getElementById(id);
        }
        let open = get('open-btn');
        let close = get('close-btn');
        let dialog = get('dialog');
        let addPhone = get('add-phone');
        let phones = get('phones');
        
        open.addEventListener('click', function(evt) {
            evt.preventDefault();
            dialog.style.display = 'block';
            let fade = document.createElement('div');
            fade.className = 'fade';
            fade.id = 'fade';
            document.body.appendChild(fade);
        });
        close.addEventListener('click', function(evt) {
            evt.preventDefault();
            dialog.style.display = 'none';
            get('fade').remove();
        });
        addPhone.addEventListener('click', function(evt) {
            evt.preventDefault();
            let ipt = document.createElement('input');
            ipt.type = 'text';
            // ipt.name = 'phone' + phones.children.length;
            ipt.name = 'phones[]';
            // phones.appendChild(ipt);
            phones.appendChild(ipt);
        });
    </script>
</body>
</html>