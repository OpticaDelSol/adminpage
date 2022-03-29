var default_text = 'test';
function autocompletar_campos()
{
    
    $('form').each(function(){

        $('input').each(function(){
            
            var default_val = $(this).attr('data-defval');
            if (typeof default_val !== typeof undefined && default_val !== false) {
                $(this).val(default_val);
            }
            else
            {
                if($(this).hasClass('timepicker'))
                {
                    $(this).val('12:00 AM');
                }
                else
                {
                    if($(this).hasClass('has-datepicker'))
                    {
                        $(this).val('2019-11-03 22:23');

                    }
                    else
                    {
                        if($(this).hasClass('datepicker'))
                        {
                            $(this).val('03/11/2019');

                        }
                        else
                        {
                            if($(this).attr('type') === 'text' || $(this).attr('type') === 'password' ){
                            $(this).val(default_text);
                            }
                            if($(this).attr('type') === 'number'){
                                var _min = $(this).attr('min');
                                if (typeof _min !== typeof undefined && _min !== false) {
                                    $(this).val(_min);
                                }else
                                {
                                    $(this).val(1);
                                }
                               
                            }
                            if($(this).attr('type') === 'radiobutton'){
                                $(this).attr('checked','checked');
                            }
                        }   
                    }    
                }
                
            }
          
        });
        $('textarea').each(function(){
            $(this).html(default_text);
        });
        $('select').each(function(){
            $(this).val($(this).children('option').eq(1).attr('value'));
        });
    });
}

$('#autofill_btn').click(function(){autocompletar_campos();});