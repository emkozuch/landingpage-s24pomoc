document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (slide) {
        slide.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(document).ready(function() {
    $("html").on("submit","#contact_form",function(e){
      e.preventDefault();
      $("#send_form_status").html('').hide();
      var data=$("#contact_form").serialize();
      $.post("send_form.php",data,function(res){
        $("#send_form_status").html(res.msg).show();
        if(res.status==1){ 
          $("#contact_form")[0].reset();
        } 
      });
    });
  });