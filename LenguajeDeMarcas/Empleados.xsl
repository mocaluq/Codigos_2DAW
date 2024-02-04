<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns="http://www.w3.org/1999/xhtml" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="empleados">
    <html>
      <head>
        <title>Empleados con Sueldo Mayor a 2000</title>
      </head>
      <body>
        <h2>Empleados con Sueldo Mayor a 2000</h2>
        <ul>
          <xsl:for-each select="//empleado[sueldo > 2000]">
            <li>
              <xsl:value-of select="nombre"/> <xsl:text> </xsl:text><xsl:value-of select="apellidos"/> - Sueldo: <xsl:value-of select="sueldo"/>
            </li>
          </xsl:for-each>
        </ul>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
