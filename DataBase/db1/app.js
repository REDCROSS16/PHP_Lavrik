const oojs = require('oojs');
oo.ui.alert( 'Something happened!' ).done( function () {
    console.log( 'User closed the dialog.' );
} );