<script>
var $head= document.getElementsByTagName('head')[0],
    target = '#ajax-form'; // replace with the id of your div

var loadData = function(data, index) {
    if (index <= $(data).length) {
        var that = $(data).get(index);
        if ($(that).is('script')) {
            // output script
            var script = document.createElement('script');
            script.type = 'text/javascript';
            if (that.src != '') {
                script.src = that.src;
                script.onload = function() {
                    loadData(data, index + 1);
                };
                $head.append(script);
            } else {
                script.text = that.text;
                $('body').append(script);
                loadData(data, index + 1);
            }
        } else {
            // output form html
            $(target).append($(that));
            loadData(data, index + 1);
        }
    } else {
        $.holdReady(false);
    }
};

$(document).ready(function() {
    $.ajax({
        url: 'ajax-forms/contact-form-1.php', // replace with the url of your php form
        type: 'GET'
    }).done(function(data) {
        $.holdReady(true);
        loadData(data, 0);
    }).fail(function(data, status, error) {
        console.log(error);
    });
});
</script>
