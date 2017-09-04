jQuery(document).ready(function(){
  jQuery('.bxslider').bxSlider({

  	 mode: 'horizontal',
  	 auto: true,
  	 adaptiveHeight: true,
  	 useCSS: true,
  	 responsive: true,
  	 slideWidth: 860,
  	 controls: false,
  	 easing: 'ease-in'
  });

    jQuery(".panel-default:nth-child(n+2):nth-child(-n+8) .panel-heading .panel-title a").addClass("collapsed");

    var bodysize = jQuery("body").width();

    jQuery("iframe").css('width', bodysize);

    for (i = 1; i < 8; i++) { 
          resize_menu(i);
      }
    

    click_to_display_search();
    click_to_display_search_mobile();


});

function resize_menu(hsize){

    var height=[];

    jQuery(".pricelist .col-md-3 .row.price-content:nth-child("+hsize+")").each(function(){

      var hary = jQuery(this).height();
     
     height.push(hary);

  });click_to_display_search_mobile()

   maxheight = Math.max.apply(Math,height);

   jQuery(".pricelist .col-md-3 .row.price-content:nth-child("+hsize+")").css('height' , maxheight);

}

function click_to_display_search(){
    jQuery('i.fa.fa-search').on('click',function(){
	jQuery(this).css({'display':'none'});
	jQuery('.search-form').css({'display':'block'});
	jQuery('.search-field').css({'transittion':'width 2s'});
        jQuery('.navigation-top .col-md-4').css({'display':'flex'});
        jQuery('.btnclse').css({'display':'block'});
    });

    jQuery('.btnclse').on('click',function(){
	jQuery(this).css({'display':'none'});
	jQuery('.search-form').css({'display':'none'});
        jQuery('.navigation-top .col-md-4').css({'display':'inline-block'});
        jQuery('i.fa.fa-search').css({'display':'block'});
    });

    jQuery('#site-navigation').on('click',function(){
	jQuery(this).hasClass('toggled-on',function(){
		jQuery('.fa.fa-search').css({'position':'absolute','bottom':'245px'});
	});	
    });
}

function click_to_display_search_mobile(){
    jQuery('i.fa.fa-search.ss').on('click',function(){
	jQuery(this).css({'display':'none'});
	jQuery('.for_mobile_search .search-form').css({'display':'flex'});
        jQuery('.for_mobile_search .btnclse.ss').css({'display':'flex','position':'absolute'});
    });

    jQuery('.for_mobile_search .btnclse.ss').on('click',function(){
	jQuery(this).css({'display':'none'});
	jQuery('.for_mobile_search .search-form').css({'display':'none'});
        jQuery('i.fa.fa-search.ss').css({'display':'flex'});
    });

    /* no shifts tag*/
    jQuery("td:contains('No shifts')").html(function(_, html) {
       return html.replace(/(No shifts)/g, '<div class="no_shifts">No Shifts</div>');
    });
}







