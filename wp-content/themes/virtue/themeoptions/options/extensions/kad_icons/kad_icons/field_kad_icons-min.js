!function($){"use strict";redux.field_objects=redux.field_objects||{},redux.field_objects.kad_icons=redux.field_objects.kad_icons||{},$(document).ready(function(){}),redux.field_objects.kad_icons.init=function(e){e||(e=$(document).find(".redux-group-tab:visible").find(".redux-container-kad_icons")),$(e).each(function(){function e(e){if(e.hasOwnProperty("id"))return"<span class='elusive'><i class='"+e.id+"'></i> "+e.id+"</span>"}var i=$(this);redux.field_objects.media.init(i);var t=i;i.hasClass("redux-field-container")||(t=i.parents(".redux-field-container:first")),t.hasClass("redux-container-kad_icons")&&t.addClass("redux-field-init"),t.hasClass("redux-field-init")&&(t.removeClass("redux-field-init"),$("select.font-icons").select2({formatResult:e,formatSelection:e,width:"93%",triggerChange:!0,allowClear:!0}),i.find(".redux-slides-remove").live("click",function(){redux_change($(this)),$(this).parent().siblings().find('input[type="text"]').val(""),$(this).parent().siblings().find("textarea").val(""),$(this).parent().siblings().find('input[type="hidden"]').val(""),$(this).parent().siblings().find("select").val("");var e=$(this).parents(".redux-container-kad_icons:first").find(".redux-slides-accordion-group").length;if(e>1)$(this).parents(".redux-slides-accordion-group:first").slideUp("medium",function(){$(this).remove()});else{var i=$(this).parent(".redux-slides-accordion").data("new-content-title");$(this).parents(".redux-slides-accordion-group:first").find(".remove-image").click(),$(this).parents(".redux-container-kad_icons:first").find(".redux-slides-accordion-group:last").find(".redux-slides-header").text(i)}}),i.find(".kad_redux-icon-add").click(function(){$("select.font-icons").select2("destroy");var i=$(this).prev().find(".redux-slides-accordion-group:last").clone(!0),t=$(i).find(".slide-title").attr("name").match(/[0-9]+(?!.*[0-9])/),n=1*t+1;$(i).find('.redux-slides-list input[type="text"], .redux-slides-list input[type="checkbox"], input[type="hidden"], select.redux-select-item, textarea').each(function(){$(this).attr("name",jQuery(this).attr("name").replace(/[0-9]+(?!.*[0-9])/,n)).attr("id",$(this).attr("id").replace(/[0-9]+(?!.*[0-9])/,n)),$(this).val(""),$(this).hasClass("slide-sort")&&$(this).val(n)});var s=$(this).prev().data("new-content-title");$(i).find(".screenshot").removeAttr("style"),$(i).find(".screenshot").addClass("hide"),$(i).find(".screenshot a").attr("href",""),$(i).find(".remove-image").addClass("hide"),$(i).find(".redux-slides-image").attr("src","").removeAttr("id"),$(i).find(".font-icons.select2-container").remove(),$(i).find("select.font-icons option").removeAttr("selected"),$(i).find('.icon-link-target input[type="checkbox"]').val(""),$(i).find('.icon-link-target input[type="checkbox"]').attr("checked",!1),$(i).find("h3").text("").append('<span class="redux-slides-header">'+s+'</span><span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>'),$(this).prev().append(i),$("select.font-icons").select2({formatResult:e,formatSelection:e,width:"93%",triggerChange:!0,allowClear:!0})}),i.find(".slide-title").keyup(function(e){var i=e.target.value;$(this).parents().eq(3).find(".redux-slides-header").text(i)}),i.find(".redux-slides-accordion").accordion({header:"> div > fieldset > h3",collapsible:!0,active:!1,heightStyle:"content",icons:{header:"ui-icon-plus",activeHeader:"ui-icon-minus"}}).sortable({axis:"y",handle:"h3",connectWith:".redux-slides-accordion",start:function(e,i){i.placeholder.height(i.item.height()),i.placeholder.width(i.item.width())},placeholder:"ui-state-highlight",stop:function(e,i){i.item.children("h3").triggerHandler("focusout");var t=$("input.slide-sort");t.each(function(e){$(this).val(e)})}}))})}}(jQuery);