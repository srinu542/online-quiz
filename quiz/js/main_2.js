$(document).ready(function(){
var last = 0;
var i = 1;

$('.r3i').addClass('hide');
$('#img'+i).removeClass('hide');
$('.btn').addClass('hide');
$("#"+i).removeClass('hide');

var time = max_time;
var count=1;
var nex = 0;

setInterval(()=>{

    time--;
if(time < min_time){
    time = max_time;
    $('#img'+count).addClass('hide');
    $('#img'+nex).removeClass('hide');
    $('#'+count).addClass('hide');
    $('#'+nex).removeClass('hide');
    nex=count+1;
    count++;
}

$(".time").text(time);		
if(nex > 10){
    nex = 1;
    count = 0;
}
},1000);

$('.next').click(function(){
    count++;
    nex=count+1;
})
    

$(document).on('click','.next',function(){
// time = max_time;
// $(".time").text(time);		

i++;
last=parseInt($(this).attr('id'));   
nex = last+1;

$('#img'+last).addClass('hide');
$('#img'+nex).removeClass('hide');
$('#'+last).addClass('hide');
$('#'+nex).removeClass('hide');
console.log(i)
});


})