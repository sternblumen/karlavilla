<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Imprime tu Beneficio</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body {
				width:100% !important;
				padding:0;
				margin:0;
				text-align:left !important;
				font-family: 'Open Sans', sans-serif;
			}
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

	<table cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;border-collapse:collapse; width: 100% !important; padding:0; margin:0; text-align:left;">

		<!-- Header -->
		<tr style="border-bottom: solid 1px #ededed; ">
			<td>
				<table cellpadding="0" cellspacing="0" width="600px" height="65px" align="center" style="margin-top:10px; margin-bottom:10px;">
					<tr>
						<td height="5px"></td>
					</tr>
					<tr>
						<td valign="center">
							<p style="font-size: 24px; font-weight:300; text-align:left; color: #008300; display:inline;">¡Disfruta de tu Beneficio!</p>
						</td>
						<td width="110px">
							<img style="display:inline;" src="imss-logo.jpg" alt="Imss"/>
						</td>
					</tr>
					<tr>
						<td height="5px"></td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- fin Header -->

		<!-- contenido beneficio  -->
		<tr>
			<td>
				<table cellpadding="0" cellspacing="0" width="600px" align="center" style="table-layout:fixed;border-collapse:collapse; border-spacing:0px;">
					<tbody>
						<tr>
							<td align="top" width="180px">
								<img style="border: solid 1px #ededed; display:block;line-height:0;" alt="Beneficio" src="img-beneficio.jpg">
							</td>
							<td>
								<table>
									<!-- TITULO BENEFICIO -->
									<tr>
										<td style="border-bottom: solid 1px #ededed; padding-top:20px; padding-bottom:20px; font-weight:700; color:#106858; font-size:24px;">
										2x1 en Cinepolis
										</td>
									</tr>

									<!-- VALIDEZ -->
									<tr>
										<td style="padding-top:10px; padding-bottom:20px; font-weight:700; color:#75AF1D; font-size:13px;">
											Válido del:20/08/2014 <br />
											Hasta:30/08/2014
										</td>
									</tr>

									<!--DESCRIPCIÓN -->
									<tr>
										<td>
											<p>
												Disfruta con tu familia de una entrada gratis a Cinepolis.
												Presenta este cupón impreso o desde tu celular para hacer válida la promoción
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td valign="top" style="">
								<table cellpadding="0" cellspacing="0" width="600px" align="center" style="margin-top:10px; margin-bottom:10px; background:#ccc;">
									<tr style="padding-top:20px;">
										<!--TERMINOS Y CONDICIONES-->
										<td width="440px">
											1
										</td>
										<!--QR CODE-->
										<td width="160px">
											<!-- https://developers.google.com/chart/infographics/docs/qr_codes?csw=1 -->
											<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://www.reddit.com/?count=25&choe=UTF-8" />
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
						<td height="20px">

						</td>
						</tr>
					</tbody>
				</table>
				<!--FOOTER-->
				<table cellpadding="0" cellspacing="0" width="600px" align="center" style="table-layout:fixed;border-collapse:collapse;">
					<tr><td height="10px"></td></tr>
					<tr>
						<td>
							<p>Copyright &copy; Project 2012. All rights reserved.</p>
							<p>Beneficio generado el día: <?php echo date('d-m-Y'); ?></p>
						</td>
					</tr>
					<tr><td height="20px"></td></tr>
				</table>
			</td>
		</tr>
	</table>
	</body>
</html>