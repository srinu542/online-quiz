var time = max_time;

var count=1;
var nex = 0;

var al_time = 5;


setInterval(()=>{
    time--;

if(time < min_time){

    time = max_time;
    nex=count+1;
    $('#question_splitter_'+count).addClass('hide');	
    $('#question_splitter_'+nex).removeClass('hide');
    count++;
}


// if(time<=al_time){
//     al_time--;
//     $(".time").css("color","red");
//     $("#timer").css("animation","pop linear 1 0.5ms");
//     // console.log("less");
// }else{
//     $(".time").css("color","white");
//     // console.log("high");
// }

// if(al_time==0)al_time=5;

$(".time").text(time);		
},1000);

$('.cont').addClass('hide');
$('#question_splitter_1').removeClass('hide');

$('.next').click(function(){
    count++;
    nex=count+1;
})
    
var last = 0;
var nex = 0;
$(document).on('click','.next',function(){
time = max_time;
$(".time").text(time);		

last=parseInt($(this).attr('id'));   
nex=last+1;

$('#question_splitter_'+last).addClass('hide');
$('#question_splitter_'+nex).removeClass('hide');
});


$(document).on('click','.previous',function(){
	time = max_time;
	$(".time").text(time);		

	last=parseInt($(this).attr('id'));     
	pre=last-1;

	$('#question_splitter_'+last).addClass('hide');	
	$('#question_splitter_'+pre).removeClass('hide');
});

$('.previous').click(function(){
	count--;
	nex= count-1;
})

// $('.rad').click(function(e){
//     var rad = $(this).attr("id");
//     // alert(rad)
//     if(rad == $(this).attr('id')){
//         $("#"+rad).css("background","lightblue")
//     }
// })
