<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/schedual/"> -->
    <title>Schedual</title>
    <style>

        table, th, td{
            border: solid 1px;
            text-align: center;
            padding: 5px 5px 1px 5px;
        }
        
        .online{
            background-color: lightgoldenrodyellow;
        }

        #header{
            font-family:'Courier New', Courier, monospace;
            font-size: 16px;
            font-weight: bold;
        }

        #message{
            font-family:sans-serif;
            font-size: 16px;

            color: green;
        }

        .resaltado {
            color: red;
            font-weight: bold;
    }
    </style>
</head>
<body>
    <h2>My Schedual</h2>
    <p id="message"><h3 id="message-color"></h3></p>
    <main>
        <table>
            <tr>
                <th id="header">Hora</th>
                <th id="header">Lunes</th>
                <th id="header">Martes</th>
                <th id="header">Miercoles</th>
                <th id="header">Jueves</th>
                <th id="header">Viernes</th>
                <th id="header">Sabado</th>
                <th id="header">Domindo</th>
            </tr>
            <tr>
                <td>09h00 - 10h00</td>
                <td class="online">Practicas preprofesionales</td>
                <td>---</td>
                <td class="online">Practicas preprofesionales</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>10h00 - 11h00</td>
                <td class="online">Practicas preprofesionales</td>
                <td>---</td>
                <td class="online">Practicas preprofesionales</td>
                <td>---</td>
                <td>---</td>

            </tr>
            <tr>
                <td>11h00 - 12h00</td>
                <td class="online">Practicas preprofesionales</td>
                <td>---</td>
                <td class="online"  >Practicas preprofesionales</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>12h00 - 13h00</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>13h00 - 14h00</td>
                <td class="danza">Danza</td>
                <td>---</td>
                <td class="danza">Danza</td>
                <td>---</td>
                <td class="danza">Danza</td>
            </tr>
            <tr>
                <td>14h00 - 15h00</td>
                <td class="danza">Danza</td>
                <td>---</td>
                <td class="danza">Danza</td>
                <td>---</td>
                <td class="danza">Danza</td>
            </tr>
            <tr>
                <td>15h00 - 16h00</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>17h00 - 18h00</td>
                <td>---</td>
                <td>---</td>
                <td class="online">Etica</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>18h00 - 19h00</td>
                <td class="proyectos">Proyectos de software</td>
                <td class="bases">Base de datos II</td>
                <td class="online">Etica</td>
                <td>Desarrollo de software</td>
                <td>---</td>
            </tr>
            <tr>
                <td>19h00 - 20h00</td>
                <td class="proyectos">Proyectos de software</td>
                <td class="bases" >Base de datos II</td>
                <td class="online">Etica</td>
                <td>Desarrollo de software</td>
                <td>---</td>
            </tr>
            <tr>
                <td>20h00 - 21h00</td>
                <td class="proyectos">Proyectos de software</td>
                <td class="bases">Base de datos II</td>
                <td>---</td>
                <td>Desarrollo de software</td>
                <td>---</td>
            </tr>
        </table>
    </main>
    <script src="<?= base_url('javascript/schedual/index.js') ?>"></script>
</body>

</html>