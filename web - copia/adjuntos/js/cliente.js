function saludar(){
    console.log("Diseño web 1")
    //alert("Diseño web 1")
    console.log(document);
    console.log(document.getElementById('parrafo1').innerHTML)
    console.log(document.getElementById('parrafo1').getAttribute('style'))
}
function cambiarparrafo2(){
x=document.getElementById('cambiarparrafo2')
if(x=true){
    document.getElementById('parrafo2').setHTMLUnsafe('Fes aragon unam')
}
}
function cambiarfondobody(){
    const colores=['#FFFFFF','#33FF57','#2222FF','#22FF11','#FF2221'];
    const colorAlea=colores[Math.floor(Math.random()*5)];
    console.log(colorAlea);
    document.getElementById("body1").style.backgroundColor=colorAlea;
}