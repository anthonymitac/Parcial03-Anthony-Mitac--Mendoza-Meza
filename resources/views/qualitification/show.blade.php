<h3>DATOS DEL PROFESIONAL</h3>

    <form method="post" >
            {{ csrf_field() }}

            <section>
                    
                        <p>ID: <?= $profession ['id']?></p>
                        <p>NOMBRE DEL PROFESIONAL : <?=$profession ['name']?></p>
                        <p>DNI : <?=$profession ['dni']?></p>
                        <p>PROFESION: <?=$profession ['profession']?></p>
            </section>

            <p>Calificacion:<p><select name="point">

                    <option>1</option>
                    
                    <option>2</option>
                    
                    <option>3</option>

                    <option>4</option>
                    
                    <option>5</option>
                    
                    </select>
            <br>
            <br>
            <br>

            <p>MES:<p><select name="month">

                    <option>1</option>
                    
                    <option>2</option>
                    
                    <option>3</option>

                    <option>4</option>
                    
                    <option>5</option>
                    
                    <option>6</option>

                    <option>7</option>
                    
                    <option>8</option>
                    
                    <option>9</option>

                    <option>10</option>
                    
                    <option>11</option>
                    
                    <option>12</option>
                    
                    </select>
            <br>
            <br>
            <br>
            <p>ESCRIBE TU COMENTARIO:</p>
            <textarea name="descryption" rows="10" cols="40">Escribe aquí tu comentario</textarea>
            
            <br>
            <br>
            <br>
            <input type="submit" value="Enviar">
    </form>
    <a href="{{route('professional.index')}}"><h4>VOLVER</h4></a> 