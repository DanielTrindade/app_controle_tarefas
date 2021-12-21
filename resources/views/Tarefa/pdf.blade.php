<html>
    <head>
        <style>
            .titulo {
                border: 1px;
                background-color: gray;
                text-align: center;
                width:100%;
                text-transform: uppercase;
                font-weight: bold;
                margin-bottom: 25px;
            }

            .tabela {
                width: 100%;
            }
            .tabela th {
                text-align: left;
            }
        </style>
    </head>
    <body>
       <div class="titulo"> Lista de Tarefas</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data Limite</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $key => $tarefa)
                    <tr>
                        <td>{{$tarefa->id}}</td>
                        <td>{{$tarefa->tarefa}}</td>
                        <td>{{date('d/m/Y',strtotime($tarefa->data_limite_conclusao))}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

