<?php
include "connect.php";
include "part/header.php";

/*
//自动登录
if (!(isset($_SESSION['sign_in']) && $_SESSION['sign_in'] == true)) {

	// 根据cookie获取token
	$token = $_COOKIE['auth_token'] ?? '';
	if (!$token) {
		header('Location: sign_in.php');
	} else {
		// 验证 token 是否合法
		$sql = "SELECT * FROM token WHERE token='" . $token . "'";
		$result = mysqli_query($connect, $sql);
		if ($result && mysqli_num_rows($result) > 0) {
			// 检查Token是否过期
			$expire_time = strtotime(mysqli_fetch_assoc($result)['expire_time']);
			if ($expire_time > time()) {
				// Token有效，执行自动登录操作
				$user_id = mysqli_fetch_assoc($result)['user_id'];
				$_SESSION['user_id'] = $user_id;
				$_SESSION['user_name'] = mysqli_fetch_assoc($result)['user_name'];
				$_SESSION['user_email'] = mysqli_fetch_assoc($result)['user_email'];
				$_SESSION['user_level'] = mysqli_fetch_assoc($result)['user_level'];
				// 更新Token过期时间
				$new_expire_time = strtotime('+1 month');
				$sql = "
					UPDATE 
						token
					SET 
						expire_time='".$new_expire_time."'
					WHERE
						token = '".$token."'";
				mysqli_query($connect, $sql);
			} else {
				// Token已过期，清除cookie和数据库记录
				$sql = "
					DELETE
					FROM
						token
					WHERE
						token = '".$token."'";
				mysqli_query($connect,$sql);
				setcookie('auth_token', '', time() - 3600, '/');
				header('Location: sign_in.php');
			}
		} else {
			header('Location: sign_in.php');
		}
	}

}
*/




include "part/footer.php";
?>