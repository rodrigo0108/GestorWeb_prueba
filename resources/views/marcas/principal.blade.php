<form method="post" action="/marca/pedido">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
Seleccione su fruta
<br/>
<select name="fruta">
	<option value="naranja_id">Naranja</option>
	<option value="mandarina_id">Mandarina</option>
	<option value="fresa_id">Fresa</option>
	<option value="uva_id">Uva</option>
</select>
<br/>
Ingrese la cantidad en kilos:
<br/>
<input type="text" name= "cantidad" />
<br/>
<input type="submit" value="Enviar" />

</form>