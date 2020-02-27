<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<meta name="description" content="Panduan membuat tabel dengan HTML 5 dan CSS 3. Dilengkapi dengan kode HTML dan CSS yang diap digunakan">
	<link rel="shortcut icon" href="img/favicon.png">
	<style type="text/css">
		/* SITE */
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		.main-wrapper a {
			text-decoration: none;
			color: #3586b7;
		}
		.main-wrapper a.text-link:hover {
			border-bottom: 1px dashed #CCCCCC;
		}
		.tutorial-link-wrapper {
			text-align: center;
		}
		header {
			padding: 10px 30px 7px 30px;
			border-bottom: 2px solid #636b71;
			background: #343d44;
		}
		/*footer {   
			background: #343d44;
			padding: 10px 0 7px 30px;
			color: #b9bfc3;
			font-size: 13px;
		}*/
		footer a {
			color: #b9bfc3;
			text-decoration: none;
			margin-left: 10px;
		}
		.link-header {
			margin-top: 10px;
		}
		.link-header a {
			font-size: 15px;
			color: #b9bfc3;
			text-decoration: none;
			margin: 0;
		}
		.link-header a.home:hover {
			color: #b9bfc3;
		}
		.main-wrapper {
			padding: 25px 0;
		}
		.link-header {
			float: right;
		}
		.clearfix {
			clear: both;
		}
		@media screen and (max-width: 450px) {
			header,
			footer {
				text-align: center;
			}
			.link-header {
				float: none;
				margin: 0;
			}
		}
		
		/* TABLE */
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		.table-wrapper {
			overflow: auto;
		}
		.main-wrapper {
			padding: 20px;
		}
		.main-wrapper a:hover {
			border-bottom: 1px dashed #CCCCCC;
		}
		
		/* Table */
		.demo-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.demo-table th, 
		.demo-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.demo-table caption {
			margin: 7px;
		}

		/* Table Header */
		.demo-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
		}
		.demo-table tbody td:first-child,
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:last-child {
			text-align: right;
		}

		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.demo-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.demo-table tfoot th:first-child {
			text-align: left;
		}
		.demo-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
		/* Table 2 */
		.demo-table2 {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 536px;
		}

		.demo-table2 th, 
		.demo-table2 td {
			padding: 7px 17px;
		}
		.demo-table2 caption {
			margin: 7px;
		}

		.demo-table2 thead th:last-child,
		.demo-table2 tfoot th:last-child,
		.demo-table2 tbody td:last-child {
			border: 0;
		}

		/* Table Header */
		.demo-table2 thead th {
			border-right: 1px solid #c7ecc7;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table2 tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
		}
		.demo-table2 tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table2 tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table2 tbody td:nth-child(4),
		.demo-table2 tbody td:first-child,
		.demo-table2 tbody td:last-child {
			text-align: right;
		}
		.demo-table2 tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.demo-table2 tfoot th {
			border-right: 1px solid #c7ecc7;
			text-align: right;
		}
	</style>
</head>
<body data-gr-c-s-loaded="true">
<form method="post" action="update">
<body data-gr-c-s-loaded="true">
<div class="main-wrapper">
	<div align="right">
	<button ><a href="page2" >Back To Home</a></button>
	</div>
	<h1>INI ISIEN BROOO</h1><br>
	<div class="table-wrapper">
	<table class="demo-table">
		<thead align="center">
			<tr>
				<th>User ID Message</th>
				<th>TO User</th>
				<th>From User</th>
				<th>Chat </th>

			</tr>
		</thead>
		<?php 
			 ?>
		<tbody align="center">
			<tr>
			<td align="center"><input readonly="" type="text" name="chat_message_id" value="<?php echo $kiriman?>" ></td>
			<td><input type="" name="to_user_id" required=""></td>
			<td><input type="" name="from_user_id" required=""></td>
			<td><input type="" name="chat_message" required=""></td>
			</tr>
		</tbody>
			<div align="center">
			<button>INSERT</button>
			</div>

		<?php 
		 ?>
</table>
</form>
</div>
</body>

</html>