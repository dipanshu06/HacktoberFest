CTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<link rel="stylesheet" href="style/style.css" type="text/css" />
<script language="javascript">
	function check()
		{
				if(f1.u1.value=="")
						{
									alert("Username can not be blank");
												return false;
														}
																if(f1.p1.value=="")
																		{
																					alert("Password can not be blank");
																								return false;
																										}
																											}
																											</script>
																											</head>

																											<body>
																											<form method="post" name="f1" action="">
																												<table align="center" border="1" width="1000">
																														<tr align="center" height="75">
																																	<td colspan="2" class="header">Student Information Management System</td>
																																			</tr>
																																					<tr align="center" height="550">
																																								<td width="700">
																																												<img src="image/united.jpg" alt="united" width="700" height="570" />
																																															</td>
																																																		<td>
																																																						<table style="text-align:left; vertical-align:top;" border="2" width="300">
																																																											<tr height="230">
																																																																	<td>
																																																																								<table width="320" style="font-family:cooper;" border="1" >
																																																																																<tr align="center" height="50">
																																																																																									<td colspan="2" style="background-color:maroon; font-family:cooper; font-size:20px;">Login Window</td>
																																																																																																	</tr>
																																																																																																									<tr align="center" height="50">
																																																																																																																		<td>Username</td>
																																																																																																																											<td><input type="text" name="u1"  />*</td>
																																																																																																																																			</tr>
																																																																																																																																											<tr align="center" height="50">
																																																																																																																																																				<td>Password</td>
																																																																																																																																																													<td><input type="password" name="p1"  />*</td>
																																																																																																																																																																					</tr>
																																																																																																																																																																													<tr align="center" height="50">
																																																																																																																																																																																						<td colspan="2"><input type="submit" name="submit" value="Login" onclick="return check()" /></td>
																																																																																																																																																																																														</tr>
																																																																																																																																																																																																						<tr align="center">
																																																																																																																																																																																																															<td colspan="2" style="background-color:maroon; font-family:cooper; font-size:16px;">
																																																																																																																																																																																																																									<?php
																																																																																																																																																																																																																																				require "connection.php";
																																																																																																																																																																																																																																															session_start();
																																																																																																																																																																																																																																																										if(isset($_POST["u1"]) && isset($_POST["p1"]))
																																																																																																																																																																																																																																																																					{
																																																																																																																																																																																																																																																																																	$count=0;
																																																																																																																																																																																																																																																																																													$usr = $_POST["u1"];
																																																																																																																																																																																																																																																																																																									$pwd = $_POST["p1"];
																																																																																																																																																																																																																																																																																																																					$rs = mysql_query("select * from login where username = '$usr' and password = '$pwd'");
																																																																																																																																																																																																																																																																																																																																	$row = mysql_fetch_array($rs);
																																																																																																																																																																																																																																																																																																																																													$count = mysql_num_rows($rs);
																																																																																																																																																																																																																																																																																																																																																									if($count == 1)
																																																																																																																																																																																																																																																																																																																																																																					{
																																																																																																																																																																																																																																																																																																																																																																																		if($row["usertype"]=="admin")
																																																																																																																																																																																																																																																																																																																																																																																															{
																																																																																																																																																																																																																																																																																																																																																																																																													header("location:adminhome.php");
																																																																																																																																																																																																																																																																																																																																																																																																																										}
																																																																																																																																																																																																																																																																																																																																																																																																																																							else if($row["usertype"]=="faculty")
																																																																																																																																																																																																																																																																																																																																																																																																																																																				{
																																																																																																																																																																																																																																																																																																																																																																																																																																																																		header("location:facultyhome.php");
																																																																																																																																																																																																																																																																																																																																																																																																																																																																															}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												echo "Login successful";
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				else
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																{
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													echo "Invalid username or password";
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					$_SESSION['username'] = $_POST["u1"];
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										?>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		</table>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		<tr height="320">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								<td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																															<table width="320">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							<tr height="50" align="center">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																<td style="background-color:maroon; font-family:cooper; font-size:20px;">News Flash</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																<tr height="250">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<td></td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								</table>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							</table>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														<tr align="center" height="40">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	<td colspan="2" class="footer">Designed By - Dipanshu Baranwal</td>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				</table>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				</form>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				</body>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				</html>


