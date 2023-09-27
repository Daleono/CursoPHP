<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		
		
		</style>
        
    </head>
    
    <body>
    
        <form action="Insertar_PDO_Pagina.php" method="post">
        <table><tr>
          <td>
            Código Artículo</td><td><input type="text" name="c_art" id="c_art"></td></tr>
           <tr>
             <td> Sección </td><td><input type="text" name="seccion" id="seccion"></td></tr>
           <tr>
             <td>Nombre Artículo</td>
             <td><input type="text" name="n_art" id="n_art"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="enviando" value="Enviar">
        </td></tr></table>
        </form>
    
    </body>
    
</html>