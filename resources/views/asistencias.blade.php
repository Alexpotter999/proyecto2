
@include('sidebar')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tabla</title>
</head>
<body>
    <form action="/contador">
        <select name="dia" id="">

            <option value="0" >todo el mes</option>
            <option value="01" >01</option>
            <option value="02" >02</option>
            <option value="03" >03</option>
            <option value="04" >04</option>
            <option value="05" >05</option>
            <option value="06" >06</option>
            <option value="07" >07</option>
            <option value="08" >08</option>
            <option value="09" >09</option>
            <option value="10" >10</option>
            <option value="11" >11</option>
            <option value="12" >12</option>
            <option value="13" >13</option>
            <option value="14" >14</option>
            <option value="15" >15</option>
            <option value="16" >16</option>
            <option value="17" >17</option>
            <option value="18" >18</option>
            <option value="19" >19</option>
            <option value="20" >20</option>
            <option value="21" >21</option>
            <option value="22" >22</option>
            <option value="23" >23</option>
            <option value="24" >24</option>
            <option value="25" >25</option>
            <option value="26" >26</option>
            <option value="27" >27</option>
            <option value="28" >28</option>
            <option value="29" >29</option>
            <option value="30" >30</option>
            <option value="31" >31</option>
        </select>
        <select name="mes" id="">
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>

        <input type="text" value=2024 name="año">

        <input type="submit" value="">
    </form>
@if(isset($asistencia))
 <h2>asistencias:{{$asistencia}}</h2>
 <h2>faltas:{{$falta}}</h2>
 <h2>justificantes:{{$justificante}}</h2>

@else
    <h1>retorno</h1>
    <h1>Tabla de la Base de Datos</h1>

    <table>
        <thead>
            <tr>
                <th>fecha</th>
                <th>asistencia</th>
                <!-- Agrega más columnas según tu tabla -->
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->asistencia }}</td>
                    <td>{{ $dato->fecha }}</td>
                    <!-- Agrega más celdas según tu tabla -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

@include('footer')
@endif
