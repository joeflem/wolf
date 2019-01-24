jQuery(document).ready(function ($) {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    $('nav ul li.menu-item-has-children a').click(function (event) {
        if ($(this).closest("li.menu-item").children("ul.sub-menu").length > 0) {
            $(this).closest("li.menu-item-has-children").toggleClass('is-open');
            return false;
        }
    });

    $(".toggle-nav").click(function(){
        $("body").toggleClass("is-nav");
    });

    $('body').addClass('is-loaded');


    // keyboard shortcuts
    Mousetrap.bind(['shift+n'], function(e) {
        if (e.preventDefault) {
            e.preventDefault();
            window.location.assign("/wp-admin/post-new.php")
        } else {
            // internet explorer
            e.returnValue = false;
        }
        _saveDraft();
    });

    // controls
    $("body").click(function(){
        $(".view-controller").removeClass("is-active");
    });
    $(".view-controller").click(function(e){
        e.stopPropagation();
    });

    $('.view-controller .toggle-options').click(function () {
        $('.view-controller').toggleClass('is-active');
    });
    if (localStorage.getItem("view") === 'single') {
        $('.view').removeClass('is-active');
        $('.single-col').addClass('is-active');
        $('body').removeClass('is-two-col');
        $('body').removeClass('is-three-col');
        $('body').addClass('is-single-col');
    } else if (localStorage.getItem("view") === 'two') {
        $('.view').removeClass('is-active');
        $('.two-col').addClass('is-active');
        $('body').removeClass('is-single-col');
        $('body').removeClass('is-three-col');
        $('body').addClass('is-two-col');
    } else if (localStorage.getItem("view") === 'three') {
        $('.view').removeClass('is-active');
        $('.three-col').addClass('is-active');
        $('body').removeClass('is-single-col');
        $('body').removeClass('is-two-col');
        $('body').addClass('is-three-col');
    }
    $('.single-col').click(function () {
        $('.view').removeClass('is-active');
        $(this).addClass('is-active');
        $('body').removeClass('is-two-col');
        $('body').removeClass('is-three-col');
        $('body').addClass('is-single-col');
        localStorage.setItem("view", "single");
    });
    $('.two-col').click(function () {
        $('.view').removeClass('is-active');
        $(this).addClass('is-active');
        $('body').removeClass('is-single-col');
        $('body').removeClass('is-three-col');
        $('body').addClass('is-two-col');
        localStorage.setItem("view", "two");
    });
    $('.three-col').click(function () {
        $('.view').removeClass('is-active');
        $(this).addClass('is-active');
        $('body').removeClass('is-single-col');
        $('body').removeClass('is-two-col');
        $('body').addClass('is-three-col');
        localStorage.setItem("view", "three");
    });
});

