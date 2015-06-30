jQuery(document).ready(function(){
   jQuery("#textfield29").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield29').val(),
                    current: jQuery('#textfield29').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield29').DatePickerSetDate(jQuery('#textfield29').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield29').val(formated);
                            jQuery('#textfield29').DatePickerHide();
                    }
            });
   jQuery("#textfield30").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield30').val(),
                    current: jQuery('#textfield30').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield30').DatePickerSetDate(jQuery('#textfield30').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield30').val(formated);
                            jQuery('#textfield30').DatePickerHide();
                    }
            });
    jQuery("#textfield25").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield25').val(),
                    current: jQuery('#textfield25').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield25').DatePickerSetDate(jQuery('#textfield25').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield25').val(formated);
                            jQuery('#textfield25').DatePickerHide();
                    }
            });
    jQuery("#textfield26").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield26').val(),
                    current: jQuery('#textfield26').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield26').DatePickerSetDate(jQuery('#textfield26').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield26').val(formated);
                            jQuery('#textfield26').DatePickerHide();
                    }
            });
     jQuery("#textfield27").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield27').val(),
                    current: jQuery('#textfield27').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield27').DatePickerSetDate(jQuery('#textfield27').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield27').val(formated);
                            jQuery('#textfield27').DatePickerHide();
                    }
            });
      
      
      jQuery("#last_call").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#last_call').val(),
                    current: jQuery('#last_call').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#last_call').DatePickerSetDate(jQuery('#last_call').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#last_call').val(formated);
                            jQuery('#last_call').DatePickerHide();
                    }
            });
      jQuery("#next_call").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#next_call').val(),
                    current: jQuery('#next_call').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#next_call').DatePickerSetDate(jQuery('#next_call').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#next_call').val(formated);
                            jQuery('#next_call').DatePickerHide();
                    }
            });
      jQuery("#birthday").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#birthday').val(),
                    current: jQuery('#birthday').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#birthday').DatePickerSetDate(jQuery('#birthday').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#birthday').val(formated);
                            jQuery('#birthday').DatePickerHide();
                    }
            });
       jQuery("#birthday2").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#birthday2').val(),
                    current: jQuery('#birthday2').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#birthday2').DatePickerSetDate(jQuery('#birthday2').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#birthday2').val(formated);
                            jQuery('#birthday2').DatePickerHide();
                    }
            });
       jQuery("#activity_from").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#activity_from').val(),
                    current: jQuery('#activity_from').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#activity_from').DatePickerSetDate(jQuery('#activity_from').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#activity_from').val(formated);
                            jQuery('#activity_from').DatePickerHide();
                    }
            });
       jQuery("#activity_to").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#activity_to').val(),
                    current: jQuery('#activity_to').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#activity_to').DatePickerSetDate(jQuery('#activity_to').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#activity_to').val(formated);
                            jQuery('#activity_to').DatePickerHide();
                    }
            });
       jQuery("#textfield50").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#textfield50').val(),
                    current: jQuery('#textfield50').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#textfield50').DatePickerSetDate(jQuery('#textfield50').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#textfield50').val(formated);
                            jQuery('#textfield50').DatePickerHide();
                    }
            });
       jQuery("#yearly_income").change(function(){
                  if(parseFloat(jQuery("#yearly_income").val()) > 9999999){
                      alert("Income cannot be greater than 9999999");
                      jQuery("#yearly_income").val(1);
                  }
       });
       
       jQuery("#filter_from").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#filter_from').val(),
                    current: jQuery('#filter_from').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#filter_from').DatePickerSetDate(jQuery('#filter_from').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#filter_from').val(formated);
                            jQuery('#filter_from').DatePickerHide();
                    }
            });
            
       jQuery("#filter_to").DatePicker({
                    format:'d-m-Y',
                    date: jQuery('#filter_to').val(),
                    current: jQuery('#filter_to').val(),
                    starts: 1,
                    position: 'right',
                    onBeforeShow: function(){
                            jQuery('#filter_to').DatePickerSetDate(jQuery('#filter_to').val(), true);
                    },
                    onChange: function(formated, dates){
                            jQuery('#filter_to').val(formated);
                            jQuery('#filter_to').DatePickerHide();
                    }
            });
 });