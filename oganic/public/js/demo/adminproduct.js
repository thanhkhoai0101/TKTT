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
    '<td><button class="btn btn-danger btn-delete" onclick="functiondelete('+data[index].Id+') " value="'+data[index].Id+'">Xóa</button>'+
      '<a href="product/edit/'+data[index].Id+'">Update</a>'+'</td>'+
   '</tr>'
  })
  return dulieu;
}
$(document).ready(function(){
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

function functiondelete (e){
  $.ajax({
  url:'http://127.0.0.1:8000/deleteproduct',
  type:'get',
  data : {
    id:e,//tên biết là id và value là 'e'
  },
  
  success:function(coustomernew) {//dung foreach de + mang  duyet chuoi 
    console.log(coustomernew)
     $("#loadproduct").html(loaddulieu(coustomernew));
  }
})
}