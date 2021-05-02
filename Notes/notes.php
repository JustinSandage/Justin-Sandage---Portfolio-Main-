<!-- THIS IS JUST FOR FUN. USED ON ANDROID x86 Surface Tablet. -->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="mobile-web-app-capable" content="yes">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<link rel="icon" type="image/png" href="favicon.jpg">
<title>Notes</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');
html, body {
	overflow: hidden;
	font-family: arial;
}
::-webkit-scrollbar {
	width: 5px;
}
::-webkit-scrollbar-thumb {
  background: #000;
}
.note {
	width: 462px;
	display: block;
}
.notes {
	width: 500px;
	height: 500px;
	background: #000;
	opacity: .7;
	position: absolute;
	top: 20px;
	left: 20px;
	z-index: 999;
	color: white;
	user-select: none;
	transition: background 500ms;
}
.notes.hide_notes {
    background: none;
}
.notes::-webkit-scrollbar, .note_section::-webkit-scrollbar, .note_wrapper::-webkit-scrollbar {
	width: 0;
}
.note_top {
	width: 500px;
	position: absolute;
	top: 0;
	left: 0;
	background: #000;
}
h3 {
	font-weight: normal;
	text-align: center;
	letter-spacing: 2px;
}
.notes hr {
	border-bottom: none;
}
.note_section {
	overflow-x: hidden;
	font-size: 25px;
	height: 425px;
	width: 100%;
	position: relative;
	margin-top: 63px;
}
.note_wrapper {
	line-height: 25px;
	position: relative;
	list-style-type: none;
	padding-left: 0;
	margin-top: 10px;
}
li {
	padding: 5px 0 5px 15px;
	height: auto;
}
li:hover {
	background: white;
    color: black;
    padding-left: 15px;
	position: relative;
	opacity: .6;
}
.type {
	position: absolute;
	top: 0;
	left: -520px;
	width: 496px;
	background: none;
	border: none;
	box-shadow: none;
	color: white;
	font-size: 25px;
	height: 25px;
	line-height: 25px;
}
.type:focus {
	outline: none;
}
.add_btn {
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
	user-select: none;
	font-size: 50px;
	margin-left: 5px;
	z-index: 99;
	font-family: 'Open Sans', sans-serif;
	opacity: .8;
}
.add_btn:hover {
	cursor: pointer;
	opacity: 1;
}
li input, .search {
	background: none;
    border: none;
    height: 25px;
    padding: 0;
    width: calc(100% - 42px);
    margin: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    vertical-align: top;
	font-size: 25px;
}
li input {
	color: burlywood;
}
.search {
	color: white;
	margin: 20px 0 20px 15px !important;
	font-size: 20px;
}
li input:focus, .search:focus {
	outline: none;
}
.search {
	border-bottom: 1px solid white;
	width: 50%;
	padding-bottom: 2px;
	margin-bottom: 10px;
}
li img {
	display: inline-block;
	height: 25px;
	float: right;
}
.save {
	display: inline-block;
	color: green;
	opacity: 0.8;
}
.cancel {
	display: inline-block;
	color: red;
	opacity: 0.8;
	margin-left: 10px;
}
.save:hover, .cancel:hover {
	opacity: 1;
	cursor: pointer;
}
.save_kb {
	display: inline-block;
	color: green;
	opacity: 0.8;
}
.cancel_kb, .cancel_kb_2 {
	display: inline-block;
	color: red;
	opacity: 0.8;
}
.cancel_kb_2 {
	margin-left: 5px;
}
.save_kb:hover, .cancel_kb:hover {
	opacity: 1;
	cursor: pointer;
}
.selected {
	background: white;
    color: black;
    min-height: 25px;
    line-height: 25px;
    padding: 7px 0 7px 15px;
	position: relative;
}
.selected:hover {
	background: white;
	opacity: 1;
}
.adding_a_note:hover {
	background: unset;
	opacity: 1;
}
.delete_note {
	display: inline-block;
	float: right;
	color: darkred;
	opacity: .75;
	font-size: 22px;
	position: absolute;
	right: 5px;
	top: 50%;
	transform:translate(-0%,-50%);
}
.delete_note:hover {
	opacity: 1;
	cursor: pointer;
}
.kb_confirm {
	display: inline-block;
    position: absolute;
    right: 0px;
    background: black;
    color: white;
    right: -200px;
	width: 160px;
	padding-left: 10px;
	top: 0;
	height: 100%;
}
.kb_confirm span {
	opacity: .8;
}
.kb_confirm .confirm_del:hover, .kb_confirm .cancel_del:hover, .kb_confirm .confirm_kb:hover {
	opacity: 1;
	cursor: pointer;
}
.confirm {
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	width: 100px;
}
.tasks_load {
	display: none;
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 100px;
}
.tasks_btn, .notes_btn {
	display: inline-block;
	vertical-align: middle;
}
.active_btn {
	font-size: 16px;
}
.inactive_btn {
	font-size: 12px;
	opacity: .8;
}
.inactive_btn:hover {
	opacity: 1;
	cursor: pointer;
}
.active_btn:hover {
	cursor: default;
}
.note_kb {
	font-size: 16px;
	color: burlywood;
}
.input_kb {
	width: 433px;
}
.li_kb:hover {
	background: none;
	opacity: 1;
	color: white;
}
.li_kb {
	margin-bottom: 20px;
}
.ui-autocomplete {
	padding-left: 0;
	list-style-type: none;
	width: 443px;
}
.results_kb {
	font-size: 16px;
	color: burlywood;
	margin-bottom: 20px;
}
.ui-autocomplete:focus {
    padding: 5px;
}
.working {
	background: url('loading_white.gif') no-repeat right center;
	background-size: 20px 20px;
}
.status {
	display: none;
}
.page_wrap {
	display: none;
}
.page_selection {
	float: right;
}
.page_number {
	font-size: 15px;
	color: #ccc;
	display: inline-block;
	opacity: .8;
}
.page_number:hover {
	opacity: 1;
	cursor: pointer;
	font-size: 17px;
}
.selected_page {
	font-size: 17px;
	color: skyblue;
	opacity: 1;
}
.selected_page:hover {
	cursor: unset;
}
#limit_notice {
	position: absolute;
    left: 38px;
    width: 147px;
    top: 22px;
    text-align: left;
	font-size: 12px;
    color: red;
    font-weight: bold;
    opacity: .9;
	visibility: hidden;
}
.note_type_text {
	color: white;
	width: calc(100% - 57px);
}
.add_note_li:hover {
	background: none;
	opacity: 1;
}
.confirm_kb, .cancel_kb, .confirm, .confirm_del, .cancel_del {
	vertical-align: middle;
	display: inline-block;
	height: 39px;
	line-height: 39px;
}
#youtube {
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 999;
	border-radius: 20px;
}
.note_wrapper hr {
	margin: 0;
	width: 100%;
	opacity: .3;
}
.note_top hr {
	border-bottom: 2px solid;
	width: 496px;
	color: #ccc;
}
.li_note {
	padding: 10px 0 10px 15px;
}
.note_top:hover {
	cursor: move;
}
#play_wrapper {
	position: absolute;
	top: 20px;
	right: 20px;
	z-index: 9999;
}
#play_circle {
	height: 175px;
	width: 175px;
	border: 2px solid white;
	border-radius: 50%;
	position: relative;
	overflow: hidden;
}
#play_triangle {
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-18%, -50%);
    height: 0;
	width: 0;
	border-left: 30px solid #ccc;
	border-right: 18px solid transparent;
	border-top: 18px solid transparent;
	border-bottom: 18px solid transparent;
	
}
#relax_txt {
	font-family: 'Rancho', cursive;
	position: absolute;
	top: 10px;
	left: 50%;
	transform: translate(-50%, 0);
	color: #ccc;
}
#audio {
	display: none;
}
#canvas {
	position: absolute;
    left: 50%;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: .5;
    z-index: -1;
    /* margin: 0 auto; */
    transform: translate(-50%, 0);
}
#play_background {
	height: 100%;
	width: 100%;
	background: #000;
	opacity: .5;
	position: relative;
	z-index: -1;
}
@media screen and (min-width: 720px) {
	#visible, #invisible {
		display: none;
		float: left;
		height: 30px;
	}
	.tasks_btn {
		line-height: 30px;
	}
}
@media screen and (max-width: 719px) {
	.animate {
		min-height: unset !important;
		min-width: unset !important;
	}
	.notes {
		position: absolute;
		top: 0 !important;
		left: 0 !important;
		border-radius: 0;
		opacity: .8;
		width: 100vw;
		height: 100vh;
		border-right: 10px solid #000;
	}
	.note_top, .note_top hr {
		width: 100%;
		margin-bottom: 0;
	}
	.note_top:hover {
		cursor: default;
	}
	#visible, #invisible {
		float: left;
		height: 30px;
	}
	#visible {
		display: block;
	}
	#invisible {
		display: none;
	}
	.tasks_btn {
		height: 30px;
		line-height: 30px;
	}
	hr {
		visibility: hidden;
	}
}
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- ajax refresh notes -->
<script>
function update(){
	$('.note_wrapper').empty();
	$('.tasks_load').show();
	$('.add_btn').show();
	$.ajax({
		url: "https://www.justinsandage.com/Notes/retrieve_notes.php?rand=" + Math.round(Math.random() * 10000000),
		type: "GET",
		success: function(response) {
			$('.tasks_load').hide();
			$('.note_wrapper').html(response);
		}
	});
};
$(document).ready(function(){
	update();
});
</script>
</head>
<body style="margin:0;padding:0;overflow:hidden;">
<div class="notes">
	<div id="note_top_wrapper">
		<div id="limit_notice">40 note limit reached. Delete a note to continue.</div>
		<div class="add_btn">+</div>
		<div class="note_top">
			<h3><span style="font-size:20px;"><div class="tasks_btn active_btn"><img id="visible" src="visible.png"><img id="invisible" src="invisible.png">NOTES</div></span></h3>
			<hr>
		</div>
	</div>
	<div class="note_section">
		<img class="tasks_load" src="loading_white.gif">
		<ul class="note_wrapper">
		</ul>
	</div>
