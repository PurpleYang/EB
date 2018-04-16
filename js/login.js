			//登录注册页面切换
			$(function() {
				$("#register").hide();
				$(".hd li").click(function() {
					$(this).addClass("cur").siblings().removeClass("cur");
					$(".bd form").hide().eq($(this).index()).show();
				});

			});
			//验证信息
//			$.validator.setDefaults({
//				submitHandler: function() {
//					window.location.href = "login.html";
//				}
//			})；
			$().ready(function() {
				// validate signup form on keyup and submit
				$("#register").validate({
					rules: {
						username: {
							required: true,
							minlength: 2
						},
						password: {
							required: true,
							minlength: 5
						},
						confirm_password: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						email: {
							required: true,
							email: true
						}
					},
					messages: {
						username: {
							required: "请输入用户名",
							minlength: "您的用户名必须包含至少2个字符"
						},
						password: {
							required: "请输入密码",
							minlength: "密码必须大于5个字符"
						},
						confirm_password: {
							required: "请输入确认密码",
							minlength: "密码必须大于5个字符",
							equalTo: "两次输入的密码要一致"
						},
						email: "请输入正确的邮箱格式"
					}
				});
			});