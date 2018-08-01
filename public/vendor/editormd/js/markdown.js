var Editormd;
$(function () {
    editormd.emoji = {
        path: "//staticfile.qnssl.com/emoji-cheat-sheet/1.0.0/",
        ext: ".png"
    };
    Editormd = editormd({
        id: "editormd_id",
        path:window.location.protocol+'//'+window.location.host+'/vendor/lib/'
    });
});