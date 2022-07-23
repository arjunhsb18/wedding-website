
$(document).ready(function() {
    var playing = false;
    $("#bukaundangan").click(function(e){
        e.preventDefault()
        if (playing == false) {
            document.getElementById('playAudio').play();
        }
        $(this).hide()
        $('#yth').show()
        $('#services,#features,#projects,#pricing,#team,#blog,#contact,footer').show();
        AOS.init();
        $('.hero').toggleClass('changed')
    })
    
});