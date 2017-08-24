function checkInput(txt){
	if(txt.val()==""){
		txt.parent().parent()
			.removeClass()
			.addClass("form-group has-error has-feedback")
		txt.next().removeClass()
			.addClass("glyphicon glyphicon-remove form-control-feedback")
	}else{
		txt.parent().parent()
			.removeClass()
			.addClass("form-group has-success has-feedback")
		txt.next().removeClass()
			.addClass("glyphicon glyphicon-ok form-control-feedback")
	}
}
$(function(){
	$("#btnSubmit").click(function(){
		checkInput($("#username"));
		checkInput($("#password"));
		checkInput($("#vdcode"));
	});
});


var code = document.getElementById('code');
code.onclick = function () {
	this.src = 'code.php?tm=' + Math.random();
};
