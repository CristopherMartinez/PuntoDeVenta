
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>

        <style>
            .image-container {
            position: relative;
            display: inline-block;
            }

            .image-description {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            overflow: hidden;
            transition: height 0.5s;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            }

            .image-container:hover .image-description {
            height: 50px;
            
            }

            .image-description::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            margin-left: -10px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid rgba(0, 0, 0, 0.7);
            
            }

        </style>
</head>

<body class="backgrounFooter">
    <div class="container">
        <br>
        <div class="alert alert-primary" role="alert">
            <h3 style="color:purple; font-weight:bold;">PROXIMAMENTE NUEVOS LANZAMIENTOS</h3>
        </div>
        
        <div class="row">
            <?php
                if(isset($lanzamientos)){

                    foreach($lanzamientos as $value){
                        echo "
                        <div class='col-md-4 col-sm-6 col-xs-12'>
                           
                                <div class='card'>
                                        <label style='color:black; font-size:18px;'>Fecha de salida: $value[fechaSalida]</label>
                                        <div class='image-container' style='padding-top:5px;'>
                                            <img src='".base_url()."/images/$value[imagen]' class='card-img-top' style='height:150px; border-radius:10px;'>
                                            <div class='image-description'>$value[descripcion]</div>
                                        </div>
                                        <div class='card-body'>
                                            <h5 class='card-title' style='color:black;'>$value[nombre]</h5>
                                            <p style='color:black; font-size:18px;'>$value[nombreConsola]</p>
                                            <div>
                                                <span>
                                                    <button type='button' class='btn btn-outline-primary' disabled style='color:black; border-color:black; margin-top:10px; font-weight:bolder;'>Precio: $$value[precio]</button>
                                                </span>
                                                <span style='padding-left: 5px;'>
                                                    <button type='submit' class='btn btn-success' style='margin-top:10px;' onclick='avisar()'>Avisarme</button>
                                                </span>
                                            </div>
                                        </div>
                                </div>
                            
                        </div>";

                
                    }
                }else{
                    echo"
                    <h2 style='color:white;'>Espera proximos lanzamientos</h2>
                    ";
                }          
            ?>
        </div>

       

    </div>



</body>

<script>
    function avisar(){
        Swal.fire({
                icon: 'success',
                title: 'Recordatorio',
                text:'Se te avisara posteriormente',
                showConfirmButton: true
            });
    }
</script>

