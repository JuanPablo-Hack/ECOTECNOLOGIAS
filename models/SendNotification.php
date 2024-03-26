<?php

function mandarReservacionVentas($servicio, $datos_cliente)
{
    $destinatario = 'juanpablodejesusfigueroa@gmail.com';
    $asunto = 'Reservacion del sitio web';
    $cuerpo =
        ' 
        <!DOCTYPE html>
        <html
          lang="en"
          xmlns="http://www.w3.org/1999/xhtml"
          xmlns:o="urn:schemas-microsoft-com:office:office"
        >
          <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width,initial-scale=1" />
            <meta name="x-apple-disable-message-reformatting" />
            <style>
              table,
              td,
              div,
              h1,
              p {
                font-family: Arial, sans-serif;
              }
              @media screen and (max-width: 530px) {
                .unsub {
                  display: block;
                  padding: 8px;
                  margin-top: 14px;
                  border-radius: 6px;
                  background-color: #555555;
                  text-decoration: none !important;
                  font-weight: bold;
                }
                .col-lge {
                  max-width: 100% !important;
                }
              }
              @media screen and (min-width: 531px) {
                .col-sml {
                  max-width: 27% !important;
                }
                .col-lge {
                  max-width: 73% !important;
                }
              }
            </style>
          </head>
          <body
            style="
              margin: 0;
              padding: 0;
              word-spacing: normal;
              background-color: #ffffff;
            "
          >
            <div
              role="article"
              aria-roledescription="email"
              lang="en"
              style="
                text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                background-color: #fff;
              "
            >
              <table
                role="presentation"
                style="width: 100%; border: none; border-spacing: 0"
              >
                <tr>
                  <td align="center" style="padding: 0">
                    <table
                      role="presentation"
                      style="
                        width: 94%;
                        max-width: 600px;
                        border: none;
                        border-spacing: 0;
                        text-align: left;
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        line-height: 22px;
                        color: #363636;
                      "
                    >
                      <tr>
                        <td
                          style="
                            padding: 40px 30px 30px 30px;
                            text-align: center;
                            font-size: 24px;
                            font-weight: bold;
                          "
                        >
                          <a
                            href="http://ecotecnologiasdelpacifico.com/"
                            style="text-decoration: none"
                            ><img
                              src="http://ecotecnologiasdelpacifico.com/assets/img/logo.png"
                              width="165"
                              alt="Logo"
                              style="
                                width: 165px;
                                max-width: 80%;
                                height: auto;
                                border: none;
                                text-decoration: none;
                                color: #ffffff;
                              "
                          /></a>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 30px; background-color: #ffffff">
                          <h1
                            style="
                              margin-top: 0;
                              margin-bottom: 16px;
                              font-size: 26px;
                              line-height: 32px;
                              font-weight: bold;
                              letter-spacing: -0.02em;
                            "
                          >
                            Hemos tenido una nueva peticion de servicios de ' .
        $servicio .
        ' !
                          </h1>
                          <p style="margin: 0">
                              Administrador ha llegado una nueva petición a nombre de: ' .
        $datos_cliente[0] .
        ', correo electronico ' .
        utf8_encode($datos_cliente[1]) .
        '. <br><br>
                              Telefono: ' .
        utf8_encode($datos_cliente[2]) .
        ' <br><br>
                              Tipo de paquete: ' .
        $datos_cliente[3] .
        ' <br><br>
                              Dirección: ' .
        $datos_cliente[4] .
        ' <br><br>
                              Coordenadas: ' .
        $datos_cliente[5] .
        ' , ' .
        $datos_cliente[6] .
        '
                          </p>
                          <br />
                        </td>
                      </tr>
                      <tr>
                        <td
                          style="
                            padding: 30px;
                            text-align: center;
                            font-size: 12px;
                            background-color: #2b3f54;
                            color: #fff;
                          "
                        >
                          <p style="margin: 0; font-size: 14px; line-height: 20px">
                            &reg; ECOTECNOLOGIAS DEL PACIFICO, todos los derechos reservados 2024<br /><a
                              class="unsub"
                              href="http://ecotecnologiasdelpacifico.com/"
                              style="color: #fff; text-decoration: underline"
                              >www.ecotecnologiasdelpacifico.com</a
                            >
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </body>
        </html>    
      ';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: SITIO WEB <$datos_cliente[1]>\r\n";
    mail($destinatario, $asunto, $cuerpo, $headers);
    echo 1;
}
