jQuery(function(){function g(a){a.find("[name=virtarich-item-qty]");var b=a.find("[name=virtarich-item-price]"),c=a.find("[name=virtarich-button]");jQuery.ajax({data:a.serialize()+"&virtarich-button="+c.val(),success:function(a){""===b.val()&&"none"===notivsalah.css("display")?notivsalah.show().delay("1000").fadeOut("10"):0<b.val()&&"none"===d.css("display")&&d.show().delay("1000").fadeOut("10");e.html(a);h()}})}function f(a){var b=a.parent().find('[name="virtacartItemId[]"]').val(),c=a.val();if(c)var d=window.setTimeout(function(){jQuery.ajax({data:{virtacartUpdate:1,itemId:b,itemQty:c,virtacartIsCheckout:l,virtacartToken:m}})},500);a.keydown(function(a){9!==a.which&&window.clearTimeout(d)})}function k(a){a=parseInt(a);if(isNaN(a))return"";a=Math.abs(a);a=new String(a);for(var b=[];3<a.length;){var c=a.substr(a.length-3);b.unshift(c);a=a.substr(0,a.length-3)}0<a.length&&b.unshift(a);a=b.join(".");return"Rp "+a}function h(){jQuery("#kosong").length&&jQuery("#form-order").hide();var a=jQuery("#xtotalHarga").text(),b=jQuery("#xtotalBarang").text();jQuery("#tampilHarga").text(a);jQuery("#tampilJumlah").text(b);b=jQuery("#totalBerat").val();jQuery("#beratTotal").val(b);jQuery("#tampilHarga").val(a);var a=jQuery("#kecamatan option:selected").val(),b=jQuery("#totalHarga").val(),c=jQuery("#totalBerat").val(),d=c.split("."),e=d[0],d=d[1],c=0==e?Math.ceil(c):0!=e&&30>=d?Math.floor(c):Math.ceil(c),c=parseInt(c)*a,b=parseInt(b)+parseInt(c);jQuery("#ongkir").val(k(a));jQuery("#ongkirTotal").val(k(c));jQuery("#orderTotal").val(k(b))}
var n=templateDirectory+"/includes/stores/cart",e=jQuery("#virtacart"),m=jQuery("[name=virtacartToken]").val(),d=jQuery("#virtacart-betul");notivsalah=jQuery("#virtacart-salah");(function(){d.text("barang telah di tambahkan ke keranjang");notivsalah.text("tentukan pilihan");jQuery(".virtacart [type=submit]").mouseenter(function(a){jQuery("body").append(d);jQuery("body").append(notivsalah)}).mousemove(function(a){d.fadeOut("50");notivsalah.hide()}).mouseleave(function(){d.fadeOut("50");notivsalah.hide()});jQuery.ajaxSetup({type:"POST",url:n+"/cart.php",success:function(a){e.html(a);h()}})})();var l=jQuery("#virtacart-is-checkout").val();jQuery(".virtacart").submit(function(a){g(jQuery(this));a.preventDefault()});e.keydown(function(a){13===a.which&&a.preventDefault()});e.delegate('[name="virtacartItemQty[]"]',"keyup",function(){f(jQuery(this))});e.delegate(".virtacart-remove","click",function(a){var b=jQuery(this).attr("href"),b=b.split("=");jQuery.ajax({type:"GET",data:{virtacartRemove:b[1],virtacartIsCheckout:l}});a.preventDefault()});h()});jQuery("#virtarich_select").change(function(){var g=jQuery("#kode").val(),f=jQuery("#virtarich_select :selected").text();jQuery("#virtarich-item-price").val(jQuery("#virtarich_select").val());jQuery("#virtarich-item-pilihan").val(f);jQuery("#virtarich-item-id").val(g+"-"+f)});jQuery(document).ready(function(){jQuery(".cart .cart-down").hide();jQuery(".cart").hover(function(){jQuery(".cart .cart-down").stop(!0,!0).slideDown("fast")},function(){jQuery(".cart .cart-down").stop(!0,!0).delay(200).slideUp("fast")})});