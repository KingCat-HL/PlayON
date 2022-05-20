$('#formLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    //alert(password);

    if (usuario.lenght == "" || password== "") {
        Swal.fire({
            icon:"warning",
            title: "Debe Ingresar un Usuario y/o Contraseña",
        });
        return false;

    }else{
        $.ajax({
            url:"DB/login.php" ,
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            success:function(data){
                if (data == "null") {
                    Swal.fire({
                        icon:"error",
                        title:"usuario y/o contraseña incorrectos",
                    });
                }else{
                    Swal.fire({
                        icon:"success",
                        title:"Conexion establecida, Bienvenido",
                        confirmButtonColor:"#3085d6",
                        confirmButtonText:"Ingresar"
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "Vistas/pag_inicio.php";
                        }
                    })
                }
            }
        });
    }
});


//ACA COMIENZA LA VALIDACION PARA EL REGISTRO DE USUARIOS

$('#formRegistroLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#rusuario").val());
    var password = $.trim($("#rpassword").val());
    //alert(password);

    if (usuario.lenght == "" || password== "") {
        Swal.fire({
            icon:"warning",
            title: "Debe llenar los campos",
        });
        return false;

    }else{
        $.ajax({
            url:"DB/Registro.php" ,
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            success:function(data){
                    Swal.fire({
                        icon:"success",
                        title:"Tu usuario y contraseña se han guardado",
                        confirmButtonColor:"#3085d6",
                        confirmButtonText:"Ingresar"
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "Vistas/pag_inicio.php";
                        }
                    })
                
            }
        });
    }
});
