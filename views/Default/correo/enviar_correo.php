<div>
    <div>
      <img style='margin-left:20%; margin-top:20px; width:60%;' src="148.220.52.120/womenit/public/images/women.png" alt='logo'>
    </div>
    <div style= 'flex-direction:column; text-align:center; justify-content:center;'>
      <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.8); font-weight:lighter !important;'>Hola, <?=$data['nombre']?>:</h1>
      <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.8); font-weight:lighter !important;'>GRACIAS POR REGISTRARTE</h1>
      <h2 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.7); font-weight:lighter !important;'>El evento se llevará a cabo el día 15 de Marzo de 2018 a partir de las 8:30 a.m.
      <br>en el centro de negocios de la UAQ</h2>
      <h3 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.6); font-weight:lighter !important;'>Av. de las Ciencias S/N Juriquilla, Qro.</h3>
      <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.7); font-weight:lighter; margin-top:30px; margin-bottom:0px;'>Código de confirmación:</h1>
      <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,255,.8); font-weight:lighter;'><?=$data['codigo']?></h1>
      <h4 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.6); font-weight:lighter !important;'>Este código se deberá presentar para acceder al evento.</h4>
      <a href="<?=URL.'Confirmacion/clave/'.$data['codigo']?>">Da click aqui para confirmar tu registro</a>
      <h4 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.5); font-weight:lighter !important;'> NOTA: Cualquier duda, aclaración o inconveniente,
      <br> favor de comunicarte al teléfono 192 12 00 ext. 5911 o envíanos un correo de respuesta,
      <br> para darle solución de manera inmediata.</h4>
    </div>
</div>
