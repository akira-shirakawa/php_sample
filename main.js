let delete_id ;
//モーダル
$(".js-target,.modal-background").click(function() {
    
    $('.modal').toggle('is-active');
  });
// 消去確認
  $('.del').click(function(){
   delete_id = $(this).attr('id');
   $('.js-del-target').show();
   console.log(delete_id);
  });
$('.no').click(function(){
    $('.js-del-target').hide();
})
$('.yes').click(function(){
  target = '.form'+String(delete_id);
  $(target).submit();
})
  