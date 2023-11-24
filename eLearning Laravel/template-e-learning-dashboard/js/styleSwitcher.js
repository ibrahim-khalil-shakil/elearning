function addSwitcher()
{
	var dzSwitcher = '<div class="sidebar-right"><a class="sidebar-right-trigger wave-effect wave-effect-x" href="javascript:void(0)"><span><i class="fa fa-cog fa-spin"></i></span></a><div class="sidebar-right-inner"><div class="tab-content tab-content-default tabcontent-border"><div class="tab-pane fade active show" id="home8" role="tabpanel"><div class="admin-settings"><h4>Pick your style</h4><div><p>Background</p><select class="form-control" name="theme_version" id="theme_version"><option value="light">Light</option><option value="dark">Dark</option></select></div><div><p>Background</p><select class="form-control" name="theme_version" id="theme_version"><option value="light">Light</option><option value="dark">Dark</option></select></div><div><p>Layout</p><select class="form-control" name="theme_layout" id="theme_layout"><option value="vertical">Vertical</option><option value="horizontal">Horizontal</option></select></div><div><p>Sidebar</p><select class="form-control" name="sidebar_style" id="sidebar_style"><option value="full">Full</option><option value="mini">Mini</option><option value="compact">Compact</option><option value="modern">Modern</option><option value="overlay">Overlay</option><option value="icon-hover">Icon-hover</option></select></div><div><p>Sidebar position</p><select class="form-control" name="sidebar_position" id="sidebar_position"><option value="static">Static</option><option value="fixed">Fixed</option></select></div><div><p>Header position</p><select class="form-control" name="header_position" id="header_position"><option value="static">Static</option><option value="fixed">Fixed</option></select></div><div><p>Container</p><select class="form-control" name="container_layout" id="container_layout"><option value="wide">Wide</option><option value="boxed">Boxed</option><option value="wide-boxed">Wide Boxed</option></select></div><div><p>Direction</p><select class="form-control" name="theme_direction" id="theme_direction"><option value="ltr">LTR</option><option value="rtl">RTL</option></select></div><div><p>Body Font</p><select class="form-control" name="typography" id="typography"><option value="roboto">Roboto</option><option value="poppins">Poppins</option><option value="opensans">Open Sans</option><option value="HelveticaNeue">HelveticaNeue</option></select></div><div><p>Navigation Header</p><div><span><input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_color_1"><label for="nav_header_color_1"></label></span> <span><input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_color_2"><label for="nav_header_color_2"></label></span> <span><input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_color_3"><label for="nav_header_color_3"></label></span> <span><input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_color_4"><label for="nav_header_color_4"></label></span> <span><input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_color_5"><label for="nav_header_color_5"></label></span> <span><input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_color_6"><label for="nav_header_color_6"></label></span> <span><input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_color_7"><label for="nav_header_color_7"></label></span> <span><input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_color_8"><label for="nav_header_color_8"></label></span> <span><input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_color_9"><label for="nav_header_color_9"></label></span> <span><input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_color_10"><label for="nav_header_color_10"></label></span> <span><input type="radio" name="navigation_header" value="color_11" class="filled-in chk-col-primary" id="nav_header_color_11"><label for="nav_header_color_11"></label></span> <span><input type="radio" name="navigation_header" value="color_12" class="filled-in chk-col-primary" id="nav_header_color_12"><label for="nav_header_color_12"></label></span> <span><input type="radio" name="navigation_header" value="color_13" class="filled-in chk-col-primary" id="nav_header_color_13"><label for="nav_header_color_13"></label></span> <span><input type="radio" name="navigation_header" value="color_14" class="filled-in chk-col-primary" id="nav_header_color_14"><label for="nav_header_color_14"></label></span> <span><input type="radio" name="navigation_header" value="color_15" class="filled-in chk-col-primary" id="nav_header_color_15"><label for="nav_header_color_15"></label></span></div></div><div><p>Header</p><div><span><input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_color_1"><label for="header_color_1"></label></span> <span><input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_color_2"><label for="header_color_2"></label></span> <span><input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_color_3"><label for="header_color_3"></label></span> <span><input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_color_4"><label for="header_color_4"></label></span> <span><input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_color_5"><label for="header_color_5"></label></span> <span><input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_color_6"><label for="header_color_6"></label></span> <span><input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_color_7"><label for="header_color_7"></label></span> <span><input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_color_8"><label for="header_color_8"></label></span> <span><input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_color_9"><label for="header_color_9"></label></span> <span><input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_color_10"><label for="header_color_10"></label></span> <span><input type="radio" name="header_bg" value="color_11" class="filled-in chk-col-primary" id="header_color_11"><label for="header_color_11"></label></span> <span><input type="radio" name="header_bg" value="color_12" class="filled-in chk-col-primary" id="header_color_12"><label for="header_color_12"></label></span> <span><input type="radio" name="header_bg" value="color_13" class="filled-in chk-col-primary" id="header_color_13"><label for="header_color_13"></label></span> <span><input type="radio" name="header_bg" value="color_14" class="filled-in chk-col-primary" id="header_color_14"><label for="header_color_14"></label></span> <span><input type="radio" name="header_bg" value="color_15" class="filled-in chk-col-primary" id="header_color_15"><label for="header_color_15"></label></span></div></div><div><p>Sidebar</p><div><span><input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_color_1"><label for="sidebar_color_1"></label></span> <span><input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_color_2"><label for="sidebar_color_2"></label></span> <span><input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_color_3"><label for="sidebar_color_3"></label></span> <span><input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_color_4"><label for="sidebar_color_4"></label></span> <span><input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_color_5"><label for="sidebar_color_5"></label></span> <span><input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_color_6"><label for="sidebar_color_6"></label></span> <span><input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_color_7"><label for="sidebar_color_7"></label></span> <span><input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_color_8"><label for="sidebar_color_8"></label></span> <span><input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_color_9"><label for="sidebar_color_9"></label></span> <span><input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_color_10"><label for="sidebar_color_10"></label></span> <span><input type="radio" name="sidebar_bg" value="color_11" class="filled-in chk-col-primary" id="sidebar_color_11"><label for="sidebar_color_11"></label></span> <span><input type="radio" name="sidebar_bg" value="color_12" class="filled-in chk-col-primary" id="sidebar_color_12"><label for="sidebar_color_12"></label></span> <span><input type="radio" name="sidebar_bg" value="color_13" class="filled-in chk-col-primary" id="sidebar_color_13"><label for="sidebar_color_13"></label></span> <span><input type="radio" name="sidebar_bg" value="color_14" class="filled-in chk-col-primary" id="sidebar_color_14"><label for="sidebar_color_14"></label></span> <span><input type="radio" name="sidebar_bg" value="color_15" class="filled-in chk-col-primary" id="sidebar_color_15"><label for="sidebar_color_15"></label></span></div></div></div></div></div></div></div>';
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher);
		
		 const sr = new PerfectScrollbar('.sidebar-right-inner');
		 
		  $('.sidebar-right-trigger').on('click', function() {
				$('.sidebar-right').toggleClass('show');
		  });
	}
}
jQuery(window).on('load',function(){
	
	
	
});
(function($) {
    "use strict"
	addSwitcher();

	
    const body = $('body');
    const html = $('html');

    //get the DOM elements from right sidebar
    const typographySelect = $('#typography');
    const versionSelect = $('#theme_version');
    const layoutSelect = $('#theme_layout');
    const sidebarStyleSelect = $('#sidebar_style');
    const sidebarPositionSelect = $('#sidebar_position');
    const headerPositionSelect = $('#header_position');
    const containerLayoutSelect = $('#container_layout');
    const themeDirectionSelect = $('#theme_direction');

    //change the theme typography controller
    typographySelect.on('change', function() {
        body.attr('data-typography', this.value);
    });

    //change the theme version controller
    versionSelect.on('change', function() {
        body.attr('data-theme-version', this.value);
    });

    //change the sidebar position controller
    sidebarPositionSelect.on('change', function() {
        this.value === "fixed" && body.attr('data-sidebar-style') === "modern" && body.attr('data-layout') === "vertical" ? 
        alert("Sorry, Modern sidebar layout dosen't support fixed position!") :
        body.attr('data-sidebar-position', this.value);
    });

    //change the header position controller
    headerPositionSelect.on('change', function() {
        body.attr('data-header-position', this.value);
    });

    //change the theme direction (rtl, ltr) controller
    themeDirectionSelect.on('change', function() {
        html.attr('dir', this.value);
        html.attr('class', '');
        html.addClass(this.value);
        body.attr('direction', this.value);
    });

    //change the theme layout controller
    layoutSelect.on('change', function() {
        if(body.attr('data-sidebar-style') === 'overlay') {
            body.attr('data-sidebar-style', 'full');
            body.attr('data-layout', this.value);
            return;
        }

        body.attr('data-layout', this.value);
    });

    //change the container layout controller
    containerLayoutSelect.on('change', function() {
        if(this.value === "boxed") {

            if(body.attr('data-layout') === "vertical" && body.attr('data-sidebar-style') === "full") {
                body.attr('data-sidebar-style', 'overlay');
                body.attr('data-container', this.value);
                return;
            }
        }

        body.attr('data-container', this.value);
    });

    //change the sidebar style controller
    sidebarStyleSelect.on('change', function() {
        if(body.attr('data-layout') === "horizontal") {
            if(this.value === "overlay") {
                alert("Sorry! Overlay is not possible in Horizontal layout.");
                return;
            }
        }

        if(body.attr('data-layout') === "vertical") {
            if(body.attr('data-container') === "boxed" && this.value === "full") {
                alert("Sorry! Full menu is not available in Vertical Boxed layout.");
                return;
            }

            if(this.value === "modern" && body.attr('data-sidebar-position') === "fixed") {
                alert("Sorry! Modern sidebar layout is not available in the fixed position. Please change the sidebar position into Static.");
                return;
            }
        }

        body.attr('data-sidebar-style', this.value);

        if(body.attr('data-sidebar-style') === 'icon-hover') {
            $('.dlabnav').hover(function() {
                $('#main-wrapper').addClass('icon-hover-toggle');
            }, function() {
                $('#main-wrapper').removeClass('icon-hover-toggle');
            });
        }
    });

    //change the nav-header background controller
    $('input[name="navigation_header"]').on('click', function() {
        body.attr('data-nav-headerbg', this.value);
    });

    //change the header background controller
    $('input[name="header_bg"]').on('click', function() {
        body.attr('data-headerbg', this.value);
    });

    //change the sidebar background controller
    $('input[name="sidebar_bg"]').on('click', function() {
        body.attr('data-sibebarbg', this.value);
    });
	
	//change the primary color controller
    $('input[name="primary_bg"]').on('click', function() {
        body.attr('data-primary', this.value);
    });

})(jQuery);


