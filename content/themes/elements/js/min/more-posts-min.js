jQuery(document).ready(function($){var o=function(){var o=$(".section_grid");$(document).on("scroll",function(){trigger_point=$(document).height()-300,screen_bottom=$(window).scrollTop()+$(window).height(),screen_bottom>trigger_point&&($(document).off("scroll"),e())})};$(".section_grid").length>0&&o();var e=function(){$(".section_grid ul").after('<div class="loader"></div>');var e=$(".section_grid li").length;jQuery.ajax({url:moreposts.ajax_url,type:"post",data:{action:"more_posts",offset:e},success:function(e){jQuery(".section_grid ul").append(e),e?($(".loader").remove(),o()):$(".loader").remove()}})}});