import './bootstrap';

import Dropzone from 'dropzone';
Dropzone.autoDiscover = false; 

const dropzone = new Dropzone('#dropzone', {

    dictDefaultMessage: 'Imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'borrar archivo', 
    maxFiles: 1,
    uploadMultiple: false

});