function func_group(){
	var name = $('#name').val();
	var group = $('#groupid').val();
	$.ajax({
		type: "POST",
		url: "src/php/validation/check1.php",
		data: {  
			'groupid': group,
			'name': name,
		},
        
		success: function(data){
			if(data==1){
				$('#area').html("Valid group ID");
                $('#area').removeClass("wrong").addClass("correct");
			}
			else if(data==2){
				$('#area').html("Valid group ID");
                $('#area').removeClass("wrong").addClass("correct");
				$('#join_submit_btn').attr('disabled', false);
			}
			else if (data==0) {
				$('#area').html("In-Valid group ID");
				$('#area').removeClass("correct").addClass("wrong");
                $('#join_submit_btn').attr('disabled', true);
			}
		},
	});
}

function func_nick(){
	var name = $('#name').val();
	var group = $('#groupid').val();
	$.ajax({
		type: "POST",
		url: "src/php/validation/check2.php",
		data: {  
			'name': name,
			'groupid': group
		},
        
		success: function(data){
			if(data==1){
				
                $('#area1').html("Valid user for the above group");
                $('#area1').removeClass("wrong").addClass("correct");
				$('#join_submit_btn').attr('disabled', false);
			}else { 
				$('#area1').html("In-Valid user for the above group");
                $('#area1').removeClass("correct").addClass("wrong");
				$('#join_submit_btn').attr('disabled', true);
			}
		},
	});
}

function check_group_validate(){
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var emailaddressVal = $("#email").val();
	$.ajax({
		type: "POST",
		url: "src/php/validation/check3.php",
		data: {  
			'group': group
		},
		success: function(data){
			if(data==1){
				$('#area2').html("Group name taken");
                $('#area2').removeClass("correct").addClass("wrong");
				$('#create_btn').attr('disabled', true);
			}
			else if (data==2) {
				$('#area2').html("Empty group name");
                $('#area2').removeClass("correct").addClass("wrong");    
				$('#create_btn').attr('disabled', true);
			}
			else if (data==0){ 
				$('#area2').html("Group name unique");
				$('#area2').removeClass("wrong").addClass("correct");
                if(  (!emailReg.test(emailaddressVal)&&nickname.length<4) ) {
					$('#create_btn').attr('disabled', true);	    	
				}
				else if ( (emailReg.test(emailaddressVal)&&nickname.length>=4&&emailaddressVal!="") ) {
                    $('#create_btn').attr('disabled', false);
                }
        	}
        	
		},
	});
    if($('#area2').text()==="Group name unique"){
        $('#area2').removeClass("wrong").addClass("correct");
    }
    else
        $('#area2').removeClass("correct").addClass("wrong");    
}

function check_nickname(){
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	if(nickname.length<4){
		$('#area3').html("Nickname is too short");	
		$('#create_btn').attr('disabled', true);	
	}
	else if (nickname.length>=4) {
		$('#area3').html("Looks clean");
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var emailaddressVal = $("#email").val();
        $.ajax({
			type: "POST",
			url: "src/php/validation/check3.php",
			data: {  
				'group': group
			},
            
			success: function(data){
				if(  (!emailReg.test(emailaddressVal)&&data==1) || (!emailReg.test(emailaddressVal)&&data==0) || (emailReg.test(emailaddressVal)&&data==1)  ) {
            		$('#create_btn').attr('disabled', true);
        		}
        		else if ( (emailReg.test(emailaddressVal)&&data==0&&emailaddressVal!="") ) {
					$('#create_btn').attr('disabled', false);
        		}
        	},
		});
	}
    console.log($('#area3').text());
    if($('#area3').text()==="Looks clean"){
        $('#area3').removeClass("wrong").addClass("correct");
    }
    else
        $('#area3').removeClass("correct").addClass("wrong");
}

function check_email(){
	
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	var hasError = false;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var emailaddressVal = $("#email").val();
    if(emailaddressVal == '') {
        $("#area4").html('Please enter your email address.');
		$('#create_btn').attr('disabled', true);
    }
    else if(!emailReg.test(emailaddressVal)) {
        $("#area4").html('Enter a valid email address.');
        $('#create_btn').attr('disabled', true);
    }
    else if (emailReg.test(emailaddressVal) )
    {
        //$("#area4").html('Email id looks gud');
	    $.ajax({
			type: "POST",
			url: "src/php/validation/check3.php",
			data: {  
				'group': group,
                'email': emailaddressVal
			},
            
			success: function(data){
		 		if(  (nickname.length<4&&data==1) || (nickname.length<4&&data==0) || (nickname.length>=4&&data==1)  ) 
		 		{
                    $("#area4").html('Email ID is correct');
                    $('#area4').removeClass("wrong").addClass("correct");
            		$('#create_btn').attr('disabled', true);
        		}
        		else if ( nickname.length>=4&&data==0 ) {
                    $("#area4").html('Email ID is correct');
                    $('#area4').removeClass("wrong").addClass("correct");
					$('#create_btn').attr('disabled', false);
        		}
                else if ( data==3){
                    $("#area4").html('Email ID has already been taken');
                    $('#create_btn').attr('disabled', true);
                }                
			},
		});
	}
    console.log($('#area4').text());
    if($('#area4').text()==='Email ID is correct'){
        $('#area4').removeClass("wrong").addClass("correct");
    }
    else
        $('#area4').removeClass("correct").addClass("wrong");
}