</div>
<script>
	<!-- Notes Add -->
	$('.add_btn').click(function(){
		var note_count = $('li').length;
		if(note_count < 15) {
			$('li').removeClass('selected');
			$('.delete_note').remove();
			if($('input').length == 0){
				$('.note_wrapper').append('<li class="add_note_li"><input class="note_type_text" placeholder="Max 255 characters"></input><div class="save">&#10004;</div><div class="cancel">X</div></li>');
				$('input:last').focus();
			} else {
				$('input:last').focus();
			}
		} else {
			$('#limit_notice').css('visibility', 'visible');
			$('.li_note').each(function(){
				$(this).removeClass('selected');
				$(this).children('.delete_note').remove();
				$(this).children('.kb_confirm').remove();
			});
		}
	});
</script>
<script>
	<!-- Notes Cancel -->
	$(document).on('click', '.cancel', function(){
		$(this).parents('li').remove();
	});
</script>
<script>
	<!-- Notes Save -->
	$(document).on('click', '.save', function(){
		$(this).hide();
		$(this).parents('li').find('.cancel').hide();
		$(this).parents('li').append('<img src="loading_white.gif">');
		
		var note = $(this).parents('li').find('input').val();
		var note_save = note.replace(/'/g,"&apos;");
		$.ajax({
			type: "POST",
			url: "save_note.php",
			data: {note: note_save},
			success: function() {
				update();
			}
		});
	});
</script>
<script>
	<!-- Notes Select -->
	$(document).on('click', '.li_note', function(){
		$('#limit_notice').css('visibility', 'hidden');
		if($('input').length == 0){
			if($('.kb_confirm').length == 1){
				$('.kb_confirm').remove();
			}
			$('.delete_note').remove();
			$('li').not(this).removeClass('selected');
			$(this).toggleClass('selected');
			var this_click = $(this);
			$(this).append('<div class="delete_note">X</div><div class="kb_confirm"><span class="confirm">confirm?</span> <span class="confirm_del" style="color:green;">&#10004;</span> <span class="cancel_del" style="color:red;">X</span></div>');
		} else {
			$('input:last').focus();
		}
	});
	$(document).on('click', '.selected', function(){
		$(this).children('.delete_note').remove();
		$(this).children('.kb_confirm').remove();
	});
</script>
<script>
	<!-- Notes Delete -->
	$(document).on('click', '.delete_note', function(e){
		e.stopPropagation();
		$(this).hide();
		//$(this).parents('li').append('<img src="loading_white.gif">');
		
		var note = $(this).siblings('.note').text();
		var note_del = note.replace(/'/g,"&apos;");
		// Confirm deletion animation
		$(this).siblings('.kb_confirm').animate({right: '0px'});
		$('.confirm_del').click(function(){
			$.ajax({
				type: "POST",
				url: "delete_note.php",
				data: {note: note_del},
				success: function() {
					update();
				}
			});
		});
	});
</script>
<script>
	<!-- draggable notes div -->
	function handle_mousedown(e){
		var width = $(window).width();
		var div = e;
		if(width >= 719) {
			window.my_dragging = {};
			my_dragging.pageX0 = div.pageX;
			my_dragging.pageY0 = div.pageY;
			my_dragging.elem = $('.notes');
			my_dragging.offset0 = $('.notes').offset();
			function handle_dragging(div){
				var left = my_dragging.offset0.left + (div.pageX - my_dragging.pageX0);
				var top = my_dragging.offset0.top + (div.pageY - my_dragging.pageY0);
				$(my_dragging.elem).offset({top: top, left: left});
			}
			function handle_mouseup(div){
				$('body').off('mousemove', handle_dragging).off('mouseup', handle_mouseup);
			}
			$('body').on('mouseup', handle_mouseup).on('mousemove', handle_dragging);
		}
	}
	$('.note_top').mousedown(handle_mousedown);
</script>
<script>
	$('.tasks_btn').click(function(){
		var width = $(window).width();
		if(width <= 719) {
			if($('#visible').css('display') === 'block') {
				$('.cancel').click();
				$('#visible')[0].style.setProperty('display', 'none', 'important');
				$('#invisible')[0].style.setProperty('display', 'block', 'important');
				$('.notes').addClass('hide_notes');
				$('.li_note').css('visibility', 'hidden');
			} else if($('#visible').css('display') === 'none') {
				$('#visible')[0].style.setProperty('display', 'block', 'important');
				$('#invisible')[0].style.setProperty('display', 'none', 'important');
				$('.notes').removeClass('hide_notes');
				$('.li_note').css('visibility', 'visible');
			}
		}
	});
	$( window ).resize(function() {
		var width = $(window).width();
		if(width >= 719) {
			$('#invisible')[0].style.setProperty('display', 'none', 'important');
			$('#visible')[0].style.setProperty('display', 'none', 'important');
			$('.notes').removeClass('hide_notes');
			$('.li_note').css('visibility', 'visible');
		} else {
			if($('#invisible').css('display') === 'none') {
				$('#visible')[0].style.setProperty('display', 'block', 'important');
			}
		}
	});
</script>
<iframe class="animate" src="https://clients3.google.com/cast/chromecast/home" style="height:100vh;width:100vw;min-width:760px;min-height:720px;border:none;position:absolute;top:0;left:0;">
</body>
</html>