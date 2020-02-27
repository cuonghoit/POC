$(document).ready(function () {
    $('.navbar .dropright.dropdown-item.submenu .dropdown-toggle').on('click', function (e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('dropright')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show')
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });
    $('.btn-reject').click(function (e) {
        var form = $(this).closest('form');
        if(form.length) {
            $(form[0]).attr('action', $(this).data('action'));
            $(form[0]).submit();
        }
    });

    $('.btn-search').click(function (e) {
        var form = $(this).closest('form');
        if(form.length) {
            $(form[0]).attr('action', window.location.href);
            $(form[0]).submit();
        }
    })

});
