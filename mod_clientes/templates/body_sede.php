									<tbody>
										<tr class="fila-base">
										
										<td>										
											<div class="col col-md-6">
												<div class="input-group">
													<span class="primary input-group-addon" id="basic-addon-emp"><span class="glyphicon glyphicon-home"> </span> </span>
													<input value = "<?php echo explode("|", $Sede['Sede'])[$i]; ?>" type="text" id="SedeS" class="form-control SedeS" placeholder="Sede" aria-describedby="basic-addon-sede">
												</div>
											</div>
												
											<div class="col col-md-6">
												<div class="input-group">
													<span class="primary input-group-addon" id="basic-addon-emp"><span class="glyphicon glyphicon-map-marker"> </span> </span>
													<input value = "<?php echo explode("|", $Sede['Direccion'])[$i]; ?>" type="text" id="DireccionS" class="form-control DireccionS" placeholder="Direccion" aria-describedby="basic-addon-dir">
												</div>
											</div>
											
											<div class="col col-md-6">
												<div class="input-group">
													<span class="primary input-group-addon" id="basic-addon-emp"><span class="glyphicon glyphicon-globe"> </span> </span>
													<input value = "<?php echo explode("|", $Sede['Ciudad'])[$i];?>" type="text" id="CiudadS" class="form-control CiudadS" placeholder="CiudadS" aria-describedby="basic-addon-ciudad">
												</div>
											</div>
												
											<div class="col col-md-5">
												<div class="input-group">
													<span class="primary input-group-addon" id="basic-addon-emp"><span class="glyphicon glyphicon-phone-alt"> </span> </span>
													<input value = "<?php echo explode("|", $Sede['Telefono'])[$i]; ?>" type="text" id="TelefonoS" class="form-control TelefonoS" placeholder="Telefono" aria-describedby="basic-addon-telefono">
												</div>
											</div>											
											
											<div class="eliminar col col-md-1">
												<div style="width:40px">
													<a class="delete_sede" id="eliminarSede" > 
														<div data-toggle="tooltip"  data-target="#confirma" title="Eliminar sede" class="btn btn-danger fa fa-times eliminar"></div>
													</a>
												</div>
											</div>
										</td>
										
										</tr>			
									</tbody>