$(function(){
        $('.wiki-show').each(function(i,v){
            $(this).click(function(){
                var elem = $(this).next()[0];
                var childelem = $(this).find('.icon')[0];
                var childelem2 = $(this).find('.icon')[1];
                if($(elem).attr('class') == "wiki-none"){
                    //return false;
                    if($(childelem).css('display') == "none"){
                        $(childelem2).css('display','none');
                        $(childelem).css('display','inline');
                    }
                    $(this).next().remove('class','wiki-none');
                    $(this).next().attr('class','wiki-active');
                } else {
                    if($(childelem).css('display') == "inline"){
                        $(childelem).css('display','none');
                        $(childelem2).css('display','inline');
                    }
                    $(this).next().remove('class','wiki-active');
                    $(this).next().attr('class','wiki-none');
                }
            })
        });
        $('.wiki-src').click(function(){
            $('#wiki-view').attr('src',$(this).attr('c-view'));
        });
});
