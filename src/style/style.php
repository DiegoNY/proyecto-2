<style>
    :root{
    /*colores de las letras*/
    --white:#FFFFFF;
    --very-light-pink: #C7C7C7;
    --text-input-field:#F7F7F7;
    --hospital-green: #060605;
    /*tamaño de la letra*/
    --sm:14px;
    --md:16px;
    --lg:18px; 
}
body{
    /*quitando margenes y definiendo el tipo de letra*/
    margin: 0;
    font-family: 'Quicksand', sans-serif;
}
.login{
    width: 100%;
    /*un alto del 100 % que se vee en la pantalla eso es view height = vh*/
    height: 78vh;
    /*centrar elementos con css grid*/
    display: grid;
    place-items: center;
}
.form-container{
   /*creando 3 filas*/ 
    display: grid;
    /*titulo y subtitulo auto password e input una fraccion el resto que seria el button lo que sobre :D*/
    grid-template-rows: auto 1fr auto;
    /*colocamos un ancho por que no se muestra en toda la pantalla*/
    width: 300px;
}

.title{
    /*utilizandeo las variables colocamos el tamaño de letra*/
    font-size: var (--lg);
    /*un margen para el texto recuerda todos son cajas u.u */
    margin-bottom: 12px;
    /*centramos el titulo*/
    text-align: center;

}
.subtitle{
    /*colocamos color que esta en la varible*/
    color: var(--very-light-pink);
    /*colocamos el tamaño de la letra*/
    font-size: var(--md);
    /*definimos el grosor de la letra */
    font-weight: 300px;
    /*colocamos un margin para que no se cruzen los parrafos*/
    margin-top: 0;
    /*margen para separarlo de los inputs */
    margin-bottom: 32px;
    /*centramos*/
    text-align: center;
}
.form{
    /*desplegamos las cajas en un formato flexible*/
    display: flex;
    /*las direccionamos*/
    flex-direction: column;
}
.form a{
    /*cambiamos el color al link*/
    color: var(--hospital-green);
    font-size: var(--sm);
    text-align: center;
    text-decoration: none;
    margin-bottom: 52px;

}
.label{
    /*definimos el tamaño de letra*/
    font-size:var(--sm);
    /*definimos el grosor*/
    font-weight: bold;
    /*definimos el margen*/
    margin-bottom: 4px;
}
.input{
    /*colocamos color con las variables */
    background-color: var(--text-input-field);
    /*quitamos el borde*/
    border: none;
    /*redondeamos los bordes*/
    border-radius: 8px;
    /*colocamos un alto */
    height: 45px;
    /*colocamos tamaño de letra con variables*/
    font-size: var(--md);
    /*colocamos relleno*/
    padding: 5px;
    /*para que se vea mejor :p*/
    margin-bottom: 12px;
}
.input-email {
    margin-bottom: 22px;
}
.primary-button{
    /*colocamos el color con la varible*/
    background-color: var(--hospital-green);
    /*colocamos el radio de los bordes*/
    border-radius: 8px;
    /*le quitamos bordes*/
    border: none;
    /*colocamos color con las varables*/
    color: var(--white);
    /*colcando ancho ocupa el 100% de la caja*/
    width: 100%;
    /*muestra manita no flecho :o*/
    cursor: pointer;
    /*agrandamos la letra*/
    font-size: var(--md);
    /*le colocamos un grosor :o*/
    font-weight: bold;
    /*le agregamos altura*/
    height: 50px;

}
.secondary-button{
    /*colocamos el color con la varible*/
    background-color: var(--white);
    /*colocamos el radio de los bordes*/
    border-radius: 8px;
    border: 1px solid var(--hospital-green);
    /*colocamos color con las varables*/
    color: var(--hospital-green);
    /*colcando ancho ocupa el 100% de la caja*/
    width: 100%;
    /*muestra manita no flecho :o*/
    cursor: pointer;
    /*agrandamos la letra*/
    font-size: var(--md);
    /*le colocamos un grosor :o*/
    font-weight: bold;
    /*le agregamos altura*/
    height: 50px;

}
.login-button{
    /*margen de alto*/
    top: 14px;
    /*margen alrededor de las cajas*/
    margin-bottom: 30px;
}
/*responsive :o*/
/*para que el logo aparezca cuando la pantalla sea menor a 640 px :o*/
@media(max-width:640px){
    /*desplegamos el logo para poder verlo*/
    .logo{
        display: block;
    }
    .secondary-button{
    /*para poder moverlo a gusto :p*/
    position: absolute;
    width: 300px;
    /*lo colocamos en la posicion 0*/
    bottom: 0;
    margin-bottom: 28px;
}
}

/*estilos para tabla */ 
#contenedor-tabla{
        margin-top: 80px;
    }

    .cont{
        width: auto;
    }
    .conte{
        margin-top: 141px;
        position: relative;
    }
    .nombre-flotante{
        position: absolute ;
        top: 5px;
        left: 23px;
        font-weight: bold;
        z-index: 1;
        padding: 15px;
    }
    /*responsive*/
    @media(max-width:640px){
        
    }

</style>