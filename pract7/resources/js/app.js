import './bootstrap';

require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/** Sweet Alert 2*/
import Swal from "sweetalert2";
//De aquí en adelante definir las alertas
window.successAlert = function (){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your post has been saved',
        showConfirmButton: false,
        timer: 1900
    })
}
