﻿(function(e){function t(e){return e.replace(/\b((http|https):\/\/\S+)/g,'<a href="$1" target="_blank">$1</a>')}function n(e){var t=new Date(e);var n=new Date-t;if(n<=1e4){return"Just now"}var r=null;var i={millisecond:1,second:1e3,minute:60,hour:60,day:24,month:30,year:12};for(var s in i){if(n<i[s]){break}else{r=s;n=n/i[s]}}n=Math.floor(n);if(n!==1){r+="s"}return[n,r,"ago"].join(" ")}e.fn.facebookConnect=function(t){var n,r,i;n=e.extend({},e.fn.facebookConnect.defaults,t);return this.each(function(){i=e(this);r=e.extend({},n,i.data());if(!r.username){throw new Error("You need to provide an user/page id!")}if(!r.key){throw new Error("You need to provide an access token!")}e.fn.facebookConnect.initialize(i,r)})};e.fn.facebookConnect.defaults={username:"EllucianInc",posts:10};e.fn.facebookConnect.initialize=function(t,n){var r="https://graph.facebook.com/"+n.username+"/?fields=name,picture&access_token="+n.key+"&callback=?",i="https://graph.facebook.com/"+n.username+"/posts/?access_token="+n.key+"&callback=?&date_format=U&limit="+n.posts;e.when(e.getJSON(r),e.getJSON(i)).done(function(r,i){if(e("#fbConnectHeader").length!=0){e.fn.facebookConnect.buildHeader(t,r,n)}if(e("#fbConnectFeed").length!=0){e.fn.facebookConnect.buildFeed(t,i,n)}})};e.fn.facebookConnect.buildHeader=function(t,n,r){if(e("#fbConnectImage").length!=0){e("#fbConnectImage").attr("src",n[0].picture.data.url)}if(e("#fbConnectPage").length!=0){e("#fbConnectPage").text(n[0].name).attr("href","https://www.facebook.com/"+n[0].name)}};e.fn.facebookConnect.buildFeed=function(r,i,s){var o,u;o=r.find(e(".itemTemplate")).clone().removeClass("itemtemplate");u=r.find(e(".itemTemplate")).parent();r.find(e(".itemTemplate")).remove();e.each(i[0].data,function(e,r){var i=o.clone();if(r.type!="link"&&r.type!="status"&&r.type!="photo"||!r.message){return true}r.created_time=n(r.created_time*1e3);r.message=t(r.message);i.find(".poster").text(r.from.name);i.find(".message").html(r.message);if(r.type=="link"){if(i.find(".attachmentImg").length!=0){if(typeof r.picture==="undefined"){i.find(".attachmentImg").first().remove();i.find(".attachment").addClass("noimage")}else{i.find(".attachmentImg").attr("src",r.picture)}}if(i.find(".attachmentLink").length!=0){i.find(".attachmentLink a").text(r.name).attr("href",r.link)}if(i.find(".attachmentCaption").length!=0){i.find(".attachmentCaption").text(r.caption)}if(i.find(".attachmentDescription").length!=0){i.find(".attachmentDescription").text(r.description)}}else{i.find(".attachment").remove()}if(r.type=="photo"){if(i.find(".photoImg").length!=0){i.find(".photoImg").attr("src",r.picture)}if(i.find(".photoLink").length!=0){i.find(".photoLink").text(r.name).attr("href",r.link)}}else{i.find(".photo").remove()}commentString=r.comments.count!=1?r.comments.count+" comments":"1 comment";i.find(".comments").text(commentString);if(typeof r.likes==="undefined"){i.find(".likes").first().remove()}else{likesString=r.likes.count!=1?r.likes.count+" likes":"1 like";i.find(".likes").text(likesString)}i.find(".postdate").text(r.created_time);u.append(i)})}})(jQuery);$(document).ready(function(){$(".facebookConnect").facebookConnect()})