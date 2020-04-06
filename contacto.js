document.write('\
<div class="row">\
					<div class="col-sm">\
						<div id="contact">\
							<h1 class="titulo">Consultas</h1>\
							<p>Contáctese con nosotros para realizarnos cualquier consulta.</p></br>\
							<form name="contactform" method="post" action="action_page.php">\
								<input type="text" class="resizedTextbox" placeholder="Nombre" name="Name"></br></br>\
								<input type="text" class="resizedTextbox" placeholder="Email (CAMPO OBLIGATORIO)" name="Email"></br></br>\
								<input type="text" class="resizedTextbox" placeholder="Telefono" name="Telefono"></br></br>\
								<input type="text" class="resizedTextbox" placeholder="Tema" name="Subject"></br></br>\
								<input type="text" class="resizedTextboxComment" placeholder="Comentario" name="Comment"></br></br>\
								<button style="margin-left: 30px;" type="submit">\
									<i></i> ENVIAR CONSULTA\
								</button>\
							</form>\
						</div>\
					</div>\
				</div>\
');