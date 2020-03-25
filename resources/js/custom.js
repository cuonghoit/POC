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
        var yearChoosen = $('input[name="year_choosen"]');
        if(yearChoosen.length) {
            yearChoosen.val($('input[name="year"]').val());
        }
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
    });

    $('.btn-print').click(function (e) {
        var form = $(this).closest('form');
        if(form.length) {
            var eleIsPrint = form.find('input[name="isPrintPdf"]');
            jQuery(eleIsPrint).val(true);
            $(form[0]).attr('action', window.location.href);
            $(form[0]).submit();
        }
    });

    // Hide submenus
    $('#body-row .collapse').collapse('hide');

    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-right');

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('.fa-fw').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    $('.main-content').toggleClass('main-content-expanded main-content-colapsed');

    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-content');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }

    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
