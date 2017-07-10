$('document').ready(function() {

    $('.like_button').on("click",function () {
        //$(this).toggleClass('fa-thumbsup').css('color','blue');
        var x = $(this);
        $.post("like.php",
            {
                post_ID : $(this).parent().children().find('.pid').html(),
                no_of_likes :$(this).children().html()
            },
            function(data,status) {
            alert("Data: " + data + "\nStatus: " + status);
            console.log(x);
             x.children().html(data);


        });
    });

    // $('.edit').on("click",function() {
    //     // body...
    //     var x = $(this);
    //     alert(x.parent().children().find('.pcontent').html());
    // });
});
