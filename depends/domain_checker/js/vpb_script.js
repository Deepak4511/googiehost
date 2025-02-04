
function vpb_buy_now(selected_domain_to_buy)
{
	//You can make use of the domain name here as wish
	document.location.href(selected_domain_to_buy);
	
}

// Auto submit search for this domain when the user preses the enter key on his or her computer
$(document).ready(function()
{
	$("#suggested_names").Watermark("Enter a desired domain name here"); 
	
	//Search domain on pressing of the enter key on computer keyboard
	$('#suggested_names').live("keydown",function(vpb_event) 
	{
		if(vpb_event.keyCode == 13 && vpb_event.shiftKey == 0)
		{
			vpb_check_this_domain();
		}
	});
});

//Search domain function
function vpb_check_this_domain()
{	
	if ($('#suggested_names').val() == "" || $('#suggested_names').val() == "Enter a desired domain name here")
	{
		$("#vpb_search_status").html('<br clear="all"><br clear="all"><div class="info">Please enter a domain name of your choice to search.</div><br clear="all"><br clear="all">');
		$('#suggested_names').focus();
		return false;
	}
	else
	{
		var dataString = 'domain=' + escape($('#suggested_names').val());
		
		$.ajax({  
			type: "POST",  
			url: "vp-new/assets/libs/domain_checker/process.php",  
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#vpb_search_status").html('<br clear="all"><br clear="all"><font style="font-family:Mulish,sans-serif; font-size:16px;">Please wait</font> <img src="vp-new/assets/libs/domain_checker/images/loadings.gif" align="absmiddle" alt="Loading..."><br clear="all"><br clear="all">');
			},  
			success: function(response)
			{
				$('#vpb_search_status').html(unescape(response));	
			}
		   
		}); 
	}
}