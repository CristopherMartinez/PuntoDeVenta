<html>
    <body>
        <!-- <input type="button" value="Enviar variable" id="send"/> -->
        <a  type="button" value="Enviar variable" id="send">Prueba</a>
        <!-- <a  type="button"  href="<?php echo base_url().'/usuario/listaDeseos2'?>"  value="Enviar variable" id="send">Prueba</a> -->

        <div id="datos"></div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#send').click( function() {
    var listaDeseo = localStorage.getItem('listaDeseo');
        $.ajax(
                {
                    type: 'POST',
                    url: 'listaDeseos',
                    // url:'<?php echo base_url()?>/usuario/ShoppingCarController',
                    data: { listaDeseo: listaDeseo },
                    success: function( data ) {
                        $('#datos').html(listaDeseo);
                    }
                }
            )
        }
    );
    </script>
</html>