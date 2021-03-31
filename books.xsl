<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<?xml-stylesheet href="lab5.css"?>
  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="lab5.css" />
      </head>
      <body>
        <h1 class="header1">Books</h1>
        <table class="table1">
          <tr>
            <th class="th1">Book</th>
            <th class="th1">Date of publishing</th>
          </tr>
            <xsl:for-each select="tableBooks/book">
              <tr>
                  <xsl:choose>
                    <xsl:when test="year=1954">
                      <td class="td2">
                        <xsl:value-of select="name"/>
                      </td>
                      <td class="td2">
                        <xsl:value-of select="year"/>
                      </td>
                    </xsl:when>
                    <xsl:otherwise>
                      <td class="td1"><xsl:value-of select="name"/></td>
                      <td class="td1"><xsl:value-of select="year"/></td>
              </xsl:otherwise>
            </xsl:choose>
              </tr>
            </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
