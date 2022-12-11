function loaddulieutk(data){
  let dulieutk="";//tao ra 1 bien du lieu rong , sau do dung each 
  //data la 1 mang dua lieu duoc nhan vao 
  //each chay tu 0 den het, index la gia tri 
  $.each(data,function(index){
    dulieutk+='<tr>'+
    '<td>'+data[index].Name+'</td>'+
    '<td>'+data[index].Address+'</td>'+
    '<td>'+data[index].PhoneNumber+'</td>'+
    '<td>'+data[index].Email+'</td>'+
    '<td><button class="btn btn-danger btn-delete" onclick="functiondelete('+data[index].id+') " value="'+data[index].id+'">Xóa</button>'+
    '<a href="account/edit/'+data[index].id+'">Update</a>'+'</td>'+
   '</tr>'
  })
  return dulieutk;
}
$(document).ready(function(){
  $.ajax({
      url:'../../admin/api',
      type:'get',//cung voi phuong thuc web.php 
       //khi controler rutern ve cai gi thi no bien data nhan lai cai do 
      success:function(data) {//dung foreach de + mang  duyet chuoi 
        console.log(data)
         $("#loadaccount").html(loaddulieutk(data));
      }
    })
})
function functiondelete (e){
  $.ajax({
  url:'http://127.0.0.1:8000/deleteitem',
  type:'get',
  data : {
    id:e,//tên biết là id và value là 'e'
  },


  success:function(coustomernew) {//dung foreach de + mang  duyet chuoi 
    console.log(coustomernew)
     $("#loadaccount").html(loaddulieutk(coustomernew));
  }
})
}