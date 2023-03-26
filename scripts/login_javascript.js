function getCookie(cookieName) {
	const cookies = document.cookie.split(';');
	for (let i = 0; i < cookies.length; i++) {
		const nameValue = cookies[i].split('=');
		if (nameValue[0].trim() === cookieName) {
			return nameValue[1];
		}
	}
}

/*
window.onload = function () {
	if (document.cookie.indexOf('user_email') !== -1) {
		document.getElementById('emailInput').value = getCookie('user_email');	
	}
}
*/
//判断邮箱格式是否正确
function validateEmail(email) {
	const re = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
	return re.test(String(email));
}

function validatePasswd(passwd) {
	passwd = String(passwd);
	if (passwd.length < 8) {
		
		return 1; //长度不够
	}
	if (passwd.match(/([a-zA-Z])/) && passwd.match(/([0-9])/)) {
		return 2; //合格
	}
	return 3; //不同时包含数字和字母
}

function addPara(expl) {
	alert(666);
	const para = document.createElement('p');
	para.setAttribute('id', 'erExp');
	const node = document.createTextNode(String(expl));
	para.appendChild(node);
	let div = document.getElementById("form_div");
	div.appendChild(para);
}

function delPara() {
	const para = document.querySelector('#erExp');
	if (para) {
		div.removeChild(para);
	}
}

