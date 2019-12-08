window.Popper = require("popper.js").default;
window.$ = window.jQuery = require("jquery");
require('bootstrap');
require('perfect-scrollbar');
require('@coreui/coreui');
require('@fortawesome/fontawesome-free/js/all');

window.Quill = require('quill/dist/quill');


if ($('#editor_pt').length) {
    var quill_pt = new Quill('#editor_pt', {
        modules: {

        },
        theme: 'snow'  // or 'bubble'
    });

    quill_pt.on('text-change', function (delta, oldDelta, source) {
        if (source == 'api') {
            console.log("An API call triggered this change.");
        } else if (source == 'user') {
            $("textarea[name='editor_pt']").val(quill_pt.root.innerHTML);
        }
    });

    if (editor_pt) {
        quill_pt.root.innerHTML = editor_pt;
    }
}

if ($('#editor_en').length) {
    var quill_en = new Quill('#editor_en', {
        modules: {

        },
        theme: 'snow'  // or 'bubble'
    });

    quill_en.on('text-change', function (delta, oldDelta, source) {
        if (source == 'api') {
            console.log("An API call triggered this change.");
        } else if (source == 'user') {
            $("textarea[name='editor_en']").val(quill_en.root.innerHTML);
        }
    });


    if (editor_en) {
        quill_en.root.innerHTML = editor_en;
    }
}

if ($('#editor_fr').length) {
    var quill_fr = new Quill('#editor_fr', {
        modules: {

        },
        theme: 'snow'  // or 'bubble'
    });

    quill_fr.on('text-change', function (delta, oldDelta, source) {
        if (source == 'api') {
            console.log("An API call triggered this change.");
        } else if (source == 'user') {
            $("textarea[name='editor_fr']").val(quill_fr.root.innerHTML);
        }
    });
    
    if (editor_fr) {
        quill_fr.root.innerHTML = editor_fr;
    }
}












