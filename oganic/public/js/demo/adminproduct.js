function loaddulieu(data){
  let dulieu="";//tao ra 1 bien du lieu rong , sau do dung each 
  //data la 1 mang dua lieu duoc nhan vao 
  //each chay tu 0 den het, index la gia tri 
  $.each(data,function(index){
    dulieu+='<tr>'+
    '<td>'+data[index].Name+'</td>'+
    '<td>'+data[index].Description+'</td>'+
    '<td>'+data[index].SalePrice+'</td>'+
    '<td>'+data[index].Weight+'</td>'+
    '<td>'+data[index].StockQuantity+'</td>'+
    '<td>'+data[index].cateName+'</td>'+
    '<td><image src="../img/'+data[index].Avatar+'"</image></td>'+
    '<td><button class="btn btn-danger btn-delete" value="'+data[index].Id+'">Xóa</button>'+
      '<a href="product/edit/'+data[index].Id+'">Update</a>'+'</td>'+
   '</tr>'
  })
  return dulieu;
}
$(document).ready(function(){//HAM DC  viet trang dc load ddau tien, ajax goi den 1 noi nao do bang url va methot get 
  $(document).on('click','.btn-delete',function(){
    
      var id = $(this).val();
      $.ajax({
        type: 'DELETE',
        url: 'product/'+id,
        dataType:'json',
        success: function(response){
        }
      })
  });
  $.ajax({
      url:'../admin/api-ajax',
      type:'get',//cung voi phuong thuc web.php 
       //khi controler rutern ve cai gi thi no bien data nhan lai cai do 
      success:function(data) {//dung foreach de + mang  duyet chuoi 
        console.log(data)
         $("#loadproduct").html(loaddulieu(data));
      }
    })
})