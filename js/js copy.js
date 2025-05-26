let i = 0;
const text ='Главные новинки';
function printer () {
    if (i < text.length){
        document.getElementById('textBox').textContent += text.charAt(i);
        setTimeout(printer, 200)
        i++
    } else {
        i = 0
        document.getElementById('textBox').textContent ='';

        setTimeout(printer, 400)

    }
}
printer()