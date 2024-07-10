function validarNum(e){
    console.log(e);
    if(e.keyCode<48 || e.keyCode>57){
        console.log('if');
        return false;
    }
}
function alerta(){
    console.log('soy un mensaje en la consola');
}