<?php
//sign_in.php
include 'connect.php';
include 'part/login_header.php';
include 'part/login_form.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$sql = "
		SELECT
			user_id,
			user_name,
			user_email
			user_level
		FROM 
			users
		WHERE
			user_email = '" . mysqli_real_escape_string($connect, $_POST['user_email']) . "'
		AND
			user_pass = '" . sha1($_POST['user_pass']) . "';";

	$result = mysqli_query($connect, $sql);
	if (!$result) {
		echo `
		<script> alert("something was wrong,please try again later")</script>
		`;
	} else {
		if (mysqli_num_rows($result) == 0) {
			echo '<script> alert("Wrong email or passwd");</script>';
		} else {
			$_SESSION['sign_in'] = true;
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['user_email'] = $row['user_email'];
				$_SESSION['user_level'] = $row['user_level'];
			}

			// 生成token
			$token = bin2hex(random_bytes(32)); // 随机生成32位字符串作为Token
			$_SESSION['token'] = $token; // 保存Token到session中
			setcookie('auth_token', $token, time() + 3600*30*24, '/');
			// 存储token到数据库中
			$user_id = $_SESSION['user_id'];
			$user_name = $_SESSION['user_name'];
			$user_email = $_SESSION['user_email'];
			$user_level = $_SESSION['user_level'];
			$expire_time = strtotime('+1 month');
			$sql2 = "INSERT INTO
					token(user_name, user_id, user_email ,expire_time, user_level,token)
				VALUES('" . mysqli_real_escape_string($connect,$user_name) . "',
					   '" . $user_id . "',
					   '" . mysqli_real_escape_string($connect,$user_email) . "',
					   '" . $expire_time ."',
					   '" . $user_level ."',
					   '" . $token ."'
						)";
			mysqli_query($connect,$sql2);
			header('Location: index.php');
		}
	}
}

include 'part/login_footer.php';
?>