var timer = 5000;
var offset = 10000;
var index = -1;


//´óÍ¼½»ÌæÂÖ»»
function slideImage(i){
    var id = 'image_'+ target[i];
    $('#'+ id).show()
        .siblings(':visible').hide();

}
//bind thumb a
function hookThumb(){    
    $('#thumbs li a')
        .bind('click', function(){
            if (timer) {
                clearTimeout(timer);
            }                
            var id = this.id;            
            index = getIndex(id.substr(6));
            rechange(index);
            slideImage(index); 
            timer = window.setTimeout(auto, offset);  
            this.blur();            
            return false;
        });
}
//bind next/prev img
function hookBtn(){
var target_len=target.length;
    $('#thumbs li img').filter('#play_prev,#play_next')
        .bind('click', function(){
            if (timer){
                clearTimeout(timer);
            }
            var id = this.id;
            if (id == 'play_prev') {
                index--;
                if (index < 0) index = target_len;
            }else{
                index++;
                if (index >= target_len) index = 0;
            }
            rechange(index);
            slideImage(index);
            timer = window.setTimeout(auto, offset);
        });
}
//get index
function getIndex(v){
    for(var i=0; i < target.length; i++){
        if (target[i] == v) return i;
    }
}
function rechange(loop){
    var id = 'thumb_'+ target[loop];
    $('#thumbs li a.current').removeClass('current');
    $('#'+ id).addClass('current');
}
function auto(){
    index++;
    if (index >  target.length){
        index = 0;
    }
    rechange(index);
    slideImage(index);
    timer = window.setTimeout(auto, offset);
}
$(function(){    
    //change opacity
    
    auto();  
    hookThumb(); 
    hookBtn();
    
});