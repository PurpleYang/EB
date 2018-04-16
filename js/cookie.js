// 创建、修改、删除cookie
function setCookie(_name, _value, _date) {
	// 设置的值，无论是什么类型的数据，都给他转为json对象
	var json = {
		"value": _value
	}
	// 设置cookie
	if(_date) {
		var dt = new Date();
		dt.setDate(dt.getDate() + _date);
		document.cookie = _name + "=" + encodeURIComponent(JSON.stringify(json)) + ";expires=" + dt.toGMTString() + ";path=/";
	} else {
		document.cookie = _name + "=" + encodeURIComponent(JSON.stringify(json)) + ";path=/";
	}
}

// 根据cookie名称，获取该cookie的内容
function getCookie(_name) {
	var str = document.cookie;
	// str = "b=1; bc=1; ac=1; dc=1; c=1";
	var arr = str.split("; ");
	// arr = ["b=1", "bc=1", "ac=1", "dc=1", "c=1"];
	for(var i = 0, l = arr.length; i < l; i++) {
		var tmp = arr[i]; // "b=1"
		var col = tmp.split("="); // ["b", "1"]
		// if ( "b" == "b" )
		if(_name == col[0]) { //如果找到了cookie，则跳出函数，并将其结果返回	
			var obj = JSON.parse(decodeURIComponent(col[1]));
			return obj.value;
		}
	}
	return ""; // 如果没有这一行，如果找不到cookie，则返回undefined
}

function addCookie() {
	setCookie(_name, _value, _date);
}

function delCookie(_name, _value, _date) {
	setCookie(_name, "", -1);
}

//获取cookie中的名字

function getCookie1(_name) {
	return _name;
}
