<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Grid Box</title>
		<style type="text/css">
			body {width:100% !important; padding:0; margin:0; text-align:left !important; font-family:Arial,Helvetica,sans-serif; }
			h1, h2, h3, h4, h5, h6, p, a { margin:0; padding:0; }
			h1,h2,h3,h4,h5,h6 { font-weight:normal;color:#999; }
			h1  { color:#999; font-size:30px; line-height:38px; margin-bottom:8px; }
			h2  { color:#999; font-size:24px; line-height:28px; margin-bottom:5px; }
			p   { color:#666; font-size:14px; line-height:21px; font-weight:normal; }
			img { display:block; line-height:0; }
			a 	{ color:#57acd6; }
		</style>
	</head>
	<body style="margin:0; padding:0; width:100%;">

	<table cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;border-collapse:collapse; width: 100% !important; padding:0; margin:0; text-align:left;background:#e5e5e5;">
		<!--
		STRIP BAR
		This is the dark bar running the full width
		-->
		<tr style="background:#686868">
			<td>
				<table cellpadding="0" cellspacing="0" width="600px" align="center">
					<tr><td height="5px"></td></tr>
					<tr>
						<td valign="center">
							<p style="text-align:center; color: #999">Has this gone a bit Picasso?</p>
						</td>
					</tr>
					<tr><td height="5px"></td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<!--
				BODY WRAPPER
				This contains all your content, to make the template wider or slimmer just change the width on this table.
				You'll have to change your images too though!
				-->
				<table cellpadding="20" cellspacing="0" width="600px" align="center" style="table-layout:fixed;border-collapse:collapse;">
					<tbody>
						<!-- TITLE OF THE NEWSLETTER -->
						<tr>
							<td valign="top" style="padding-bottom:0px;">
								<h1 style="color:#333;">Post Title: <?php echo date('d-m-Y'); ?></h1>
							</td>
						</tr>
						<!--
						TOP IMAGE
						Throw in a awesome image, here I've used a kitten placeholder
						-->
						<tr>
							<td valign="top">
								<img style="display:block;line-height:0;" alt="title" src="http://placekitten.com/g/560/250">
							</td>
						</tr>
						<tr>
							<td valign="top" style="padding-top:20px;padding-bottom:10px;">
								<h2 style="color:#333;">Suspendisse quis enim at mi</h2>
								<p style="color:#666;">Fusce consectetur pretium ipsum, non vulputate augue euismod ut. Praesent a ipsum turpis. Duis sit amet mauris interdum nibh adipiscing aliquam id id urna. Fusce consectetur pretium ipsum, non vulputate augue euismod ut.</p>
							</td>
						</tr>
						<tr>
							<td valign="top" style="padding-top:10px;padding-bottom:20px;">
								<p style="font-size:11px;margin-bottom:10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi odit, commodi ducimus consectetur et laboriosam magni vel quibusdam possimus repudiandae, quisquam hic error ut quae voluptate cupiditate delectus dolore reiciendis! Fusce consectetur pretium ipsum, non vulputate augue euismod ut. Praesent a ipsum turpis. Duis sit amet mauris interdum nibh adipiscing aliquam id id urna. Fusce consectetur pretium ipsum, non vulputate augue euismod ut.</p>
							</td>
						</tr>
						<tr>
							<!-- https://developers.google.com/chart/infographics/docs/qr_codes?csw=1 -->
							<td><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://www.reddit.com/?count=25&choe=UTF-8" /></td>
						</tr>
						<tr><td height="20px"></td></tr>
					</tbody>
				</table>
				<!--
				FOOTER
				End of main section
				-->
				<table cellpadding="0" cellspacing="0" width="600px" align="center" style="table-layout:fixed;border-collapse:collapse;">
					<tr><td height="10px"></td></tr>
					<tr>
						<td>
							<p>Copyright &copy; Project 2012. All rights reserved.</p>
						</td>
					</tr>
					<tr><td height="20px"></td></tr>
				</table>
			</td>
		</tr>
	</table>
	</body>
</html>